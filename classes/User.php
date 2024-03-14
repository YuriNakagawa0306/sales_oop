<?php

include 'Connection.php';

class User extends Connection {

    public function create($request){
        $firstname = $request['first_name'];
        $lastname = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(first_name, last_name, username, password) VALUES('$firstname', '$lastname', '$username', '$hashed_password')";
        if($this->conn->query($sql)){
            header('location:../login.php');
            exit;
        }else{
            die('ERROR: unable to add user');
        }
    }

    public function login($user_info){
        $username = $user_info['username'];
        $password = $user_info['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();
                    if(password_verify($password, $user['password'])){
                        session_start();
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];

                        header('location:../dashboard.php');
                        exit;
                    }else{
                        die("ERROR: password does not exists!");
                    }
            }else{
                die("ERROR: username does not exists!");
            }
        }
    }
}