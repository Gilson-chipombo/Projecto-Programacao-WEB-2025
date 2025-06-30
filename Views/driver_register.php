<?php include_once "includes/header.php"; ?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                Cadastrar 
                <strong>
                    Motorista 
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                </strong>
              </h1>
            </div>
          </div>
          <br>
          <div class="col-md-12">
           <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Formulário</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <form action="../Controller/driverController.php" method="post">

                    <div class="form-group form-row">
                        <div class="col-md-4">
                            <label>Nome completo</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                          <label>Selecione o município</label>
                          <select class="form-control selectMunicipio" name="distrit" data-dropdown-css-class="select2-dark" style="width: 100%;" required>
                              <option selected="selected">Luanda</option>
                              <option>Icolo-e-Bengo</option>
                              <option>Quiçama</option>
                              <option>Cacuaco</option>
                              <option>Cazenga</option>
                              <option>Viana</option>
                              <option>Belas</option>
                              <option>Kilamba Kiaxi</option>
                              <option>Talatona</option>
                          </select>
                        </div>
                        
                        <div class="col-md-2">
                            <label>Bairro</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>
                       
                    </div>
                    <div class="form-group form-row">
                        
                        <div class="col-md-2">
                            <label>Nasc.</label>
                            <input type="date" name="birthday" class="form-control" required>
                        </div>
                        

                        <div class="col-md-2">
                            <label>Telefone</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="col-md-5">
                          <label>Nº da c. de cond.</label>
                          <input type="number" name="licence_number" class="form-control" required>
                        </div>
                    </div>



                    <div class="form-group form-row">
                        <div class="col-md-4">
                          <label for="inputSpentBudget">Categoria da carta</label>
                          <select class="form-control selectMunicipio" name="category" data-dropdown-css-class="select2-dark" style="width: 100%;" required>
                              <option selected="selected">Ligeiro</option>
                              <option>Profissional</option>
                              <option>Pesado</option>
                          </select>
                        </div>

                        <div class="col-md-4">
                          <label>Validade(Data de exp.)</label>
                          <input type="date" name="licence_validate" class="form-control"  min="0" required>
                        </div>

                        <div class="col-md-4">
                          <label>Tempo de experiência</label>
                          <input type="number" name="experience_time" class="form-control" placeholder="1 ano" required>
                        </div>

                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-4">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                        <label>Confirmar senha</label>
                        <input type="password" name="confirmPassword" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-3 ">
                        <button type="submit" name="btn_cadastrar" class="btn btn-primary btn-dark">
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

