<?php
session_start();
if(isset($_SESSION['user_id'])){
    $_SESSION['msg']="Logout Success";
    unset($_SESSION['user_id']);
    header('Location: ../login.php'); 
}else{
    header('Location: ../login.php'); 

}

?>