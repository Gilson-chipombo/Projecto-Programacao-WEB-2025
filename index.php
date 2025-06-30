<?php //require_once("Controllers/AuthController.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>42 Route</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/extras/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Views/extras/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Views/extras/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <style>
      body{
        background-image: url('Views/extras/dist/img/123.jpg');
      }  
  </style>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>42Route Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Seja bem vindo</p>

      <form action="Controllers/AuthController.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <div class="social-auth-links text-center mt-2 mb-3 " >
          <button type="submit" name="btn-login" class="btn btn-block btn-dark" onclick="HideSpinner()">
            Entrar 
           <!--  <span class="spinner-border spinner-border-sm" id="spinner" ></span> -->
          </button>
        </div>
      </form>
       
      
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="Views/extras/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Views/extras/dist/js/adminlte.min.js"></script>
</body>
</html>
