@extends('out_site.home')


@section('main_content')

<div class="card text-center" style="">

        <div class="card-body">
          <h5 class="card-title">Reserve a table</h5>
          <div class="col-md-4">
            <select class="form-control form-control-lg" placeholder="number of people">
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
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <input placeholder="Select date" type="text" id="example" class="form-control">
                <i class="fas fa-calendar input-prefix"></i>
            </div>
            </select> 
            <div class="md-form md-outline">
                <input type="time" id="default-picker" class="form-control" placeholder="Select time">
                <label for="default-picker">Select time</label>
            </div>  
            <a href="#" class="btn" style="background-color: #FF9900; color:white;">Find</a>
          </div>
          
          <div class="col-md-4">
          <input type="checkbox" checked data-toggle="toggle" data-on="Reserved" data-off="class of table">
          </div>

          <a href="#" class="btn" style="background-color: #FF9900; color:white;">Confirm</a>
                  
        </div>

</div>

@stop