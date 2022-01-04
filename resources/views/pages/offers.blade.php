@extends('home')


@section('main_content')
@include('layout.floating_cart')

@if(Session::get('success'))
  <script>

    Swal.fire({
  title: 'Good job!',
  text: '{{session()->get("success")}}',
  icon: 'success',
  confirmButtonText: 'Cool'
})
  </script>
@endif

<div class="container">
    <div class="product t py-2 ">
        <h3 class="text-lef" id="pro">Offers </h3>
        <div class="row justify-content-center text-left">
            @foreach($food as $meal)
            <div class="card col-md-3 text-center" style="margin: 20px">
            <form action="{{ Route('add_to_cart') }}" method="POST">
                <input type="hidden" name="product_id" value="{{ $meal->id }}" />
                    @csrf
                <img class="card-img-top" src="{{asset("assets/imgs/products/". $meal->food->image)}}"  alt="Card image cap" style="margin-top : 20px; height:195px; width:252px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $meal->food->name }}</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Add your notes here"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <p class="card-text" style="margin: 20px;">{{ $meal->food->description }}
                    </p>
                    <del>
                        <h3>$ {{ $meal->old_price }}</h3>
                    </del>
                    <h3>$ {{ $meal->new_price }}</h3>
                    <p class="card-text" style="margin: 20px;">  <input type="number" name="quantity" value="1" min="1" max="1000" step="1" class="spinner" style="width: 50%;"/> </p>
                    <button type="submit" class="btn" style="background-color: #FF9900; color:white;">Add</button>
                </form>                
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
