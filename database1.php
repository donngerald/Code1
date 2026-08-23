<?php
//Database Credentials.
$host = 'localhost';
$port = '3306';
$dbName = 'blog';
$username = 'gee';
$password = 'grace';

$dsn = "mysql:host={$host};port={$port};dbname{$dbName};charset=utf8";

try{
    //Creating a PDO instance
    $pdo = new PDO($dsn, $username, $password);
    //error catching inside the PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Database Connected Succefully....';
    //Getch as an associtive array
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}   catch(PDOException $e) {
    //if there is an error catch it here
    echo 'Connection Failed' . $e->getMessage();
}

?>