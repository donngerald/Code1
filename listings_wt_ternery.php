<?php
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
        'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
        'salary' => 60000,
        'location' => 'New York',
        'tags' => ['Digital Marketing', 'Social Media', 'SEO']
    ],
      [
        'id' => 3,
        'title' => 'Accountant',
        'description' => 'We are hiring a skilled accountant to handle financial transactions and ensure compliance.',
        'salary' => 55000,
        'location' => 'Chicago',
        'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
    ],
      [
         'id' => 4,
        'title' => 'UX Designer',
        'description' => 'We are seeking a talented UX designer to create intuitive and vissually appealing UI',
        'salary' => 70000,
        'location' => 'Seatle',
        'tags' => ['User Experience', 'Wireframing', 'Prototyping']
    ],
      [
        'id' => 5,
        'title' => 'Customer Service Representtive',
        'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
        'salary' => 40000,
        'location' => 'New York'
      ]
];

function formatSalary($salary) {
    return '$' . number_format($salary, 2);
}

function calculateAverageSalary($listing) {
    $totalSalary = 0;
    $count = count($listing);

    foreach ($listing as $job) {
        $totalSalary += $job['salary'];
    }

    return $count > 0 ? $totalSalary / $count : 0;
}

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
        <div class="bg-success-subtle rounded shadow p-6 my-6">
            <h1 class="text-2xl font-monospace mb-4">Average Salary: <?= formatSalary(calculateAverageSalary($listing)); ?></h1>
        </div>
        <?php foreach($listing as $index => $job) : ?>
        <div class="md mt-4">
            <div class="<?= $index % 2 === 0 ? 'bg-primary-subtle' : 'bg-white' ?>
             rounded-3 shadow">
                <div class="p-4">
            <h2 class="fs-4 fw-semibold"><?= $job['title'] ?></h2>

            <p class="text-grey-700 mt2"><?= $job['description'] ?></p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2">
                        <strong>Salary:</strong> <?= formatSalary($job['salary']) ?>
                    </li>
                      <li class="mb-2">
                        <strong>Location:</strong> <?= $job['location'] ?>
                        <?= $job['location'] === 'New York' ? 
                            '<span class="small text-white bg-primary rounded-pill px-2 py-1 ms-2">
                            Local
                            </span> ':' <span class="small text-white bg-success rounded-pill px-2 py-1 ms-2">
                            Remote
                            </span>'
                        ?>
                    </li>
                      <li class="mb-2">
                        <?= (!empty($job['tags'])) ? '<strong>Tags:</strong>' . implode(', ', $job['tags']) : ''  ?>
                    </li>
                </ul>
            </p>
        </div>
            </div>
        </div>
     <?php endforeach ?>
    </div>
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>