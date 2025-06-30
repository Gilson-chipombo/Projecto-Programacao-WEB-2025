<?php 
  include_once "includes/header.php";
  require_once "../Model/connectionBD.php";  
?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h2 class="m-0">Mini-autocarros da <strong>42 Luanda</strong></h2>
            </div>
          </div>
          <br>
        
          <div class="col-md-12">
           <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Cadastrar mini-autocarro</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body collapse">
            <form action="../Controller/miniBusController.php" method="post">
              <div class="form-group">
                <label>Marca da viatura</label>
                <input type="text" name="brand" class="form-control">
              </div>

              <div class="form-group">
                <label>Modelo da viatura</label>
                <input type="text" name="model" class="form-control">
              </div>

              <div class="form-group">
                <label>Cor</label>
                <select class="form-control selectMunicipio" name="color" data-dropdown-css-class="select2-dark" style="width: 100%;">
                    <option selected="selected">Branco</option>
                    <option>Azul escuro</option>
                    <option>Laranja</option>
                    <option>Preto</option>
                    <option>Vermelho</option>
                  </select>
              </div>
              <div class="form-group form-row">
                <div class="col-md-3">
                  <label>Matrícula</label>
                  <input type="text" name="car_registration" class="form-control" required>
                </div>
                <div class="col-md-5">
                  <label for="inputSpentBudget">Seleciona o Motorista</label>
                  <select class="form-control selectMunicipio" name="driver_id" data-dropdown-css-class="select2-dark" style="width: 100%;" required>
                    <option selected disabled value="">Selecione o Motorista</option>               
                    <?php
                        $query_driver = mysqli_query($connection, "SELECT id, full_name FROM drivers");
                        while ($datas = mysqli_fetch_assoc($query_driver)) { ?>
                        <option value="<?php echo $datas['id'] ?>"><?php echo $datas['full_name'] ?></option>
                    <?php } ?>
                  </select>
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

        <table id="cadetes" class="table table-bordered table-striped ">
              <thead>
              <tr>
                  <th>Marca da viatura</th>
                  <th>Modelo da viatura</th>
                  <th>Cor</th>
                  <th>Motorista</th>
              
              </tr>
              </thead>
              <tbody>
                <tr>
            
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Marca da viatura</th>
                  <th>Modelo da viatura</th>
                  <th>Cor</th>
                  <th>Motorista</th>
                </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php include_once "includes/footer.php"; ?>