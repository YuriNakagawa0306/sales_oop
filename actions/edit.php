<?php

include '../classes/Product.php';

$product = new Product;

if(isset($_POST)){
    $product->update($_POST);
}else{
    die("ERROR: Product ID is not specified");
}