<?php
    include './controls/db_food.php';

    //ดึงข้อมูลผู้ใช้งานจาก id
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM projectdb_food WHERE id = ?");
    $stmt->execute([$id]);
    $food = $stmt->fetch(PDO::FETCH_ASSOC);
?>