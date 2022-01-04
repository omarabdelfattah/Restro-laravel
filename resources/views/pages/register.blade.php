@extends('home')


@section('main_content')
<section class="vh-100 bg-image" style="background-image: url('images\plant-based-news-burger-1-scaled.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center py-3">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Register</h2>
              <form method="POST" action="{{Route('register')}}">
              {{ csrf_field() }}
              <div class="form-outline mb-4">
                      @if(Session::get('error'))
                              <div class="alert alert-error">
                                  {{session::get('error')}}
                              </div>
                      @endif
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Full Name</label>
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />

                </div>

                <div class="form-outline mb-4">

                <label class="form-label" for="form3Example3cg"> Email</label>
                <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example1cg">Address</label>
                  <input type="text" name="location" id="form3Example1cg" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example1cg">Phone</label>
                  <input type="phone" name="phone" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example1cg">CreditCard_ID</label>
                  <input type="text" name="credit_card" id="form3Example1cg" class="form-control form-control-lg" />
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <p>
                    <h6 class="mb-0 me-4 mr-2">Gender: </h6>
                    <p>
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                          value="1" />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                          value="0" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>
                </div>




                <div class="form-check d-flex justify-content-center mb-5">
                  <label class="form-check-label" for="form2Example3g">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex ">
                  <button type="submit" class="btn  btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{Route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

