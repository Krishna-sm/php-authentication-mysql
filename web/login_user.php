<?php

session_start();
include('../config/db.config.php');

if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);

    if(!$email || !$password){
        $_SESSION['error']="Fill All Details";
        header('location:../login.php');
        return;
    }
    $email = strtolower($email);

    $sql ="select * from user where email ='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

        $data = mysqli_fetch_assoc($result);

        $isMatch= password_verify($password,$data['password']);
        if($isMatch){
            $_SESSION['user_id'] = $data['id']; 
            header('location:../index.php');
            return;
        }else{
            $_SESSION['error']="Invalid Credentials";
            header('location:../login.php');
            return;
        }





    }else{
        $_SESSION['error']="Account Not Found";
        header('location:../login.php');
        return;
    }




}

?>