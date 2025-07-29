<?php
    session_start();
    include 'db_food.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $product_name = $_POST['food_name']; 
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
                    header("Location: ../editfood.php?id=" . $id);
                    exit;
                }
            } else {
                $_SESSION['error'] = "Invalid file type. Only JPG JPEG PNG & GIF files are allowed.";
                header("Location: ../editfood.php?id=" .$id);
                exit;
            }
        }

        $stmt = $pdo->prepare("UPDATE projectdb_food SET food_name = ?, description = ?, price = ?".($product_image ? ", product_image= ?" : "")." WHERE id = ?");
        $params = [$product_name, $description, $price];
        if ($product_image) {
            $params[] = $product_image;
        }
        
        $params[] = $id;
        $result = $stmt->execute($params);

        if ($result) {
            $_SESSION['success'] = "Menu updated successfully !!!";
            header("location: ../menu.php");
        } else {
            $_SESSION['error'] = "Failed to update menu.";
            header("Location: ../menu.php?id=" . $id);
        }

        exit;
    }
?>