<?php require "../../../Model/connectionBD.php";
 session_start();
    if (isset($_POST["buscar"])) {
        $ano =  $_POST["ano"];
    }else {
       $ano = 2024;
    }
  
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Análise financeira</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <script src="../../dist/js/sweetalert.min.js"></script>
   <script src="../../dist/js/jquery-2.2.1.js"></script>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">

<?php

if (!empty( $_SESSION['upload'])) { ?>
  <script>
      sweetAlert("Carregado","sucesso","success");
  </script>
<?php } $_SESSION['upload']= ""; ?>


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
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

      <!-- Messages Dropdown Menu -->
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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.php" class="brand-link">
      <span class="brand-text font-weight-light">Sistema de análise financeira </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="./index3.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index3.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Dados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Base de dados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fluxoDeCaixa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dados do fluxo de caixa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pressupostos</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Relatórios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Capa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contra  copa</p>
                </a>
              </li>
          
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Índice</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resumo</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota do DG</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Notas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 5</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 5</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 6</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota 7</p>
                </a>
              </li>
            </ul>
          </li>
 
      
          <li class="nav-header">ANÁLISE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              
              <p>
                Fluxo de caixa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             
              <p>
                Análise financeira
              </p>
            </a>
          </li>
 
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Demo. Financeiras</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <form action="" enctype = "multipart/form-data" method="post">
                <li class="breadcrumb-item active">
                        <select class="form-select" id="ano"  name = 'ano' required>
                            <?php $year = date('Y'); for ($i=$year; $i >$year-20 ; $i--) { ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php }?>
                        </select>
                    <button class="btn btn-success btn-sm " name="buscar"  type="submit" onclick="showSpinner();">
                        Buscar
                        <span class="spinner-border spinner-border-sm spinner"></span>
                    </button>
                </li>
              </form>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">                
                <table style="border: 1px solid black; width: 100%; border-radius:5px ;"  class="table-hover">
                    <tr class="table-striped ">
                       
                        <th style="color: blue;">Fluxo de caixa das act. opercaionais</th>
                        <th style="margin-left: 100px;">Notas</th>
                        <th ><center> <?php echo $ano; ?> </center></th>
                        <th> <center><?php echo $ano-1; ?> </center></th>
                        <th><center> <?php echo $ano-2; ?> </center></th>
                        <th><center>Chave-valid.</center></th>
                    </tr>
                    <tr>
                        
                        <td>(+) Recebimentos a clientes.............................................</td>
                        <td><center> </center></td>
                        <td><center> 
                          
                            <?php
                               
                                $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                                WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '62%' OR Conta LIKE '63%') 
                                                          AND Ano = $ano AND Natureza = 'C'";
                                  
                                $resultado1 = mysqli_query($connection, $sql1);
                                $dados1 = mysqli_fetch_array($resultado1);

                                $sql = "SELECT SUM(Valor) FROM `basededados` 
                                WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '26%' OR Conta LIKE '63%') 
                                                                      AND Ano = $ano AND Natureza = 'D'";
                                  
                                $resultado = mysqli_query($connection, $sql);
                                $dados = mysqli_fetch_array($resultado);
                                echo $dados1[0]-$dados[0];
                                $recb_atual = $dados1[0]-$dados[0];

                            ?>                  
                        </center></td>

                        <td><center> 
                            <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '62%' OR Conta LIKE '63%') 
                                                        AND Ano = ($ano-1) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '26%' OR Conta LIKE '63%') 
                                                                        AND Ano = ($ano-1) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $recb_passado = $dados1[0]-$dados[0];
                          ?>

                        </center> </td>

                        <td><center>
                        <?php
                        
                            $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                            WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '62%' OR Conta LIKE '63%') 
                                                      AND Ano = ($ano-2) AND Natureza = 'C'";
                              
                            $resultado1 = mysqli_query($connection, $sql1);
                            $dados1 = mysqli_fetch_array($resultado1);

                            $sql = "SELECT SUM(Valor) FROM `basededados` 
                                WHERE (Conta LIKE '31%' OR Conta LIKE '61%' OR Conta LIKE '26%' OR Conta LIKE '63%') 
                                                                      AND Ano = ($ano-2) AND Natureza = 'D'";
                              
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            echo $dados1[0]-$dados[0];
                            $recb_antepassado = $dados1[0]-$dados[0];
                        ?>

                      

                        </center> </td>
                        <td><center> 2001</center> </td>
                        
                    </tr>

                    <tr>
    
                        <td>(-) Pagamentos a fornec. e empregados....................</td>
                        <td><center> </center> </td>
                        <td><center> 
                        <?php
                            $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                            WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '34%' OR Conta LIKE '36%' 
                                                      OR Conta LIKE '71%' OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                      AND Ano = $ano AND Natureza = 'C'";
                              
                            $resultado1 = mysqli_query($connection, $sql1);
                            $dados1 = mysqli_fetch_array($resultado1);

                            $sql = "SELECT SUM(Valor) FROM `basededados` 
                                WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '36%' OR Conta LIKE '71%'
                                                                      OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                                      AND Ano = $ano AND Natureza = 'D'";
                              
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            echo $dados1[0]-$dados[0];
                            $pagamento_atual = $dados1[0]-$dados[0];

                        ?>
                        </center> </td>

                        <td><center>
                          <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '34%' OR Conta LIKE '36%' 
                                                        OR Conta LIKE '71%' OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                        AND Ano = ($ano-1) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '36%' OR Conta LIKE '71%'
                                                                        OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                                        AND Ano = ($ano-1) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $pagamento_passado = $dados1[0]-$dados[0];

                          ?>

                        </center> </td>
                        
                        <td><center>
                          <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '34%' OR Conta LIKE '36%' 
                                                        OR Conta LIKE '71%' OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                        AND Ano = ($ano-2) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '2%' OR Conta LIKE '32%' OR Conta LIKE '36%' OR Conta LIKE '71%'
                                                                        OR Conta LIKE '72%' OR Conta LIKE '75%') 
                                                                        AND Ano = ($ano-2) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $pagamento_antepassdo =  $dados1[0]-$dados[0];

                          ?>  
                        </center> </td>
                      
                        <td><center>2002 </center> </td>
                       
                    </tr>

                    <tr>
                   
                        <th>Caixa gerada pelas operções</th>
                        <td><center> </center></td>
                        <th><center>
                          <?php $caixa_gerada_atual =$recb_atual + $pagamento_atual;
                              echo $recb_atual + $pagamento_atual;
                          ?>
                         </center></th>
                        <th><center>
                          <?php
                              $caixa_gerada_passada = $recb_passado + $pagamento_passado;  
                              echo $recb_passado + $pagamento_passado;
                          ?>
                        </center></th>
                        <th><center>
                          <?php
                              $caixa_gerada_antepassada = $recb_antepassado + $pagamento_antepassdo;
                              echo $recb_antepassado + $pagamento_antepassdo;
                           ?></center>
                        </th>
                        <td><center> 2003</center></td>
                    </tr>
                    <br>
                    <tr>
                        <br>
                       
                        <th><br>Outras opercações</th>
                        <td><center>  </center></td>
                        <td><center></center></td>
                    </tr>

                    <tr>
                        <td>(-) Pagamentos de Impostos</td>
                        <td><center> </center></td>
                        <td><center> 
                          <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '34%' AND Ano = $ano AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $pagamento_imposto_atual = -1 * ($dados[0] + 0);
                            echo $pagamento_imposto_atual;?> 
                        </center></td>

                        <td><center> 
                          <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '34%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $pagamento_imposto_passado = -1 * ($dados[0] + 0);
                            echo $pagamento_imposto_passado;
                          ?> 
                        </center></td>

                        <td><center> 
                          <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '34%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $pagamento_imposto_antepassado = -1 * ($dados[0] + 0);
                            echo $pagamento_imposto_antepassado;?> 
                        </center></td>

                        <td><center>2004</center></td>
                        
                    </tr>

                    <tr>
                        <td>(+/-) Outros recebimentos/pagamentos</td>
                        <td><center> </center></td>
                        <td><center> 
                          <?php 
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                        OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                        OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                        OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                        AND Ano = ($ano) AND Natureza = 'C'";
                                 
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);
                          
                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                        OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                        OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                        OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                                        AND Ano = $ano AND Natureza = 'D'";
                                 
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              $outros_recebimentos_atual = $dados1[0]-$dados[0] + 0;
                              echo $dados1[0]-$dados[0] + 0;
                            
                            ?> 
                        </center></td>

                        <td><center> 
                          <?php 
                               $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                               WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                         OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                         OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                         OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                         AND Ano = ($ano-1) AND Natureza = 'C'";
                                  
                               $resultado1 = mysqli_query($connection, $sql1);
                               $dados1 = mysqli_fetch_array($resultado1);
                           
                               $sql = "SELECT SUM(Valor) FROM `basededados` 
                                   WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                         OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                         OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                         OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                                         AND Ano = ($ano-1) AND Natureza = 'D'";
                                  
                               $resultado = mysqli_query($connection, $sql);
                               $dados = mysqli_fetch_array($resultado);
                               $outros_recebimentos_passado = $dados1[0]-$dados[0] + 0;
                               echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center></td>

                        <td><center> 
                          <?php 
                            $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                            WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                      OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                      OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                      OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                      AND Ano = ($ano-2) AND Natureza = 'C'";
                               
                            $resultado1 = mysqli_query($connection, $sql1);
                            $dados1 = mysqli_fetch_array($resultado1);
                        
                            $sql = "SELECT SUM(Valor) FROM `basededados` 
                                WHERE (Conta LIKE '372%' OR Conta LIKE '373%' OR Conta LIKE '374%' OR Conta LIKE '375%' 
                                                      OR Conta LIKE '376%' OR Conta LIKE '377%' OR Conta LIKE '378%'  OR Conta LIKE '379%'
                                                      OR Conta LIKE '64%'  OR Conta LIKE '65%'  OR Conta LIKE '67%'
                                                      OR Conta LIKE '68%'  OR Conta LIKE '74%'  OR Conta LIKE '77%'  OR Conta LIKE '78%') 
                                                                      AND Ano = ($ano-2) AND Natureza = 'D'";
                               
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $outros_recebimentos_antepassado = $dados1[0]-$dados[0] + 0;
                            echo $dados1[0]-$dados[0] + 0;
                          ?> 
                        </center></td>
                        <td><center>2005</center></td>
                    </tr>

                    <tr>
                        <th><br>Fluxo de caixa extraordinário.</th>
                        <td><center>  </center></td>
                        <td><center>  </center></td>
                    </tr>


                    <tr>
                        <td>(+) Recebimentos extraordinários</td>
                        <td><center>  </center></td>
                        <td><center> 
                          <?php 
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano) AND Natureza = 'C'";
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);
                          
                              $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano) AND Natureza = 'D'";
                                 
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center>
                      </td>

                      <td><center> 
                          <?php 
                             $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano-1) AND Natureza = 'C'";
                             $resultado1 = mysqli_query($connection, $sql1);
                             $dados1 = mysqli_fetch_array($resultado1);
                         
                             $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano-1) AND Natureza = 'D'";
                                
                             $resultado = mysqli_query($connection, $sql);
                             $dados = mysqli_fetch_array($resultado);
                             echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center>
                      </td>

                      <td><center> 
                          <?php 
                             $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano-2) AND Natureza = 'C'";
                             $resultado1 = mysqli_query($connection, $sql1);
                             $dados1 = mysqli_fetch_array($resultado1);
                         
                             $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '69%' AND Ano = ($ano-2) AND Natureza = 'D'";
                                
                             $resultado = mysqli_query($connection, $sql);
                             $dados = mysqli_fetch_array($resultado);
                             echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center>
                      </td>
                      <td><center>2006</center></td>
                    </tr>

                    <tr>
                        <td>(-) Pagamentos extraordinários</td>
                        <td><center>  </center></td>
                        <td><center> 
                        <?php 
                             $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano) AND Natureza = 'C'";
                             $resultado1 = mysqli_query($connection, $sql1);
                             $dados1 = mysqli_fetch_array($resultado1);
                         
                             $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano) AND Natureza = 'D'";
                                
                             $resultado = mysqli_query($connection, $sql);
                             $dados = mysqli_fetch_array($resultado);
                             echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center></td>

                        <td><center> 
                        <?php 
                             $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano-1) AND Natureza = 'C'";
                             $resultado1 = mysqli_query($connection, $sql1);
                             $dados1 = mysqli_fetch_array($resultado1);
                         
                             $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano-1) AND Natureza = 'D'";
                                
                             $resultado = mysqli_query($connection, $sql);
                             $dados = mysqli_fetch_array($resultado);
                             echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center></td>

                        <td><center> 
                        <?php 
                             $sql1 = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano-2) AND Natureza = 'C'";
                             $resultado1 = mysqli_query($connection, $sql1);
                             $dados1 = mysqli_fetch_array($resultado1);
                         
                             $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '79%' AND Ano = ($ano-2) AND Natureza = 'D'";
                                
                             $resultado = mysqli_query($connection, $sql);
                             $dados = mysqli_fetch_array($resultado);
                             echo $dados1[0]-$dados[0] + 0;
                            ?> 
                        </center></td>
                        <td><center>2007</center></td>

                        
                    </tr>

                    <tr>
                        <th><br>Caixa líquida proveniente da actividade operacional</th>
                        <th><center>  1</center></th>
                        <th><center> <?php echo $caixa_gerada_atual + $pagamento_imposto_atual + $outros_recebimentos_atual; ?> </center></th>
                        <th><center> <?php echo $caixa_gerada_passada + $pagamento_imposto_passado + $outros_recebimentos_passado; ?> </center></th>
                        <th><center> <?php echo $caixa_gerada_antepassada + $pagamento_imposto_antepassado + $outros_recebimentos_antepassado; ?> </center></th>
                        <td><center> 2000 </center></td>
                      </tr>

                </table>

                </div>
                
                <div class="card-header"> 
                <br>               
                <table style="border: 1px solid black; width: 100%; border-radius:5px ;"  class="table-hover">
                   
                    <tr>
                        <th style="color: blue;">Fluxo de caixa das actividades de investimento</th>
                        <th><center> Notas</center></th>
                        <th ><center> <?php echo $ano; ?> </center></th>
                        <th> <center><?php echo $ano-1; ?> </center></th>
                        <th><center> <?php echo $ano-2; ?> </center></th>
                        <th><center>Chave-valid.</center> </th>
                    </tr>

                    <tr>
                        <td>(+) Recebimentos provenientes de:</td>
                        <td><center> </center></td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center>2101</center> </td>
                    </tr>

                    <tr>
                        <td>Imobilizações corpóreas</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeas_atual =  ($dados[0] + 0);
                            echo $imobilizacoes_corporeas_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeas_passada =  ($dados[0] + 0);
                            echo $imobilizacoes_corporeas_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeas_antepassada =  ($dados[0] + 0);
                            echo $imobilizacoes_corporeas_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2102</center> </td>
                    </tr>

                    <tr>
                        <td>Imobilizações incorpóreas</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeas_atual =  ($dados[0] + 0);
                            echo $imobilizacoes_incorporeas_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeas_passada =  ($dados[0] + 0);
                            echo $imobilizacoes_incorporeas_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeas_antepassada =  ($dados[0] + 0);
                            echo $imobilizacoes_incorporeas_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2103</center> </td>
                    </tr>

                    <tr>
                        <td>investimentos Financeiros</td>
                        <td><center>45</center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiro_atual =  ($dados[0] + 0);
                            echo $investimento_financeiro_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiro_passada =  ($dados[0] + 0);
                            echo $investimento_financeiro_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiro_antepassada =  ($dados[0] + 0);
                            echo $investimento_financeiro_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2104</center> </td>
                    </tr>

                    <tr>
                        <td>Imobilizações em curso</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_curso_atual =  ($dados[0] + 0);
                            echo $imobilizacao_em_curso_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_curso_passada =  ($dados[0] + 0);
                            echo $imobilizacao_em_curso_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_curso_antepassada =  ($dados[0] + 0);
                            echo $imobilizacao_em_curso_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2105</center> </td>
                    </tr>

                    <tr>
                        <td>Outros recebimentos resp. a imobilizados</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizados_atual =  ($dados[0] + 0);
                            echo $recebimentos_imobilizados_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizados_passada =  ($dados[0] + 0);
                            echo $recebimentos_imobilizados_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizados_antepassada =  ($dados[0] + 0);
                            echo $recebimentos_imobilizados_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2106</center> </td>
                    </tr>

                    <tr>
                        <td>Subsídios a investimento</td>
                        <td><center></center></td>
                        <td><center>0</center> </td>
                        <td><center>0</center> </td>
                        <td><center>0</center> </td>
                        <td><center>2107</center> </td>
                    </tr>

                    <tr>
                        <td>Juros e proveitos similares</td>
                        <td><center></center></td>
                        <td><center>
                        <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '66') AND Ano = ($ano) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '66%') AND Ano = ($ano) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $juros_proveitos_atual =  $dados1[0]-$dados[0];

                          ?> 

                        </center> </td>

                        <td><center>
                        <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '66') AND Ano = ($ano-1) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '66%') AND Ano = ($ano-1) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $juros_proveitos_passado =  $dados1[0]-$dados[0];

                          ?> 
                        </center> </td>
                        <td><center>
                        <?php
                              $sql1 = "SELECT SUM(Valor) FROM `basededados` 
                              WHERE (Conta LIKE '66') AND Ano = ($ano-2) AND Natureza = 'C'";
                                
                              $resultado1 = mysqli_query($connection, $sql1);
                              $dados1 = mysqli_fetch_array($resultado1);

                              $sql = "SELECT SUM(Valor) FROM `basededados` 
                                  WHERE (Conta LIKE '66%') AND Ano = ($ano-2) AND Natureza = 'D'";
                                
                              $resultado = mysqli_query($connection, $sql);
                              $dados = mysqli_fetch_array($resultado);
                              echo $dados1[0]-$dados[0];
                              $juros_proveitos_antepassado =  $dados1[0]-$dados[0];

                          ?> 
                        </center> </td>
                        <td><center>2108</center> </td>
                    </tr>
                    <tr>
                        <td>Dividendos / lucros recebidos</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '35142%' AND Ano = ($ano) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $lucros_recbidos_atual =  ($dados[0] + 0);
                            echo $lucros_recbidos_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '35142%' AND Ano = ($ano-1) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $lucros_recbidos_passada =  ($dados[0] + 0);
                            echo $lucros_recbidos_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '35142%' AND Ano = ($ano-2) AND Natureza = 'C'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $lucros_recbidos_antepassada =  ($dados[0] + 0);
                            echo $lucros_recbidos_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2109</center> </td>
                    </tr>

                    <tr>
                        <td>(-) Pagamentos respeitantes a:</td>
                        <td><center></center></td>
                        <td><center></center> </td>
                        <td><center></center> </td>
                        <td><center></center> </td>
                        <td><center>2110</center> </td>
                    </tr>

                    <td>Imobilizações corpóreas</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeasP_atual =  -1 * ($dados[0] + 0);
                            echo $imobilizacoes_corporeasP_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeasP_passada =  -1 * ($dados[0] + 0);
                            echo $imobilizacoes_corporeasP_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '11%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_corporeasP_antepassada =  -1 * ($dados[0] + 0);
                            echo $imobilizacoes_corporeasP_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2102</center> </td>
                    </tr>

                    <tr>
                        <td>Imobilizações incorpóreas</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeasP_atual =  -1 * ($dados[0] + 0);
                            echo $imobilizacoes_incorporeasP_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeasP_passada = -1 * ($dados[0] + 0);
                            echo $imobilizacoes_incorporeasP_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '12%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacoes_incorporeasP_antepassada = -1 * ($dados[0] + 0);
                            echo $imobilizacoes_incorporeasP_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2103</center> </td>
                    </tr>

                    <tr>
                        <td>investimentos Financeiros</td>
                        <td><center>45</center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiroP_atual = -1 * ($dados[0] + 0);
                            echo $investimento_financeiroP_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiroP_passada = -1 * ($dados[0] + 0);
                            echo $investimento_financeiroP_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '13%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $investimento_financeiroP_antepassada =  -1 * ($dados[0] + 0);
                            echo $investimento_financeiroP_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2104</center> </td>
                    </tr>

                    <tr>
                        <td>Imobilizações em curso</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_cursoP_atual =  -1 * ($dados[0] + 0);
                            echo $imobilizacao_em_cursoP_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_cursoP_passada =  -1 * ($dados[0] + 0);
                            echo $imobilizacao_em_cursoP_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '14%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $imobilizacao_em_cursoP_antepassada =  -1 * ($dados[0] + 0);
                            echo $imobilizacao_em_cursoP_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2105</center> </td>
                    </tr>

                    <tr>
                        <td>Outros recebimentos resp. a imobilizados</td>
                        <td><center></center></td>
                        <td><center>
                         <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizadosP_atual = -1 * ($dados[0] + 0);
                            echo $recebimentos_imobilizadosP_atual;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano-1) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizadosP_passada = -1 * ($dados[0] + 0);
                            echo $recebimentos_imobilizadosP_passada;
                          ?> 
                        </center> </td>

                        <td><center>
                        <?php 
                            $sql = "SELECT SUM(Valor) FROM `basededados` WHERE Conta LIKE '371%' AND Ano = ($ano-2) AND Natureza = 'D'";
                            $resultado = mysqli_query($connection, $sql);
                            $dados = mysqli_fetch_array($resultado);
                            $recebimentos_imobilizadosP_antepassada =  -1 * ($dados[0] + 0);
                            echo $recebimentos_imobilizadosP_antepassada;
                          ?> 
                        </center> </td>
                        <td><center>2106</center> </td>
                    </tr>

                    <tr>
                        <th>Caixa líquida usada nas actividades de investimento</th>
                        <th><center>2</center></th>
                        <th><center>
                          <?php 
                            echo $imobilizacoes_corporeas_atual    + $imobilizacoes_corporeasP_atual + $imobilizacoes_incorporeas_atual + 
                                  $imobilizacoes_incorporeasP_atual + $investimento_financeiro_atual  + $investimento_financeiroP_atual  + 
                                  $imobilizacao_em_curso_atual      + $imobilizacao_em_cursoP_atual   + $recebimentos_imobilizados_atual
                                  + $juros_proveitos_atual + $lucros_recbidos_atual + $recebimentos_imobilizadosP_atual;
                          ?>
                          </center> </th>
                        <th><center>
                          <?php 
                            echo $imobilizacoes_corporeas_passada    + $imobilizacoes_corporeasP_passada + $imobilizacoes_incorporeas_passada + 
                                  $imobilizacoes_incorporeasP_passada + $investimento_financeiro_passada  + $investimento_financeiroP_passada  + 
                                  $imobilizacao_em_curso_passada      + $imobilizacao_em_cursoP_passada   + $recebimentos_imobilizados_passada
                                  + $juros_proveitos_passado + $lucros_recbidos_passada + $recebimentos_imobilizadosP_passada;
                          ?>
                        </center> </th>
                        <th><center>
                          <?php 
                            echo $imobilizacoes_corporeas_antepassada    + $imobilizacoes_corporeasP_antepassada + $imobilizacoes_incorporeas_antepassada + 
                                  $imobilizacoes_incorporeasP_antepassada + $investimento_financeiro_antepassada  + $investimento_financeiroP_antepassada  + 
                                  $imobilizacao_em_curso_antepassada      + $imobilizacao_em_cursoP_antepassada   + $recebimentos_imobilizados_antepassada
                                  + $juros_proveitos_antepassado + $lucros_recbidos_antepassada + $recebimentos_imobilizadosP_antepassada;
                          ?>
                        </center> </th>
                        <th><center>2115</center> </th>
                    </tr>

                    



                    

                </table>

                </div>















                <div class="card-header"> 
                <br>               
                <table style="border: 1px solid black; width: 100%; border-radius:5px ;"  class="table-hover">
                   
                    <tr>
                        <th style="color: blue;">Fluxo de caixa das actividades de financiamento</th>
                        <td><center> </center></td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                    </tr>

                    <tr>
                        <td>(+) Recebimentos provenientes de:</td>
                        <td><center> </center></td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center> </center> </td>
                        <td><center>2201</center> </td>
                    </tr>

                    <tr>
                        <td>Aumentos de capital, prest. suplementares e vendas de acções ou quotas próprias</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2202</center> </td>
                        
                    </tr>

                    <tr>
                      <ul>
                        <td>Cobertura de prejuízos</td>
                        </ul>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2203</center> </td>
                    </tr>

                    <tr>
                        <td>Empréstimos obtidos</td>
                        <td><center>45</center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2204</center> </td>
                    </tr>

                    <tr>
                        <td>Subsídios à exploração e doações</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2205</center> </td>
                    </tr>

                    <tr>
                        <td>Outros</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2206</center> </td>
                    </tr>

                    <tr>
                        <td>(-) Pagamentos respeitantes a:</td>
                        <td><center></center></td>
                        <td><center></center> </td>
                        <td><center></center> </td>
                        <td><center></center> </td>
                        <td><center>2207</center> </td>
                    </tr>

                    <tr>
                        <td>Redução de capital, prest. suplementares e vendas de acções ou quotas próprias</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2208</center> </td>
                    </tr>
                    <tr>
                        <td>Compras de acções ou quotas próprias</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2209</center> </td>
                    </tr>

                    <tr>
                        <td>Dividendos/ lucros pagos</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2210</center> </td>
                    </tr>

                    <tr>
                        <td>Empréstimos obtidos</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2211</center> </td>
                    </tr>
                    <tr>
                        <td>Amortiz. de contratos de locação financeira</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2212</center> </td>
                    </tr>

                    <tr>
                        <td>Juros e custos similares pagos.</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2213</center> </td>
                    </tr>

                    <tr>
                        <td>Outros</td>
                        <td><center></center></td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>0,00</center> </td>
                        <td><center>2214</center> </td>
                    </tr>

                    <tr>
                        <th>Caixa líquida usada nas actividades de financiamento</th>
                        <th><center>3</center></th>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <td><center>2200</center> </td>
                    </tr>

                    <tr>
                        <th><br>Variação de caixa e seus equivalentes no fim do período (1+2+3)</th>
                        <td><center></center></td>
                        <th><center>-8 821 955,00</center> </th>
                        <th><center>-1 164 050, 00</center> </th>
                        <th><center>0,00</center> </th>
                        <td><center>2300</center> </td>
                    </tr>

                    <tr>
                        <td><br>Caixa e seus equivalentes no início do período</td>
                        <th><center></center></td>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <td><center>2400</center> </td>
                    </tr>

                    <tr>
                        <th>Caixa e seus equivalentes no fim do período</th>
                        <th><center></center></th>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <th><center>0,00</center> </th>
                        <td><center>2400</center> </td>
                    </tr>

                    



                    

                </table>

                </div>































              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  function showSpinner(){
      $('.spinner').show();
  }

  $('.spinner').hide();

</script>
</body>
</html> 