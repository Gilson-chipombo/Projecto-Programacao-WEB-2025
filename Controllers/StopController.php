<?php
session_start();
require_once(__DIR__ . '/../Models/Stop.php');

$stopModel = new Stop();

if (isset($_POST['btn_cadastrar'])) {
    $stop_name = $_POST['stop_name'];
    $distrit   = $_POST['distrit'];
    $latitude  = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    if (empty($stop_name) || empty($distrit) || empty($latitude) || empty($longitude)) {
        $_SESSION['register_error'] = "Preencha todos os campos obrigatórios.";
        header('Location: ../Views/bus_stops.php');
        exit;
    }

    if ($stopModel->existe($latitude, $longitude)) {
        $_SESSION['register_error'] = "Paragem '$stop_name' já existe com essas coordenadas.";
        header('Location: ../Views/bus_stops.php');
        exit;
    }

    if ($stopModel->cadastrar($stop_name, $distrit, $latitude, $longitude)) {
        $_SESSION['register_success'] = "Paragem cadastrada com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao cadastrar paragem.";
    }

    header('Location: ../Views/bus_stops.php');
    exit;
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    if ($stopModel->deletar($id)) {
        $_SESSION['register_success'] = "Paragem deletada com sucesso.";
    } else {
        $_SESSION['register_error'] = "Erro ao deletar paragem.";
    }

    header('Location: ../Views/bus_stops.php');
    exit;
}
