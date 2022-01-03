
@extends('home')


@section('main_content')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #D58206;">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse collapse show" id="navbarSupportedContent">
        <ul class="navbar-nav" style = "margin: auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="margin-left: 60px;">All <span class="sr-only">(current)</span></a>
          </li>

          

          <li class="nav-item active">
            <a class="nav-link" href="tables.php" style="margin-left: 60px;">Pizza</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Pasta</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Burger</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Deserts</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="offers.php" style="margin-left: 60px;">Drinks</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
<!--the slider should start here-->

<!--the slider should end here-->

<div class="container ">
    <div class="product t py-2 ">
      <h3 class="text-lef" id="pro">All </h3>
      <div class="row justify-content-center text-left">
        
        <div class="card col-md-4 text-center" style="">
          <img class="card-img-top" src="assets\pics\images (1).jpg" alt="Card image cap" style="margin-top : 20px;">
          <div class="card-body">
          <h5 class="card-title">Pizza</h5>
          <div class="input-group">
          <input type="text" class="form-control" placeholder="Add your notes here" aria-label="Recipient's username" aria-describedby="basic-addon2">
          </div>
          <p class="card-text" style="margin: 20px;">25$ <input type="number" value="1" min="1" max="1000" step="1" id="spinner" style="width: 50%;"/> </p>
          
          <a href="#" class="btn" style="background-color: #FF9900; color:white;">Add</a>
          </div>
        </div>

      </div>
    </div>
</div>
@stop









