<div class="floating" id="open_cart">
    <img src="{{asset('assets/template/images/cart.png')}}" alt="">
  </div>

<div class="col-md-4 mt-2 floating_cart">
                    <div class="d-flex part1 justify-content-around">
                        <div class="d-flex mt-3">
                            <img src="{{asset('assets/template/images/shopping-cart (1).png')}}" alt="cart">
                            <p>Order summary</p>
                        </div>
                        <p class="justify-content-end mt-3"> <a href="{{ Route('remove_all') }}">Remove all</a></p>
                    </div>
                    @foreach(Cart::content() as $row)
                        <div class="d-flex my-3">
                            <div class="col-md-6 d-flex">
                                <div>
                                    <h4>{{  $row->name  }}</h4>
                                    <p>Sub information</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-between align-items-center hhh">
                                <!-- button here -->
                                <p>{{  $row->qty  }}</p>
                                <!-- button here -->
                                <p>{{  $row->price  }} $</p>
                                <a href="{{ Route('remove_from_cart',$row->rowId) }}"><img class="bin" src="{{asset('assets/template/images/bin.png')}}" alt="bin"></a>
                            </div>
                        </div>
                        @endforeach
                    

                   
                    <div>
                        <div class="margneto">
                            <div class="d-flex justify-content-between">
                                <p>Subtotal</p>
                                <p>{{Cart::subtotal()}} $</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Taxes</p>
                                <p>{{Cart::tax()}}</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p>Total (including tax)</p>
                                <p>{{Cart::total()}} $</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around m-4">
                        @if( auth()->check() )
                            <a href="{{ Route('checkout') }}"><input class="btnn in1" type="button" value="Confirm"></a>
                        @else
                            <button class="btnn in1" type="button" value="">Login to continue</button>
                        @endif
                    </div>
            </div>
