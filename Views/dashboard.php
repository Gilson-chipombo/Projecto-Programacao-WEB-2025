<?php include_once "includes/header.php"; ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Usabilidade do Sistema</h3>
                  </div>
                </div>
                <div class="card-body">

                  <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="20"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> Este Mês
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Mês Passado
                    </span>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Tempo percorrido</h3>
                    <h3 class="card-title">.</h3>
                  </div>
                </div>
                <div class="card-body">
             
                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="10"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> Este ano
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Ano passado
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>





    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CADETES ATIVOS</h3> 
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nome completo</th>
                    <th>Username</th>
                    <th>Município</th>
                    <th>Phone</th>
                    <th>Paragem</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Gilson Bravo F. Chipombo</td>
                    <td>gbravo-f</td>
                    <td>Cacuaco</td>
                    <td>935626001</td>
                    <td>Vila de Cacuaco</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Cesaltino Félix</td>
                    <td>cefelix</td>
                    <td>Viana</td>
                    <td>936589475</td>
                    <td>Vila da Gamek</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Flávio Malungo</td>
                    <td>fmalungo</td>
                    <td>Cacuaco</td>
                    <td>936589471</td>
                    <td>Ngoma</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Gildo Komba</td>
                    <td>gkomba</td>
                    <td>Talatona</td>
                    <td>936589472</td>
                    <td>Danjarre</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Sebastião Domingos</td>
                    <td>sedomin</td>
                    <td>Morro Bento</td>
                    <td>936589477</td>
                    <td>Vila da Gamek</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Fernanda Domingos Diando</td>
                    <td>fdiando</td>
                    <td>Maianga</td>
                    <td>936589475</td>
                    <td>1º de Maio</td>
                    <td class="project-state">
                      <span class="badge badge-success">ativo</span>
                    </td>
                  </tr>
  
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
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


        </div>
      </div>
    </div>

  <?php include_once "includes/footer.php"?>
