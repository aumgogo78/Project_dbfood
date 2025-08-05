<?php include './controls/fetchFoodindex.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="./assets/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
    .container {
        max-width: 80%;
    }

    .mg {
        margin-top: 7%;
    }

    .p,
    .n {
        filter: invert(1);
        width: 30px;
        height: 30px;
    }

    .ind {
        position: absolute;
        bottom: -15px;
    }

    .ind [data-bs-target] {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: rgba(80, 39, 0, 0.62);
        transition: opacity 0.4s ease;
        margin: 0 6px;
    }

    .carousel-control-prev {
        left: -20px;
    }

    .carousel-control-next {
        right: -20px;
    }

    #carouselFood {
        position: relative;
        overflow: visible;
    }

    .carousel-inner {
        width: 100%;
        position: relative;
    }

    .ct {
        background-color: rgba(0, 0, 0, 0.4);
        padding: 20px;
    }

    .carousel-content-wrapper {
        max-width: 100%;
        margin: auto;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 25%;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        max-width: 50%;
    }

    @media (max-width: 576px) {

        .carousel-control-prev {
            left: -5%;
        }

        .carousel-control-next {
            right: -5%;
        }

        .container {
            max-width: 100%;
        }

        .ind [data-bs-target] {
            width: 8px;
            height: 8px;
            margin: 0 3px;
        }
    }
    </style>
</head>

<body>
    <?php include './components/header.php'; ?>

    <div class="bg">
        <div class="pt-5">
            <div class="container mg">
                <div id="carouselFood" class="carousel slide" data-bs-ride="carousel">

                    <!-- indicators ปุ่มวงกลมข้างล่าง -->
                    <div class="carousel-indicators ind">
                        <?php
                            $i = 0;
                            $stmt->execute();
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<button type="button" data-bs-target="#carouselFood" data-bs-slide-to="'.$i.'" '.($i === 0 ? 'class="active"' : '').'></button>';
                                $i ++;
                            }
                            $stmt->execute();
                        ?>
                    </div>

                    <!-- inner ข้อมูล -->
                    <div class="carousel-inner">
                        <?php
                            $i = 0;
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                        <div class="carousel-item <?= $i === 0 ? 'active' : '' ?> mb-5">
                            <div class="carousel-content-wrapper">
                                <!-- Photo รูป -->
                                <div class="ratio ratio-16x9 position-relative" style="max-width: 70%; margin: auto;">
                                    <a href="./assets/imgs/<?= htmlspecialchars($row['product_image']); ?>"
                                        target="_blank">
                                        <img src="./assets/imgs/<?= htmlspecialchars($row['product_image']); ?>" alt=""
                                            class="hov rounded w-100 h-100">
                                    </a>
                                </div>

                                <!-- caption ข้อมูล -->
                                <div class="overlay">
                                    <div class="carousel-caption rounded ct d-block">
                                        <h5 class="text-light">Food name : <?= htmlspecialchars($row['food_name']); ?>
                                        </h5>
                                        <p class="text-light">Description :
                                            <?= htmlspecialchars($row['description']); ?>
                                        </p>

                                        <!-- Order ปุ่มสั่งอาหาร -->
                                        <a href="order.php?food_id=<?= urlencode($row['id']); ?>"
                                            class="btn btn-success btn-sm me-3">
                                            Order.
                                        </a>

                                        <!-- Detail ปุ่มดูรายละเอียด -->
                                        <a href="detail.php?food_id=<?= urlencode($row['id']); ?>"
                                            class="btn btn-primary btn-sm">
                                            Detail.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                $i ++;
                            } 
                        ?>
                    </div>

                    <!-- Prev & Next btn ปุ่มถัดไป , ย้อนกลับ -->
                    <!-- Prev btn ปุ่มย้อนกลับ -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFood"
                        data-bs-slide="prev">
                        <i class="carousel-control-prev-icon p "></i>
                    </button>

                    <!-- Next btn ปุ่มถัดไป -->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFood"
                        data-bs-slide="next">
                        <i class="carousel-control-next-icon n"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</body>

</html>