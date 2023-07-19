<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteProdData($id);
    header("Location: http://localhost/learn._php/lesson.php/product/index.php");
?>