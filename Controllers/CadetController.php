<?php
session_start();
require_once(__DIR__ . '/../Models/Cadet.php');

if (isset($_POST['btn_cadastrar'])) {
    $cadetModel = new Cadet();

    $full_name   = $_POST['full_name'];
    $username    = $_POST['username'];
    $email       = $_POST['email'];
    $city        = $_POST['city'];
    $phone       = $_POST['phone'];
    $stop_id     = $_POST['stop_id'];
    $distrit     = $_POST['distrit'];
    $password    = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    if ($password !== $confirmPass) {
        $_SESSION['register_error'] = "As senhas não coincidem.";
        header('Location: ../Views/students.php');
        exit();
    }

    if ($cadetModel->emailExiste($email)) {
        $_SESSION['register_error'] = "$email já está registrado.";
        header('Location: ../Views/students.php');
        exit();
    }

    $dados = compact('full_name', 'username', 'email', 'city', 'distrit', 'password', 'phone', 'stop_id');

    if ($cadetModel->cadastrar($dados)) {
        $_SESSION['register_success'] = "Cadete cadastrado com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao cadastrar cadete.";
    }

    header('Location: ../Views/students.php');
    exit();
}
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    
    $id = intval($_GET['id']);
    echo $id;
    if ($cadetModel->deletar($id)) {
        $_SESSION['register_success'] = "Cadete excluído com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao excluir o cadete.";
    }
    header('Location: ../Views/students.php');
    exit();
}