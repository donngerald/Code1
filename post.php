<?php
require 'database1.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$id = $_GET['id'] ?? null;

//redirecting to test.php if id is not provided
if (!$id) {
    header('Location: test.php');
    exit;
}

$sql = 'SELECT * FROM blog.posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$params = ['id' => $id];
$stmt->execute($params);
$post = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title><?= $post['title'] ?></title>
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
   
<div class="md my-4">
    <div class="rounded shadow mb-lg-5">
        <div class="p-4">
            <h2 class="text-xl fw-semibold"><?= $post['title'] ?></h2>
            <p class="text-secondary fs-5 mt-2"><?= $post['body'] ?></p>
            <a href="test.php" class="btn btn-primary mt-3">Back to Home</a>
        </div>
    </div>

    <!-- Delete Form-->
     <form action="delete.php" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="id" value="<?= $post['id'] ?>" >
        <button type="submit" name="submit" class="bg-danger text-light px-4 py-2 rounded">Delete</button>
     </form>
</div>
  

</body>
</html>