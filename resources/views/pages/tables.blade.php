@extends('home')


@section('main_content')
<form method="POST" action="{{Route('reserve_table')}}">
              {{ csrf_field() }}
<section class="vh-100 bg-image" style="background-image: url('images\plant-based-news-burger-1-scaled.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100"
            style="border: #FF9900 solid 5px; margin-top: 20px; margin-bottom: 20px; border-radius:25px ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                    <div class="card-body">
                        <h5 class="card-title text-center">Reserve a table</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="people">People</label>
                                <select name="seats" id="people" class="form-control " placeholder="number of people"
                                    >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>

                                </select>
                            </div>

                            <div class="col-md-6">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                                    inline="true">
                                    <label for="example">Enter date and time</label>
                                    <input type="datetime-local" placeholder="enter date" type="text" id="example"
                                        class="form-control">


                                </div>
                            </div>


     
                        </div>
                        <div class="row text-center" style="margin:10px 0">
                        @if($tables_1 > 0)
                            <div class="col-md-3">
                                <input name="class" value="1" type="checkbox" checked data-toggle="toggle"
                                    data-on="vip+" data-off="Reserved" data-onstyle="warning" data-offstyle="success">
                            </div>
                        @endif
                        @if($tables_2 > 0)
                            <div class="col-md-3">
                                <input name="class" value="2" type="checkbox" checked data-toggle="toggle" data-on="vip"
                                    data-off="Reserved" data-onstyle="warning" data-offstyle="success">
                            </div>
                            @endif
                            @if($tables_3 > 0)
                            <div class="col-md-3">
                                <input name="class" value="3" type="checkbox" checked data-toggle="toggle"
                                    data-on="economic" data-off="Reserved" data-onstyle="warning"
                                    data-offstyle="success">
                            </div>
                            @endif
                            @if($tables_4 > 0)
                            <div class="col-md-3">
                                <input name="class" value="4" type="checkbox" checked data-toggle="toggle"
                                    data-on="regular" data-off="Reserved" data-onstyle="warning"
                                    data-offstyle="success">
                            </div>
                            @endif
                        </div>
                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn  btn-block btn-lg gradient-custom-4 text-body" >Confirm</button>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>
</section>

@stop
