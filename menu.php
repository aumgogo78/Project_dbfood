<?php
include './controls/fetchFood.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="./assets/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            /* height: 100vh;
            background-image: url("./assets/imgs/pexels-fwstudio-33348-172276.jpg");
            background-size: cover;
            background-position: center; */

            background-color: rgba(255, 225, 186, 1);
        }

        .bg {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .btn-add-menu {
            position: fixed;
            bottom: 45px;
            right: 45px;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 25px;
            display: flex;
            cursor: pointer;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 4px 7px rgba(0, 0, 0, 0.4);
            z-index: 999;
        }
    </style>

<body>
    <?php include './components/header.php'; ?>

    <section id="fetch_product" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between mb-3 ps-3">
                <h2 class="text-black fw-bold">Show Menu-list</h2>
            </div>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card bg rounded-4" style="box-shadow: 5px 5px 10px rgba(29, 29, 29, 1);">
                                    <div class="card-body">
                                        <a href="./assets/imgs/<?= htmlspecialchars($row['product_image']); ?>" target="_blank">
                                            <img src="./assets/imgs/<?= htmlspecialchars($row['product_image']); ?>" alt="" style="width: 375px; height: 220;" class="hov rounded">
                                        </a>
                                        <h5 class="card-title text-light mt-3">Food name :
                                            <?php echo htmlspecialchars($row['food_name']); ?>
                                        </h5>
                                        <p class="card-text text-light mb-2">Description :
                                            <?php echo htmlspecialchars($row['description']); ?></p>
                                        <p class="card-text text-light mb-4">Price :
                                            ฿<?php echo number_format($row['price'], 2); ?></p>
                                        <div class="d-flex justify-content-between gap-3">
                                            <a href="editfood.php?id=<?= $row['id'] ?>" class="btn btn-outline-warning border-2 mb-3 w-50 p-2">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button class="btn btn-outline-danger border-2 mb-3 w-50" onclick="confirmDelete(<?= $row['id'] ?>)">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                            <script>
                                                function confirmDelete(id) {
                                                    Swal.fire({
                                                        title: 'Are you sure ???',
                                                        text: "Are you sure to delete Menu ???",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Yes, Delete it !!!',
                                                        cancelButtonText: 'Cancel'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            window.location.href = `controls/deleteFood.php?id=${id}`;
                                                        }
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
    <?php if (isset($_SESSION['success'])) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'success',
                text: '<?= $_SESSION['success']; ?>',
                confirmButtonText: 'confirm'
            });
        </script>
    <?php unset($_SESSION['success']);
    endif; ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '<?= $_SESSION['error']; ?>',
                confirmButtonText: 'confirm'
            });
        </script>
    <?php unset($_SESSION['error']);
    endif; ?>
    <a class="btn btn-success btn-add-menu" href="addMenu.php">
        <i class="bi bi-plus-lg"></i>
    </a>
</body>

</html>