<?php

include './controls/idFood.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="./assets/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        .hov {
            color: black;
        }

        .hov:hover {
            color: rgba(139, 139, 139, 1);
            transition: ease 0.2s;
        }
        .mg {
            margin-top: 10%;
        }

        .mgb {
            margin-bottom: 10%;
        }
    </style>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div class="d-flex container justify-content-center align-content-center mgb" style="height: 100vh; max-width: 75%;">
        <div class="mg" style="width: 100%;">
            <div class="col-md-12">
                <div class="p-3 justify-content-center align-content-center">
                    <div class="p-4">
                        <a href="Menu.php">
                            <i class="bi bi-x-lg fs-5 hov"></i>
                        </a>
                        <h2 class="text-center">Edit Products</h2>
                        <form action="./controls/editFood.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $food['id']; ?>">
                            <div class="mb-3">
                                <label for="">Product Name :</label>
                                <input type="text" name="food_name" class="form-control"
                                    value="<?= htmlspecialchars($food['food_name']); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Description :</label>
                                <input type="text" name="description" class="form-control"
                                    value="<?= htmlspecialchars($food['description']); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Price :</label>
                                <input type="text" name="price" class="form-control"
                                    value="<?= htmlspecialchars($food['price']); ?>">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <label for="">Show Picture :</label>
                                <a href="./assets/imgs/<?= htmlspecialchars($food['product_image']); ?>" target="_blank">
                                    <img src="./assets/imgs/<?= htmlspecialchars($food['product_image']); ?>" alt="" style="width: 370px; height: 220;" class="hov">
                                </a>
                            </div>
                            <div class="mb-5">
                                <label for="">Picture :</label>
                                <input type="file" name="product_image" class="form-control" value="">
                            </div>

                            <div class="d-flex justify-content-between gap-3">
                                <button type="submit" class="btn btn-success mb-3 w-50 p-2">Save</button>
                                <button type="reset" class="btn btn-danger mb-3 w-50">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>