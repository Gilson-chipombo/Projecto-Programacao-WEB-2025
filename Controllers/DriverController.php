<?php
require_once __DIR__ . '/../Models/Driver.php';
session_start();

$driverModel = new Driver();

// Cadastro de motorista
if (isset($_POST["btn_cadastrar"])) {
    $data = [
        'full_name'      => $_POST['full_name'],
        'username'       => $_POST['username'],
        'distrit'        => $_POST['distrit'],
        'city'           => $_POST['city'],
        'birthday'       => $_POST['birthday'],
        'phone'          => $_POST['phone'],
        'email'          => $_POST['email'], // não está sendo usado ainda
        'license_number' => $_POST['licence_number'],
        'category'       => $_POST['category'],
        'validate'       => $_POST['licence_validate'],
        'exp_time'       => $_POST['experience_time'],
        'password'       => $_POST['password'],
        'confirmPass'    => $_POST['confirmPassword']
    ];

    if ($data['password'] !== $data['confirmPass']) {
        $_SESSION['register_error'] = "As senhas não coincidem.";
        header("Location: ../Views/drivers.php");
        exit;
    }

    if ($driverModel->phoneExiste($data['phone'])) {
        $_SESSION['register_error'] = "Telefone '{$data['phone']}' já está cadastrado.";
        header("Location: ../Views/drivers.php");
        exit;
    }

    if ($driverModel->cadastrar($data)) {
        $_SESSION['register_success'] = "Motorista cadastrado com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao cadastrar motorista.";
    }

    header("Location: ../Views/drivers.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($driverModel->deletar($id)) {
        $_SESSION['register_success'] = "Motorista deletado com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao deletar motorista.";
    }

    header("Location: ../Views/drivers.php");
    exit;
}
