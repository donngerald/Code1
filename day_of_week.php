<?php
$pageTitle = "WHAT DAY IS IT?";
$dayOfWeek = date('l');
switch ($dayOfWeek) {
    case 'Monday':
        $message = $dayOfWeek . '<br>Monday Blues!';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = $dayOfWeek . '<br>At least it\'s not Monday';
        $color = 'purple';
        break;
    case 'Wednseday':
        $message = $dayOfWeek . '<br>HUMP day';
        $color = 'green';
        break;
    case 'Thursday':
        $message = $dayOfWeek . '<br>One more day until firday';
        $color = 'orange';
        break;
    case 'Friday':
        $message = $dayOfWeek . '<br>TGIF!';
        $color = 'red';
        break;
    case 'Saturday':
        $message = $dayOfWeek . '<br>Have a nice weekend';
        $color = 'magenta';
        break;
    case 'Sunday':
        $message = $dayOfWeek . '<br>Try go church';
        $color = 'black';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
        font-family: 'Courier New', Courier, monospace;
        background-color: <?= $color ?>;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }
    </style>
</head>
<body>
      <h1><?=strtoupper($message); ?></h1>

</body>
</html>
