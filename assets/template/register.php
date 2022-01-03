<?php
ob_start();

$page_title = 'Register';
// Include connection file
require('config.php');



  // Require navbar
  require("navbar.php");

 // Check if logged in redirect
if(isset($_SESSION['id'])){
    header("location:index.php");
}



    // Check if method is POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // CHECK IF All fields exits
        if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ){

            $name = $_POST['name'] ;
            $email = $_POST['email'] ;
            $password = $_POST['password'];

            $result = $conn->query("INSERT INTO users (name,email,password) VALUES('$name','$email','$password')");
             if($conn->affected_rows > 0){
                header('Location:register.php?st=t');
            }else{
               header('Location:register.php?st=f');
            }
         }
    }

?>
<div class="vh-100">
    <div class="col-md-4 login-form-1" style="margin: auto; margin-top: 20px;">
        <h3>Register</h3>
        <?php if( isset($_GET['st']) && $_GET['st']  == "t" ){ ?>
        <h5 class="text-success text-center">Registered successfully . <a href="login.php">login now</a></h5>
        <?php } ?>
        <?php if( isset($_GET['st']) && $_GET['st']  == "f" ){ ?>
        <h5 class="text-danger text-center">Something went wrong</h5>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="name *" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group" style="text-align: center;">
                <input type="submit" class="btnSubmit" value="Sign up" />
            </div>
        </form>
    </div>
</div>

<?php 


// Require footer
require("footer.php");

?>