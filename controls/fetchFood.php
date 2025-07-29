<?php
    include './controls/db_food.php';
    session_start();

    // ดึงข้อมูลผู้ใช้งานจาก database
    $sql = "SELECT * FROM `projectdb_food`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>