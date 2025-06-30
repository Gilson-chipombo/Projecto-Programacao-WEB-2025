<?php
session_start();
require_once(__DIR__ . '/../Models/Admin.php');

$admin = new Admin();

if (isset($_POST['btn_cadastrar'])) {
    $full_name   = $_POST['full_name'];
    $username    = $_POST['username'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    if ($password !== $confirmPass) {
        $_SESSION['register_error'] = "As senhas não coincidem.";
        header('Location: ../Views/admin.php');
        exit;
    }

    if ($admin->emailExiste($email)) {
        $_SESSION['register_error'] = "Email '$email' já existe.";
        header('Location: ../Views/admin.php');
        exit;
    }

    // Cadastra o admin
    if ($admin->cadastrar($full_name, $username, $email, $password)) {
        $_SESSION['register_success'] = "Administrador cadastrado com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao cadastrar administrador.";
    }

    header('Location: ../Views/admin.php');
    exit;
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];
    
    if ($admin->deletar($id)) {
        $_SESSION['register_success'] = "Administrador deletado com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao deletar administrador.";
    }

    header('Location: ../Views/admin.php');
    exit; 
}