
<?php require_once('../middleware/AuthMiddleware.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="dist/img/Logo42luanda.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rota 42 Luanda</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="dist/js/sweetalert.min.js"></script>
        <script src="dist/js/jquery-2.2.1.js"></script>


        <style>
          body {
            margin: 0;
            padding: 0;
          }

          #map {
            width: 100%;
            height: 100vh;
          }
      </style>
  </head>
  <body class="hold-transition sidebar-mini">
  <?php
  session_start();
  if (!empty( $_SESSION['register_success'])) { ?>
    <script>
        sweetAlert("Usuário Cadastrado","sucesso","success");
    </script>
  <?php } $_SESSION['register_success']= ""; ?>


  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.html" class="nav-link">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item dropdown">
        
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="dashboard.php" class="brand-link">
        <span class="brand-text font-weight-light"><h2>Rota 42 Luanda</h2> </span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/img.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Gilson Chipombo</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item menu-open">
                  <a href="./dashboard.php" class="nav-link active">
                  <i class="fa fa-home" aria-hidden="true"></i>
                    <p>Home</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Usuários <i class="fas fa-angle-left right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item"><a href="students.php" class="nav-link"><p><i class="nav-icon fas fa-graduation-cap"></i> Estudantes</p></a></li>
                    <li class="nav-item"><a href="drivers.php" class="nav-link"><p><i class="fa fa-id-card" aria-hidden="true"></i>   Motoristas</p></a></li>
                    <li class="nav-item"><a href="admin.php" class="nav-link"><p><i class="fa fa-unlock-alt" aria-hidden="true"></i>  Administradores </p></a></li>
                  </ul>
              </li>
              <li class="nav-item"><a href="mini_bus.php" class="nav-link">
                <i class="fa fa-bus" aria-hidden="true"></i>
                <p>Mini autocarros</p></a>
              </li>
              <li class="nav-header">LOCALIZAÇÕES</li>
                  <li class="nav-item"><a href="bus_stops.php" class="nav-link"><p> Paragens</p></a></li>
                  <li class="nav-item"><a href="myLocation.php" class="nav-link"><i class="fa fa-map-marker" aria-hidden="true"></i><p> Minha Localização</p></a></li>
                  <li class="nav-item"><a href="busLocation.php" class="nav-link"><i class="fa fa-location-arrow" aria-hidden="true"></i><p> Loc. autocarro</p></a></li>
              <li class="nav-header">GESTÃO</li>
              <li class="nav-item"><a href="../Controllers/logoutController.php" class="nav-link"><i class="fa fa-logout" aria-hidden="true"></i><p>Sair</p></a></li>
          
          </ul>
        </nav>
      </div>
    </aside>