<?php

include '../classes/Product.php';

$product = new Product;

if(isset($_POST['btn-buy'])){
    $buy_quantity = $_POST['buy_quantity'];
    $product->totalPrice($id, $buy_quantity);
}