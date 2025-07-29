<?php
    include 'db_food.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST') {
        $food_name = $_POST['food_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $product_image = null;

        if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0){
            $target_dir = "../assets/imgs/";
            $image_name = basename($_FILES["product_image"]["name"]);
            $target_file = $target_dir . $image_name;
            
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])){
                if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                    $product_image = $image_name;
                } else {
                    $_SESSION['error'] = "Sorry, there wsa an error uploading your file.";
                    header("Location: ../menu.php?id=" . $id);
                    exit;
                }
            } else {
                $_SESSION['error'] = "Invalid file type. Only JPG JPEG PNG & GIF files are allowed.";
                header("Location: ../menu.php?id=" .$id);
                exit;
            }
        }

        $sql = "INSERT INTO projectdb_food (food_name, description, price, product_image) VALUES (?, ?, ?, ?)";

          $stmt = $pdo->prepare($sql);
          $stmt->execute([
            $food_name,
            $description,
            $price,
            $product_image
          ]);
        }

    header("location: ../menu.php");
?>