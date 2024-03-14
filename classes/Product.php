<?php

include 'Connection.php';

class Product extends Connection {
    public function display(){
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
    
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['product_name']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['quantity']."</td>";
                    echo "<td>";
                        echo "<a href='edit-product.php?id=".$row['id']."' class='btn btn-warning me-1'><i class='fa-solid fa-pen'></i></a>";
                        echo "<form action='actions/delete.php' method='post' class='d-inline'>";
                            echo "<button type='submit' name='btn-delete' class='btn btn-danger' value='".$row['id']."'><i class='fa-solid fa-trash-can'></i></button>";
                        echo "</form>";
                    echo "</td>";
                    echo "<td>";
                        echo "<a href='buy-product.php?id=".$row['id']."' class='btn btn-success'><i class='fa-solid fa-cash-register'></i></a>";
                    echo "</td>";
                echo "</tr>";
            }
        }else{
            die;
        }
    }

    public function addProduct($new_product){
        $product_name = $new_product['product_name'];
        $price = $new_product['price'];
        $quantity = $new_product['quantity'];

        $sql = "INSERT INTO products(product_name, price, quantity) VALUES('$product_name', '$price', '$quantity')";
        if($this->conn->query($sql)){
            header('location:../dashboard.php');
            exit;
        }else{
            die('ERROR: unable to add product');
        }
    }

    public function showOneProduct($id){
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }else{
            die("ERROR: unable to fetch product");
        }
    }

    public function update($data){
        $id = $data['id'];
        $product_name = $data['product_name'];
        $price = $data['price'];
        $quantity = $data['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = $id";

        if($this->conn->query($sql)){
            header('location:../dashboard.php');
            exit;
        }else{
            die('ERROR: unable to edit product');
        }
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            header('location:../dashboard.php');
            exit;
        }else{
            die('ERROR: unable to delete products');
        }
    }

    public function totalPrice($id, $buy_quantity){
        $sql = "SELECT quantity, price FROM products WHERE id = $id";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $stocks_left = $row['quantity'];
            $price = $row['price'];

            if($buy_quantity <= $stocks_left){
                $total_price = $buy_quantity * $price;
                return $total_price;
            }else{
                die("ERROR: Insufficient stock.");
            }
        }else{
            die("ERROR: Product not found.");
        }
    }

    public function updateQuantity(){

    }
}