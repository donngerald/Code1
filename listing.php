<?php
$numbers = [2, 5, 8, 19, 45];
$sum = array_sum($numbers);
$amount = count($numbers);

/*echo "The sum is " . $sum . " and the amoutn is " . $amount;

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
array_push($colors);
array_splice($colors, 1, 1, 'pink');
array_pop($colors);
print_r($colors);*/

$listing = [
    [
        'id' => 1,
        'job_title' => 'Director',
        'company' => 'G-Soft Technologies LLC',
        'contact_email' => 'geranwa@outlook.com',
        'contact_number' => '08063554550',
        'skills' => ['CCTV', 'WEBDEV', 'INTERCOM', 'CABLE']
    ],
    [
        'id' => 2,
        'job_title' => 'Manager',
        'company' => 'G-Soft Technologies LLC',
        'contact_email' => 'thankgod001@gmail.com',
        'contact_number' => '08022709222',
        'skills' => ['CCTV', 'MOBILE', 'TRACKER', 'CABLE']
    ],
    [
        'id' => 3,
        'job_title' => 'Secretary',
        'company' => 'G-Soft Technologies LLC',
        'contact_email' => 'chinnystar@gmail.com',
        'contact_number' => '08085853851',
        'skills' => ['CCTV', 'APRECIATION', 'STYLIST', 'CONTENT']
    ]
];

array_push($listing, [
    [
        'id' => 4,
        'job_title' => 'Radiographer',
        'company' => 'G-Soft Technologies LLC',
        'contact_email' => 'babenazzy@outlook.com',
        'contact_number' => '08063554660',
        'skills' => ['MEDICINE', 'RAD', 'INTERCOM', 'LAB']
    ]
]);

//print_r($listing);
echo $listing[1]['job_title'];
echo $listing[2]['skills'][0];


// for($g = 0; $g < 10; $g++) {
//     echo $g . '<br>';
// };

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
    <div class="bg-white rounded shadow p-4 mt-4">


    </div>
</div>
    <div class="grid-container">
        
    </div>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>