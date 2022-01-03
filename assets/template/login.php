<?php

ob_start();

$page_title = 'Login';
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
    if( isset($_POST['email']) && isset($_POST['password']) ){

        $email = $_POST['email'] ;
        $password = $_POST['password'];

        $result = $conn->query("SELECT id,name FROM users WHERE email = '$email' AND password = '$password' ");
         if($result->num_rows > 0){
             // Logged in

             $result = $result->fetch_array(MYSQLI_ASSOC);
              $_SESSION['id'] = $result['id'];
             $_SESSION['name'] = $result['name'];
             $_SESSION['loggedin'] = true;
             $_SESSION['email'] = $email;
            header('Location:index.php');
        }else{
           header('Location:login.php?st=f');
        }
     }
}

?>
<div class="vh-100">
    <div class="col-md-4 login-form-1 " style="margin: auto; margin-top: 20px;">
        <h3>Login</h3>
        <?php if( isset($_GET['st']) && $_GET['st']  == "f" ){ ?>
        <h5 class="text-danger text-center">Email or password are invalid</h5>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group" style="text-align: center;">
                <input type="submit" class="btnSubmit" value="Login" />
            </div>
            <div class="form-group">
                <a href="#" class="ForgetPwd">Forget Password? </a>
                <a href="register.php" class="ForgetPwd" style="margin-left: 45%;">Register </a>
            </div>
        </form>
    </div>
</div>
<?php 


    // Require footer
    require("footer.php");

?>