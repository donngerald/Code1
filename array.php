<?php
$title = "Introduction to PHP";
$author = "Engr Gerald";
$body = "PHP (Hypertext Processor) is a widely used server-side scripting language that has revolutionalized web
            development, with it's simplicity and flexibility, and vast community support, PHP has become the backbone of
            countless dynamic website and web applications.";
$pageTitle = 'Gerald\'s PHP blog | ' . $title;
echo "My name is Gerald, Welcome to my World!<br>";





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <main>
        <button class="btn btn-primary" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#testContent">
  Toggle content
</button>

<div class="collapse mt-3" id="testContent">
  <div class="card card-body">
    Bootstrap JavaScript works.
  </div>
</div>
        <button id="boot" class="btn btn-secondary">Hello Bootstrap</button>
        <h1><?= $title ?></h1>
        <p>By: <?= $author ?></p>
        <p><?= $body ?>        </p>
        <textarea></textarea>
    </main>    
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<?php

$person = new stdClass();
var_dump($person);
?>