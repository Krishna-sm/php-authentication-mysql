<?php
$page_title="Dashboard";
include('./ini/Header.php');
include('./config/security.php');
include('./config/db.config.php');

$id =$_SESSION['user_id'];
$sql = "select * from user where id='$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>


<div class="container py-5">
<div class="card col-sm-4 mx-auto py-4 px-4">
    <h1>Name: <?=$row['name']?> </h1>
    <h3>Email: <?=$row['email']?> </h3>
</div>
</div>


<?php 
include('./ini/Footer.php');
?>