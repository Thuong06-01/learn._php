<?php
    require_once 'pdo.php';
    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    updateData($data);
    header("Location: http://localhost/learn._php/lesson.php/category/index.php");
?>