<?php
$names = ['Esther', 'Lizzy', 'TG', 'Nazzy', 'Gee'];

$users = [
    ['name' => 'John','email' => 'john@email.com'],
    ['name' => 'Jane','email' => 'jane@email.com'],
    ['name' => 'Joe','email' => 'joe@email.com'],
    ['name' => 'Mary','email' => 'mary@email.com']
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
<body class="bg-grey-100">
<header class="bg-primary text-white p-4">
    <div class="container mx-auto">
        <h1 class="h2 fw-semibold mb-0">Job Listings</h1>
    </div>
</header>
    <div class="container p-4 mt-4">
        <div class="md mt-4">
            <div class="bg-white rounded-3 shadow">
                <div class="p-4">
            <h2 class="fs-4 fw-semibold">Software Engineer</h2>

            <p class="text-grey-700 mt2">We are seeking a skilled software engineer to develop
                high-quality software solution.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2">
                        <strong>Salary:</strong> $80,000
                    </li>
                      <li class="mb-2">
                        <strong>Location:</strong> San Francisco
                    </li>
                      <li class="mb-2">
                        <strong>Tags:</strong> Software Development, Java, Python
                    </li>
                </ul>
            </p>
        </div>
            </div>
        </div>
        <div class="md mt-4">
            <div class="bg-white rounded-3 shadow">
                <div class="p-4">
            <h2 class="fs-4 fw-semibold">Marketin Specialist</h2>

            <p class="text-grey-700 mt2">We are looking for a marketing specialist to develop and implement 
                effective marketing strategy.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2">
                        <strong>Salary:</strong> $60,000
                    </li>
                      <li class="mb-2">
                        <strong>Location:</strong> New York
                    </li>
                      <li class="mb-2">
                        <strong>Tags:</strong> Digital Marketing, Social Media, SEO
                    </li>
                </ul>
            </p>
        </div>
            </div>
        </div>
    </div>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>