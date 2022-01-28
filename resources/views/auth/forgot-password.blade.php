<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forgot Password | Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
         <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" name="email" placeholder="Email" :value="old('email')" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Send password link</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
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
