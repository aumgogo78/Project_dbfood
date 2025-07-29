<?php
    session_start();
    include 'db_food.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $pdo ->prepare("DELETE FROM projectdb_food WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['success'] = "Menu delete successfully !!!";
            header("location: ../menu.php");
        } else {
            $_SESSION['error'] = "Failed to delete menu.";
            header("Location: ../editfood.php?id=" . $id);
        }

        exit;
    }

?>