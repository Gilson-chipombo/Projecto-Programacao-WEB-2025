<?php 
include_once "includes/header.php"; 
require_once("../Models/Admin.php");

session_start();
$adminModel = new Admin();
$administradores = $adminModel->listarTodos();
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Administradores do sistema</h2>
        </div>
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="admin_register.php" class="btn btn-primary btn-dark">Cadastrar Admin.</a>
      </div>

      <br>

      <!-- Mensagens -->

      <?php if (isset($_SESSION['register_error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['register_error']; unset($_SESSION['register_error']); ?></div>
      <?php endif; ?>

      <!-- Tabela -->
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Tabela de Administradores</h3>
        </div>
        <div class="card-body">
          <table id="cadetes" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome completo</th>
                <th>Username</th>
                <th>Email</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($administradores as $admin): ?>
                <tr>
                  <td><?= htmlspecialchars($admin['full_name']) ?></td>
                  <td><?= htmlspecialchars($admin['username']) ?></td>
                  <td><?= htmlspecialchars($admin['email']) ?></td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                      <a href="../Controllers/AdminController.php?deletar=<?= $admin['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-danger">
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
                <th>Email</th>
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
