<?php
session_start();
require_once "../Models/Stop.php";
include_once "includes/header.php";

$stopModel = new Stop();
$paragens = $stopModel->listarTodos();
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Cadastrar <strong>cadete 42 <i class="nav-icon fas fa-graduation-cap"></i></strong></h1>
        </div>
      </div>
      <br>

      <!-- Mensagens -->
   
      <?php if (isset($_SESSION['register_error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['register_error']; unset($_SESSION['register_error']); ?></div>
      <?php endif; ?>

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
            <form action="../Controllers/CadetController.php" method="post">
              <div class="form-group form-row">
                <div class="col-md-5">
                  <label>Nome completo</label>
                  <input type="text" name="full_name" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" required>
                </div>
                <div class="col-md-4">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="form-group form-row">
                <div class="col-md-5">
                  <label>Bairro</label>
                  <input type="text" name="city" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Telefone</label>
                  <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="col-md-4">
                  <label>Paragem</label>
                  <select class="form-control selectParagem" name="stop_id" required>
                    <option disabled selected value="">Selecione a Paragem</option>
                    <?php foreach ($paragens as $paragem): ?>
                      <option value="<?= $paragem['id'] ?>"><?= htmlspecialchars($paragem['stop_name']) ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label>Selecione o município</label>
                <select class="form-control selectMunicipio" name="distrit" required>
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

              <div class="form-group col-md-7 form-row">
                <div class="col">
                  <label>Senha</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col">
                  <label>Confirmar senha</label>
                  <input type="password" name="confirmPass" class="form-control" required>
                </div>
              </div>

              <div class="form-group col-md-3">
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

<?php include_once "includes/footer.php"; ?>
