<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/template/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/template/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/template/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/template/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/template/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset("assets/template/images/logo.png")}}" type="image/x-icon">  
  <title><?php echo $page_title; ?></title>
 <style>

  </style>
</head>

<body class="">
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FF9900; margin: bottom 5px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{asset("assets/template/images/logo.png")}}" width="70" height="70" alt="" style="margin-right: 50px;">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse  collapse show" id="navbarSupportedContent">

        <ul class="navbar-nav" style = "margin: auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ Route('landing') }}" style="margin-left: 60px;">Food <span class="sr-only">(current)</span></a>
          </li>

          

          <li class="nav-item active">
            <a class="nav-link" href="{{ Route('tables') }}" style="margin-left: 60px;">Tables</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{ Route('offers') }}" style="margin-left: 60px;">Offers</a>
          </li>

        </ul>


        <div class="dropdown" style="">
        <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" style="background-color: #D58206;" aria-expanded="false">
          <i class="fa fa-user-circle" aria-hidden="true"></i> My Account
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 170px;">
        @if(auth()->check())
          <!-- <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-key" aria-hidden="true"></i> change password</a> -->
          <a class="dropdown-item" href="{{ Route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> sign out</a>
        @else       
            <a class="dropdown-item" href="{{ Route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
            <a class="dropdown-item" href="{{ Route('register') }}"><i class="fa fa-user" aria-hidden="true"></i> Register</a>
        @endif
        </div>
      </div>
        
      </div>
    </div>
  </nav>

  <!-- <script src="js/jquery-3.6.0.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
