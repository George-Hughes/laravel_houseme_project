@extends('layout')

@section('content')

     <!-- MAIN AREA -->
     <section class="container py-2 mt-sm-5">
      <div class="row">
        <div class="col-sm-5 mx-auto mt-2 mt-sm-5">
          <div class="card">
            <div class="card-header">
              <h4>Login</h4>
            </div>
            <div class="card-body">
              <form action="/users/authenticate" method="POST">
                @csrf

                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text form-control h-100"
                        ><i class="fas fa-user"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="user@user.com"
                      value="{{ old('email') }}"
                    />
                  </div>
                </div>
                @error('email')
                  <p class="text-danger mt-0">{{ $message }}</p>
                @enderror

                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text form-control h-100"
                        ><i class="fas fa-lock"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="password...."
                      value="{{ old('password') }}"
                    />
                  </div>
                </div>
                @error('password')
                  <p class="text-danger mt-0">{{ $message }}</p>
                @enderror

                <button
                  type="submit"
                  class="btn btn-primary form-control text-white"
                >
                  Login
                </button>
              </form>
            </div>
            <div class="card-footer">
              Don't have an account? <a href="/register">Register</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END OF MAIN AREA -->
@endsection