<?php
// echo "<h3>MULTIPLICATION TABLE</h3>";
// // for ($i = 1; $i <= 10; $i++) {
// //     for ($j = 1; $j <= 10; $j++) {
// //         echo $i . " x " . $j . " = " . $i * $j . "<br>";
// //     }
// // }
// $students = [
//     [
//         'name' => 'Gerald',
//         'grade' => [80, 70, 78, 94]
//     ],
//     [
//         'name' => 'Uka',
//         'grade' => [85, 73, 68, 94]
//     ],
//     [
//         'name' => 'nenye',
//         'grade' => [84, 76, 58, 91]
//     ],
//     [
//         'name' => 'Thank',
//         'grade' => [87, 72, 78, 84]
//     ]
// ];

// foreach($students as $student) {
// $name = $student['name'];
// $grades = $student['grade'];
// //calculate the average
// $average = array_sum($grades) / count($grades);
// echo "{$name}: Average Grade = {$average} <br>";
// }

// $score = 30;
//     if ($score > 40) {
//         echo 'High Score';
//     }
//     else {
//         echo 'Low score';
//     }

// $names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Fredie', 'Adam'];

// foreach($names as $stud) {
//     $stud[0] === 'A' ? continue : echo strtolower(strrev($stud)) . '<br>'
// }
interface ContentInterface {
    public function display();
    public function edit();
}

class Article implements ContentInterface {
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
    }
    
    public function edit()
    {
        echo "Editing the atricle '{$this->title}'";
    }
}

class Video implements ContentInterface {
    private $title;
    private $url;

        public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }
    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<iframe src='{$this->url}'></iframe>";
    }
    
    public function edit()
    {
        echo "Editing the video '{$this->title}'";
    }
}

$article = new Article('Introduction to PHP Classes', 'PhP is a versatile scripting server side programing language.');
$video = new Article('PHP clases Explained', 'https://youtu.be/wsjmvlQm9hU?list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&t=6');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
    <title>PHP From Scratch</title>
</head>
<body class="bg-light">
<header class="bg-primary text-white p-4">
    <div class="container mx-auto">
        <h1 class="h2 fw-semibold mb-0">PHP From Scratch</h1>
    </div>
</header>
    <div class="container p-4 mt-4">
        <div class="bg-whitw rounded-3 shadow p-6 mt-6">
             <?= $article->display() ?>
        </div>
         <div class="bg-whitw rounded-3 shadow p-6 mt-6">
             <?= $video->display() ?>
        </div>
    </div>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>