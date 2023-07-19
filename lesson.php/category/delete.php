<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteData($id);
    header("Location: http://localhost/learn._php/lesson.php/category/index.php");
?>
?>