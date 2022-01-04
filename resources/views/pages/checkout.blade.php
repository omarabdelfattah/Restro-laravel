@extends('home')


@section('main_content')
<form method="POST" action="{{Route('checkout')}}">
    {{ csrf_field() }}
    <div class="checkout">
        <div class="bkgroud">
            @if(Cart::count() > 0 )
            <div class="p-5">
                <div>
                    <h3>Order Summary</h3>
                </div>


                <div class="d-flex justify-content-center text-center">
                    <div class="col-md-2">
                        <h5>Item(s)</h5>
                    </div>
                    <!-- <div class="col-md-3">
                    <h5>Special Request</h5>
                </div> -->
                    <div class="col-md-2">
                        <h5>Qty</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Price(s)</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Subtotal</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Total</h5>
                    </div>
                </div>


                @foreach(Cart::content() as $row)
                <div class="d-flex justify-content-center text-center">
                    <div class="col-md-2">
                        <p>{{  $row->name  }}</p>
                    </div>


                    <div class="col-md-2">
                        <p>{{  $row->qty  }}</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{  $row->price  }} $</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{  $row->subtotal  }} $</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{  $row->total  }} $</p>
                    </div>
                </div>
                @endforeach




                <!-- <hr> -->
            </div>


        </div>


        <div class="container-fluid bkgroud p-5">
            <h3>Payment Summary</h3>
            <div class="row">
                <div class="col-md-6">
                    <label for="card-verif">Address</label><br>
                    <textarea name="address" class="form-control" id="address" cols="5"
                        rows="5">{{ auth()->user()->location }}</textarea>

                    <label for="cardex-date">Card Expiry date</label><br>
                    <select id="cardex-date" name="cardex-date">
                        <option selected value=''>--Select Month--</option>
                        <option value='1'>Janaury</option>
                        <option value='2'>February</option>
                        <option value='3'>March</option>
                        <option value='4'>April</option>
                        <option value='5'>May</option>
                        <option value='6'>June</option>
                        <option value='7'>July</option>
                        <option value='8'>August</option>
                        <option value='9'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                    </select>
                    <select id="cardex-date" name="cardex-date">
                        <option selected value=''>--Select Month--</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                    <br><br>
                    <label for="card-verif">CVV</label><br>
                    <input type="text" name="cvv" id="card-verif">
                    <img src="{{asset('assets/template/images/cvv.png.jpg')}}" alt="cvv pic" class="widtho">
                    <br>
                    <br>
                    <input type="checkbox" name="" id="checdd">
                    <label for="checdd" class="para">for faster and more secure checkout,save your card
                        details</label>
                    <button type="submit" class="butbut">Place Order</button>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p>{{Cart::subtotal()}} $</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Tax</p>
                        <p>{{Cart::tax()}} $</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>Total Amount</p>
                        <p>{{Cart::total()}} $</p>
                    </div>
                </div>
            </div>
        </div>

        @else
            <div class="text-center">Add something to buy</div>
        @endif
    </div>
    </div>
</form>
@stop
