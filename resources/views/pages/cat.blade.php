
@extends('home')


@section('main_content')

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #D58206;">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse collapse show" id="navbarSupportedContent1">
        <ul class="navbar-nav" style = "margin: auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ Route('landing') }}" style="margin-left: 60px;">All <span class="sr-only">(current)</span></a>
          </li>

          
        @foreach($categories as $cat)
          <li class="nav-item active">
            <a class="nav-link" href="{{ Route('cat',$cat['id']) }}" style="margin-left: 60px;">{{ $cat['name'] }}</a>
          </li>
        @endforeach
        
      </div>
    </div>
  </nav>
<!--the slider should start here-->

<!--the slider should end here-->

<div class="container ">
    <div class="product t py-2 ">
      <h3 class="text-lef" id="pro">All </h3>
      <div class="row justify-content-center text-left">
    
      @foreach($food as $meal)
        <div class="card col-md-3 text-center" style="margin: 20px">
          <img class="card-img-top" src="{{asset("assets/imgs/products/". $meal->image)}}" alt="Card image cap" style="margin-top : 20px; height:195px; width:252px;">
          <div class="card-body">
          <h5 class="card-title">{{ $meal->name }}</h5>
          <div class="input-group">
          <input type="text" class="form-control" placeholder="Add your notes here" aria-label="Recipient's username" aria-describedby="basic-addon2">
          </div>
          <p class="card-text" style="margin: 20px;">{{ $meal->price }} $ <input type="number" value="1" min="1" max="1000" step="1" class="spinner" style="width: 50%;"/> </p>
          
          <a href="#" class="btn" style="background-color: #FF9900; color:white;">Add</a>
          </div>
        </div>
      @endforeach
      </div>
    </div>
</div>
@stop









