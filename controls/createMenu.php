<?php
  include 'db_food.php';

  if($_SERVER['REQUEST_METHOD'] = 'POST'){
    $fname = $_POST['foodname'];
    $desc = $_POST['description'];
    $p = $_POST['price'];

    $sql = "INSERT INTO projectdb_food (food_name, description, price) VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      $fname,
      $desc,
      $p
    ]);

    header("location: ../menu.php");
  }
?>