@extends('home')


@section('main_content')
<section class="vh-100 bg-image" style="background-image: url('images\plant-based-news-burger-1-scaled.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center py-3">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Sign in</h2>

              <form method="POST" action="{{Route('login')}}">
              {{ csrf_field() }}
              <div class="form-outline mb-4">
                      @if(Session::get('error'))
                              <div class="alert alert-error">
                                  {{session::get('error')}}
                              </div>
                      @endif
                    <label class="form-label" for="form3Example3cg"> Email</label>
                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>
                <div class="d-flex ">
                  <button type="submit" class="btn  btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="#!"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

