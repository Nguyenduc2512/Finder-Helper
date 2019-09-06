<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if (session('errmsg'))
         <p class="text-danger"> {{session('errmsg')}} </p>
      @endif
      @if($errors->first('email'))
         <span class="text-danger"> {{$errors->first('email')}} </span>
      @endif
      <form action="{{route('loginAdmin')}}"  method="post">
        @csrf
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                
            </div>
            
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>             
                @if($errors->first('password'))
                    <span class="text-danger"> {{$errors->first('password')}} </span>
                @endif
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="checkbox icheck">
                       <label>
                         <input type="checkbox"> Remember Me
                       </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat" >Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
      <!-- /.social-auth-links -->
         <p class="mb-1">
             <a href="#">I forgot my password</a>
         </p>
         <p class="mb-0">
              <a href="register.html" class="text-center">Register a new membership</a>
         </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- jQuery -->
<script src="css/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>