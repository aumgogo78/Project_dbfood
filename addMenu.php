<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.js"></script>
    <script src="./assets/package/dist/sweetalert2.min.css"></script>

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 800px;">
        <div class="card" style="width: 100%;">
            <div class="row g-0 shadow">

                <!-- ฟอร์มด้านซ้าย -->
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/img2.jpg" alt="" class="img-fluid" style="object-fit: cover; height: 100%;">
                </div>

                <!-- ฟอร์มด้านขวา -->
                <div class="col-md-6">
                    <div class="card-body p-4 justify-content-center align-items-center">
                        <!-- สมัครสมาชิก -->
                        <h2 class="text-center">Add Menu</h2>
                        <form method="POST" action="controls/createMenu.php">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" name="foodname" class="form-control">
                            </div>

                            <div>
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>

                            <div>
                                <label for="" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>