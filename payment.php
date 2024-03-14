<?php

session_start();
include 'classes/Product.php';

$product = new Product;

if(isset($_POST['id']) && isset($_POST['buy_quantity'])){
    $id = $_POST['id'];
    $buy_quantity = $_POST['buy_quantity'];
    $total_price = $product->totalPrice($id, $buy_quantity);
    $payment = $_POST['payment'];

    if($payment >= $total_price){
        $updated_quantity = $row['quantity'] - $buy_quantity;
        $product->updateQuantity();
    }else{
        
    }
}

$row = $product->showOneProduct($id);

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Payment</title>
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
            <a href="buy-product.php" class="col h3">
                <i class="fa-solid fa-caret-left"></i>
            </a>
            <div class="col h3 text-danger text-end">
                <i class="fa-solid fa-user-xmark"></i>
            </div>
        </div>

        <div class="container mt-5 w-50">
            <div class="pb-5 px-5">
                <h1 class="text-success text-center mb-3">
                    <i class='fa-solid fa-cash-register'></i>
                    Payment
                </h1>
                <form action="payment.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 text-start">
                        <label for="product_name" class="form-label mt-3">Product Name</label>
                        <h3><?= $row['product_name'] ?></h3>
                    </div>
                    <div class="row mb-3 text-start">
                        <div class="col-6">
                            <label for="price" class="form-label">Total Price</label>
                            <h3>$ <?= $total_price ?></h3>
                        </div>                        
                        <div class="col-6">
                            <label for="buy_quantity" class="form-label">Buy Quantity</label>
                            <h3><?= $buy_quantity ?></h3>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="buy_quantity" class="form-label">Payment</label>
                        <div class="input-group col-8">
                            <span class="input-group-text">$</span>
                            <input type="number" name="buy_quantity" id="buy_quantity" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="btn-pay" class="col-12 btn btn-success px-5 mt-3">Pay</button>
                </form>
            </div>
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
