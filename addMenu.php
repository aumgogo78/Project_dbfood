<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="./assets/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background-image: url("./assets/imgs/pexels-anthony-rahayel-125801377-29203932.jpg");
            background-size: cover;
            backdrop-filter: blur(6px);
        }

        .hov {
            color: white;
        }

        .hov:hover {
            color: rgba(80, 80, 80, 1);
            transition: ease 0.2s;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 500px;">
        <div class="card rounded-5" style="width: 100%; background-color: rgba(0, 0, 0, 0.5);">
            <div class="row g-0 rounded-5" style="box-shadow: 0px 0px 30px;">

                <div class="col-md-12">
                    <div class="card-body p-4 justify-content-center align-items-center text-light">

                        <a href="Menu.php">
                            <i class="bi bi-x-lg fs-5 hov"></i>
                        </a>

                        <h2 class="text-center">Add Menu</h2>
                        <form method="POST" action="./controls/createMenu.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" name="food_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Product Image</label>
                                <input type="file" name="product_image" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-3 mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>