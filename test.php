<?php

require 'database1.php';

//error catchin on browser
error_reporting(E_ALL);
ini_set('display_errors', 1);

// //prepare a SELECT statement.
 $stmt = $pdo->prepare('SELECT * FROM blog.posts');

// //Execute the select statement
 $stmt->execute();

 //Fetching the result
 $posts = $stmt->fetchAll();
 

// echo '<pre>';
// var_dump($results);
// echo '</pre>';

$title = "Introduction to PHP";
$author = "Engr Gerald";
$body = "PHP (Hypertext Processor) is a widely used server-side scripting language that has revolutionalized web
            development, with it's simplicity and flexibility, and vast community support, PHP has become the backbone of
            countless dynamic website and web applications.";
$pageTitle = 'Gerald\'s PHP blog | ' . $title;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title>MY BLOG</title>
    <style> 
    .grid-container { display: grid; 
        grid-template-columns: repeat(5, 50px); 
        grid-gap: 5px; } 
    .grid-item { 
        width: 50px; 
        height: 50px; 
        background-color: lightblue; 
        text-align: center; 
        line-height: 50px
        }
        </style>
   </head>
<body class="bg-light">
<header class="bg-primary text-white p-4">
    <div class="container mx-auto">
        <h1 class="h2 fw-semibold mb-0">My Blog</h1>
    </div>
</header>
     
<div class="container mx-auto p-4 mt-4">
   <?php foreach($posts as $post) : ?>
<div class="md my-4">
    <div class="rounded shadow">
        <div class="p-4">
            <h2 class="text-xl fw-semibold"><a href="post.php?id=<?= $post['id'] ?>" class="text-decoration-none "><?= $post['title'] ?></a></h2>
            <p class="text-secondary fs-5 mt-2"> <?= $post['body'] ?></p>
        </div>
    </div>
</div>
    <?php endforeach ?>
    <div class="mt6">
        <a href="create.php" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-subtle
         focus:outline-none text-decoration-none">Create Post</a>
    </div>
</div>

</body>
</html>