<?php

include '../classes/Product.php';

$product = new Product;

if(isset($_POST['btn-delete'])){
    $id = $_POST['btn-delete'];
    $product->delete($id);
}else{
    die("ERROR: Product ID is not specified");
}