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

//check for form submit
$isPutRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'put');
    $title = htmlspecialchars($_POST['title'] ?? '');
    $body = htmlspecialchars($_POST['body'] ?? '');

if ($isPutRequest) {$sql = 'UPDATE blog.posts SET title = :title, body = :body WHERE id = :id';
$stmt = $pdo->prepare($sql);
$params = [
    'title' => $title,
    'body' => $body,
    'id' => $id
];
$stmt->execute($params);
header('Location: test.php');
exit;}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title>Update Blog Post</title>
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
     
<div class="flex justify-content-center mt-10">
    <div class="bg-white p-8 rounded shadow max-width: 28rem">
        <h1 class="text-center mb-6">Update Blog Post</h1>
        <form method="POST">
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <div class="mb-4">
                <label for="title" class="form-label block fw-medium text-secondary active">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" w-100 px-4 py-2 
                rounded focus:ring focus:outline-none required value="<?= $post['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" required><?= $post['body'] ?></textarea>
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <button type="submit" name="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-subtle
         focus:outline-none text-decoration-none">Submit</button>
            <a href="test.php" class="primary-subtle text-decoration-none">Back To Posts</a>
            </div>
        </form>
    </div>
</div>
  

</body>
</html>