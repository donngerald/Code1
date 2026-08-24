<?php

require 'database1.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteRequest) {
    $id = $_POST['id'];
    $sql = 'DELETE FROM blog.posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $params = ['id' => $id];
    $stmt->execute($params);
    header('Location: test.php');
    exit;
}