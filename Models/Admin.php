<?php
require_once(__DIR__ . '/../config/Database.php');

class Admin {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function login($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM administrators WHERE username = :username AND passwrd = :senha");
        $stmt->execute([
            'username' => $username,
            'senha'    => md5($password)
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function emailExiste($email) {
        $stmt = $this->conn->prepare("SELECT * FROM administrators WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->rowCount() > 0;
    }

    public function cadastrar($full_name, $username, $email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO administrators (full_name, username, email, passwrd) 
                                      VALUES (:full_name, :username, :email, :passwrd)");

        return $stmt->execute([
            'full_name' => $full_name,
            'username'  => $username,
            'email'     => $email,
            'passwrd'   => md5($password)
        ]);
    }

    public function deletar($id) {
        
        $stmt = $this->conn->prepare("DELETE FROM administrators WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function listarTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM administrators ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
