<?php
  
  $conn = mysqli_connect("localhost","root","","php_auth");

  if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
  }



?>