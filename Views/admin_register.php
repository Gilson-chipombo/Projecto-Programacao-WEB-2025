<?php include_once "includes/header.php"; ?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Cadastrar <strong>Admin <i class="nav-icon fas fa-user"></i></strong></h1>
            </div>
          </div>
          <br>
          

          <div class="col-md-12">
           <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Formulário</h3>

              <div class="card-tools">
                <a type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
                <form action="../Controllers/AdminController.php" method="post">

                    <div class="form-group form-row">
                        <div class="col-md-8">
                            <label for="inputEstimatedBudget">Nome completo</label>
                            <input type="text" id="inputEstimatedBudget" class="form-control" name="full_name" required>
                        </div>

                        <div class="col-md-4">
                            <label for="inputEstimatedBudget">Username</label>
                            <input type="text" id="inputEstimatedBudget" class="form-control" name="username" required>
                        </div>

                        <div class="col-md-4">
                            <label for="inputEstimatedBudget">Email</label>
                            <input type="email" id="inputEstimatedBudget" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEstimatedBudget">Telefone</label>
                            <input type="text" id="inputEstimatedBudget" class="form-control" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-4">
                        <label for="inputEstimatedDuration">Senha</label>
                        <input type="password" id="inputEstimatedDuration" class="form-control" name="password" required>
                        </div>
                        <div class="col-md-4">
                        <label for="inputEstimatedDuration">Confirmar senha</label>
                        <input type="password" id="inputEstimatedDuration" class="form-control" name="confirmPass" required>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-3 ">
                        <button type="submit" class="btn btn-primary btn-dark" name="btn_cadastrar">
                            Cadastrar
                            <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php include_once "includes/footer.php"; //https://www.youtube.com/watch?v=6mAdRdwZihc?>

