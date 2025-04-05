<?php
session_start();
include('../config/db.config.php');

        if(isset($_POST['email'])){
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $email = strtolower($email);
          
          

            if(!$email || !$name || !$password){
                $_SESSION['error']="Fill All Details";
                header('location: ../register.php');
                return;
            }


            $sql ="select * from user where email='$email'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $_SESSION['error']="Email already exists";
                header('location: ../register.php');
                return;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql ="insert into user(name,email,password) values('$name','$email','$password')";

            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['msg']="Register SuccessFully";
                header('location: ../register.php');
                return;
            }else{
                $_SESSION['error']="Error in Register";
                header('location: ../register.php');
                return;
            } 

        }


?>