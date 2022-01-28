<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}} ">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('assets/dist/img/logo.png') }}">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <!-- Session Status -->
      
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- IF YOU WANT TO LOGIN WITH EMAIL -->
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" name="email" :value="old('email')" placeholder="Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
         <!-- IF YOU WANT TO LOGIN WITH BOTH EMAIL OR PHONE NO -->
        {{-- <div class="input-group mb-3">
          <input type="text" id="text" class="form-control" name="login" :value="{{ old('phone_no') ?: old('email') }}" placeholder="Email or Phone No." required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div> --}}

        <!-- IF YOU WANT TO LOGIN WITH PHONE NO. -->
        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" name="phone_no" :value="old('phone_no')" placeholder="Phone No." required />
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div> --}}

        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" name="password"
          required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember"  name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6 text-center">
            <a href="{{ route('password.request') }}">Forgot password?</a>
          </div>
          <!-- /.col -->
        </div>
        <br>
        <p class="mb-1"> 
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </p>
      </form>

    <div class="text-center"> 
      <p class="mb-0 ">
        Not Registered?<a href="/register">New Account</a>
      </p>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}} "></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}} "></script>
</body>
</html>
