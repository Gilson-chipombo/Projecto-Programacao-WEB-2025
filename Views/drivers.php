<?php
include_once "includes/header.php";
require_once "../Models/Driver.php";
session_start();

$driverModel = new Driver();
$drivers = $driverModel->listarTodos();
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Motoristas</h2>
        </div>
      </div>

      
      <?php if (isset($_SESSION['register_error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['register_error']; unset($_SESSION['register_error']); ?></div>
      <?php endif; ?>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="driver_register.php" class="btn btn-primary btn-dark">
          Cadastrar Motorista <i class="fa fa-id-card" aria-hidden="true"></i>
        </a>
      </div>

      <br>
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Tabela de Motoristas</h3>
        </div>

        <div class="card-body">
          <table id="motoristas" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome completo</th>
                <th>Username</th>
                <th>Município</th>
                <th>Telefone</th>
                <th>Licença</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($drivers as $driver): ?>
                <tr>
                  <td><?= htmlspecialchars($driver['full_name']) ?></td>
                  <td><?= htmlspecialchars($driver['username']) ?></td>
                  <td><?= htmlspecialchars($driver['distrit']) ?></td>
                  <td><?= htmlspecialchars($driver['phone']) ?></td>
                  <td><?= htmlspecialchars($driver['license_number']) ?></td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                      <a href="../Controllers/DriverController.php?action=delete&id=<?= $driver['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja mesmo apagar este motorista?');">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Nome completo</th>
                <th>Username</th>
                <th>Município</th>
                <th>Telefone</th>
                <th>Licença</th>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include_once "includes/footer.php"; ?>
