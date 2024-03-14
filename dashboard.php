<?php

session_start();

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="row m-3">
            <div class="col h3">
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="col h5 text-secondary fw-bold text-center">
                Welcome, <?= $_SESSION['username'] ?>
            </div>
            <div class="col h3 text-danger text-end">
                <i class="fa-solid fa-user-xmark"></i>
            </div>
        </div>

        <div class="container mt-5 w-50">
            <div class="row">
                <div class="col h3">
                    Product List
                </div>
                <div class="col text-end">
                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                        <span class="text-info h3"><i class="fa-solid fa-plus"></i></span>
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <a href="dashboard.php" class="text-end text-secondary h5 m-3">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                                <div class="pb-5 px-5">
                                    <h1 class="text-info text-center mb-3">
                                        <i class="fa-solid fa-box"></i>
                                        Add Product
                                    </h1>
                                    <form action="actions/add-product.php" method="post">
                                        <div class="mb-3 text-start">
                                            <label for="product_name" class="form-label">Product Name</label>
                                            <input type="text" name="product_name" id="product_name" class="form-control">
                                        </div>
                                        <div class="row mb-3 text-start">
                                            <div class="col-6">
                                                <label for="price" class="form-label">Price</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" name="price" id="price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="number" name="quantity" id="quantity" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" name="btn" class="col-12 btn btn-info px-5 mt-3">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        include 'classes/Product.php';

                        $product = new Product;

                        $product->display();
                    ?>
                </tbody>
            </table>
        </div>

        

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
