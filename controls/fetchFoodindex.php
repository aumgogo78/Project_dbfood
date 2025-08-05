<?php
    include './controls/db_food.php';
    session_start();

    // ดึงข้อมูลผู้ใช้งานจาก database
    $sql = "SELECT * FROM `projectdb_food` ORDER BY id DESC LIMIT 5";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>