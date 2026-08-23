<?php
$title = "Introduction to PHP";
$author = "Engr Gerald";
$body = "PHP (Hypertext Processor) is a widely used server-side scripting language that has revolutionalized web
            development, with it's simplicity and flexibility, and vast community support, PHP has become the backbone of
            countless dynamic website and web applications.";
$pageTitle = 'Gerald\'s PHP blog | ' . $title;
echo "My name is Gerald, Welcome to my World!<br>";


//Basic maths
$output = date('l d-M-Y h:i:s a');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <main>
        <h1><?= $title ?></h1>
        <p>By: <?= $author ?></p>
        <p><?= $body ?>        </p>
        <textarea><?= $output; ?></textarea>
    </main>    

</body>
</html>



<?php

$person = new stdClass();
var_dump($person);
?>