@extends('home')


@section('main_content')

<section class="vh-100 bg-image" style="background-image: url('images\plant-based-news-burger-1-scaled.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100" style="border: #FF9900 solid 5px; margin-top: 20px; margin-bottom: 20px; border-radius:25px ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                    <div class="card-body">
                        <h5 class="card-title text-center">Reserve a table</h5>
                        <div class="row">
                      <div class="col-md-3">
                      <label for="people">people</label>
                      <select name="seats" id="people" class="form-control " placeholder="number of people" style="width:100px;">
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
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <label for="example">enter date</label>
                                <input type="date"placeholder="enter date" type="text" id="example" class="form-control" style="width:170px;">
            
                               
                        </div>
                      </div>
                      
                      <div class="col-md-2" style="">
                        <div class="md-form md-outline" style="">
                        <label for="default-picker">time</label>
                            <input type="time" id="default-picker" class="form-control" placeholder="Select time" style="width:130px;">
                            
                        </div>
                      </div>

                      <div class="col-md-6" style="margin-top: 20px;">
                        <a href="#" class="btn" style="background-color: #FF9900; color:white;">Find</a>
                      </div>
                    </div>
                        <div class="col-md-4" style="margin:20px; color: white;">
                        <input type="checkbox" checked data-toggle="toggle" data-on="vip" data-off="Reserved" data-onstyle="warning" data-offstyle="success">
                        </div>

                        <a href="#" class="btn" style="background-color: #FF9900; color:white;">Confirm</a>

                    </div>

                </div>
            </div>


        </div>

    </div>
</section>

@stop
