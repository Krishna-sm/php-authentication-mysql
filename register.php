<?php
$page_title="Register Page";
include('./ini/Header.php');
?>

        <div class="container    d-flex align-items-center justify-content-center" style="min-height:90vh;">

                <form method="post" action="/web/register_user.php" class="col-sm-12    col-md-10 col-lg-6 card rounded p-4">   

              <?php
                    if(isset($_SESSION['error'])){
                        
                        
                        ?>
                          <div class="mb-3 alert alert-danger">
                    <?=$_SESSION['error']?>
                </div>

                        <?php
                        unset($_SESSION['error']);
                    }
              ?>

<?php
                    if(isset($_SESSION['msg'])){
                        
                        
                        ?>
                          <div class="mb-3 alert alert-success">
                    <?=$_SESSION['msg']?>
                </div>

                        <?php
                        unset($_SESSION['msg']);
                    }
              ?>


                    <div class="mb-3">
                        <h1>Register</h1>
                    </div>
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="text" class="form-control" placeholder="Enter Your Password">
                        </div>
                        <div class="mb-3">
                            <button style="width: 100%;" class="btn btn-primary">Register</button>
                        </div>
                        <div class="mb-3">
                            <p class="text-end">
                                Already Have An Account ?<a href="/login.php"> Login</a>
                            </p>
                        </div>

                </form>

        </div>



<?php 
include('./ini/Footer.php');
?>