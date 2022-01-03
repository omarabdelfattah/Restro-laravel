@extends('home')


@section('main_content')

<section class="vh-100 bg-image" style="background-image: url('images\plant-based-news-burger-1-scaled.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                    <div class="card-body">
                        <h5 class="card-title">Reserve a table</h5>
                        <div class="row">
                      <div class="col-md-3">
                      <select name="seats" class="form-control " placeholder="number of people">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                      </div>
                        
                      <div class="col-md-3">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                            <i class="fas fa-calendar input-prefix"></i>
                          </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="md-form md-outline">
                            <input type="time" id="default-picker" class="form-control" placeholder="Select time">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <a href="#" class="btn" style="background-color: #FF9900; color:white;">Find</a>
                      </div>
                    </div>
                        <div class="col-md-4">
                            <input type="checkbox" checked data-toggle="toggle" data-on="Reserved"
                                data-off="class of table">
                        </div>

                        <a href="#" class="btn" style="background-color: #FF9900; color:white;">Confirm</a>

                    </div>

                </div>
            </div>


        </div>

    </div>
</section>

@stop
