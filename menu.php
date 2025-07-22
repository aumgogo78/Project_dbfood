

<?php
include './controls/fetchFood.php';
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
    <script src="./assets/package/dist/sweetalert2.min.css"></script>

<body>
    <?php include './components/header.php'; ?>

    <section id="fetch_product" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-black fw-bold">Show Menu-list</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
            <div class="container mt-5">
                <div class="row">
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark rounded-4" style="box-shadow: 10px 10px 20px black;">
                            <div class="card-body">
                                <h5 class="card-title text-light"><?php echo htmlspecialchars($row['food_name']); ?></h5>
                                <p class="card-text text-light">description :
                                    <?php echo htmlspecialchars($row['description']); ?></p>
                                <p class="card-text text-light">price :
                                    ฿<?php echo number_format($row['price'], 2); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php endif ?>
        </div>
    </section>
</body>

</html>