<?php
require_once __DIR__ . '/../config/Database.php';

class Cadet {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function cadastrar($data) {
        $stmt = $this->conn->prepare("INSERT INTO cadetes 
            (full_name, username, email, city, distrit, passwrd, phone, stop_id) 
            VALUES (:full_name, :username, :email, :city, :distrit, :passwrd, :phone, :stop_id)");
        
        return $stmt->execute([
            'full_name' => $data['full_name'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'city'      => $data['city'],
            'distrit'   => $data['distrit'],
            'passwrd'   => md5($data['password']),
            'phone'     => $data['phone'],
            'stop_id'   => $data['stop_id']
        ]);
    }

    public function emailExiste($email) {
        $stmt = $this->conn->prepare("SELECT id FROM cadetes WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }


    public function listarTodos() {
        $stmt = $this->conn->prepare("
            SELECT c.*, s.stop_name 
            FROM cadetes c 
            LEFT JOIN mini_bus_stop s ON c.stop_id = s.id 
            ORDER BY c.id DESC
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $stmt = $this->conn->prepare("DELETE FROM cadetes WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
