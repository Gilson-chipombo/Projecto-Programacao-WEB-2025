<?php
require_once __DIR__ . '/../config/Database.php';

class Driver {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function phoneExiste($phone) {
        $stmt = $this->conn->prepare("SELECT id FROM drivers WHERE phone = :phone");
        $stmt->execute(['phone' => $phone]);
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }

    public function cadastrar($data) {
        $stmt = $this->conn->prepare("INSERT INTO drivers 
            (full_name, username, city, distrit, passwrd, photo, phone, birthday, validate, license_number, category, exp_time)
            VALUES (:full_name, :username, :city, :distrit, :passwrd, :photo, :phone, :birthday, :validate, :license_number, :category, :exp_time)");

        return $stmt->execute([
            'full_name'      => $data['full_name'],
            'username'       => $data['username'],
            'city'           => $data['city'],
            'distrit'        => $data['distrit'],
            'passwrd'        => md5($data['password']),
            'photo'          => '', 
            'phone'          => $data['phone'],
            'birthday'       => $data['birthday'],
            'validate'       => $data['validate'],
            'license_number' => $data['license_number'],
            'category'       => $data['category'],
            'exp_time'       => $data['exp_time']
        ]);
    }
    public function listarTodos() {
        $stmt = $this->conn->query("SELECT * FROM drivers ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $stmt = $this->conn->prepare("DELETE FROM drivers WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

}
