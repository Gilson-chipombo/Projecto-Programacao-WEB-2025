<?php
session_start();
require_once "../Models/Cadet.php";
include_once "includes/header.php";

$cadetModel = new Cadet();
$cadetes = $cadetModel->listarTodos();
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Cadetes <strong>42 Luanda</strong></h2>
        </div>
      </div>
      <br>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a type="submit" href="student_register.php" class="btn btn-primary btn-dark">
          Cadastrar cadete <i class="nav-icon fas fa-graduation-cap"></i>
        </a>
      </div>

      <br>

      <!-- Mensagens -->
     
      <?php if (isset($_SESSION['register_error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['register_error']; unset($_SESSION['register_error']); ?></div>
      <?php endif; ?>

      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Tabela de Cadetes</h3>
        </div>
        <div class="card-body">
          <table id="cadetes" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome completo</th>
                <th>Username</th>
                <th>Município</th>
                <th>Telefone</th>
                <th>Paragem</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cadetes as $cadete): ?>
                <tr>
                  <td><?= htmlspecialchars($cadete['full_name']) ?></td>
                  <td><?= htmlspecialchars($cadete['username']) ?></td>
                  <td><?= htmlspecialchars($cadete['city']) ?></td>
                  <td><?= htmlspecialchars($cadete['phone']) ?></td>
                  <td><?= htmlspecialchars($cadete['stop_name']) ?></td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                      <a href="../Controllers/CadetController.php?action=delete&id=<?= $cadete['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
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
                <th>Paragem</th>
                <th>Ações</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include_once "includes/footer.php"; ?>
