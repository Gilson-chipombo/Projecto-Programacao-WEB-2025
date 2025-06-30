<?php
session_start();

require_once("../Models/Admin.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminModel = new Admin();
    $admin = $adminModel->login($username, $password);

    if ($admin) {
        session_regenerate_id(true);
        $_SESSION['logado'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../Views/dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Usuário ou senha inválidos.";
        header("Location: ../index.php");
        exit;
    }
    
} else {
    header("Location: ../index.php");
    exit;
}
