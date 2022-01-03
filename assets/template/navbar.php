<?php session_start(); 


    // Get all categories 
    $sql = "SELECT * FROM categories ";

    $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
        // output data of each row
        $result->fetch_all(MYSQLI_ASSOC);
        $categories = $result;
    }  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">  
  <title><?php echo $page_title; ?></title>
  <script src="js/jquery-3.6.0.min.js"></script>
 <style>

  </style>
</head>

<body class="">
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark up_nav " style=" ">
    <div class="container-fluid">
      <div class="follow">
        Follow us!
        <a href=""> <img src="images/facebook.png" class="socialMedia" alt=""> </a>
        <a href=""> <img src="images/insta.png" class="socialMedia" alt=""> </a>
      </div>

      <div class="dropdown ml-auto" style="margin-right: 17px;">
        <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle" aria-hidden="true"></i> My Account
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 170px;">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true  ) { ?>
          <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-key" aria-hidden="true"></i> change password</a>
          <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> sign out</a>
        <?php }else{ ?>        
            <a class="dropdown-item" href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
            <a class="dropdown-item" href="register.php"><i class="fa fa-user" aria-hidden="true"></i> Register</a>
        <?php } ?>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #1C1252;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images\logo1.png" width="70" height="70" alt="" style="margin-right: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="margin-left: 20px;">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="margin-left: 20px;">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            if(isset($categories)){
                foreach($categories as $category){
            ?> 
              <a class="dropdown-item" href="index.php?cat=<?php echo $category['id'] ?>"><img src="images/categories/<?php echo $category['img'] ?>" width="70" height="70" alt=""
                  style="margin-right: 50px;"><?php echo $category['name'] ?></a>
                  <div class="dropdown-divider"></div>
             <?php }}else{ 
                 ?>
                <a class="dropdown-item" href="#">No categories</a>
                 <?php }  ?> 

            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="contact.php" style="margin-left: 20px;">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
          <input class="form-control mr-sm-2" name="k" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->