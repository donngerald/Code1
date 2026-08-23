<?php
//*Nested for loop
    // for ($i = 0; $i < 5; $i++){
    //     for ($j = 0; $j < 5; $j++){
    //         echo $j . ' - ' . $i;
    //     }
    // };

//*Nested while loop
    // while ($i < 5) {
    //     $j = 0;

    //     while ($j < 5) {
    //         echo $i . ' - ' . $j;
    //         $j++;
    //     }
    //     $i++;
    // }


$listing = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled and motivated Software Engineer to join our dynamic team. The ideal 
        candidate will have a strong background in software development, problem-solving skills, and a passion for 
        creating innovative solutions. As a Software Engineer at G-Soft Technologies, you will be responsible for designing, 
        developing, and maintaining software applications that meet the needs of our clients.',
        'salary' => 80000,
        'location' => 'San Francisco',
        'tags' => ['Software Development', 'Full Stack', 'Python',]
    ],
    [
        'id' => 2,
        'title' => 'Marketing Specialist',
        'description' => 'We are seeking a creative and results-driven Marketing Specialist 
        to join our team. The ideal candidate will have experience in digital marketing, content creation, and 
        campaign management.',
        'salary' => 60000,
        'location' => 'New York',
        'tags' => ['Digital Marketing', 'Content Creation', 'Campaign Management']
    ]
    // [
    //     'id' => 3,
    //     'title' => 'Secretary',
    //     'company' => 'G-Soft Technologies LLC',
    //     'contact_email' => 'chinnystar@gmail.com',
    //     'contact_number' => '08085853851',
    //     'skills' => ['CCTV', 'APRECIATION', 'STYLIST', 'CONTENT']
    // ]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <title>Job Listings For G-Soft Technologies</title>
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
        <h1 class="h2 fw-semibold mb-0">PHP From Scratch</h1>
    </div>
</header>
    <div class="grid-container">
        <?php for ($i = 0; $i < 5; $i++) : ?>
        <?php for ($j= 0; $j< 5; $j++) :?>
            <div class="grid-item">
            <?=  $i . ' - ' . $j; ?>
            </div>

        <?php endfor ?>
        <?php endfor ?>
    </div>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>