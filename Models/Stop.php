<?php
require_once(__DIR__ . '/../config/Database.php');

class Stop {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function existe($latitude, $longitude) {
        $stmt = $this->conn->prepare("SELECT * FROM mini_bus_stop WHERE latitude = :lat AND longitude = :lng");
        $stmt->execute([
            'lat' => $latitude,
            'lng' => $longitude
        ]);
        return $stmt->rowCount() > 0;
    }

    public function cadastrar($stop_name, $distrit, $latitude, $longitude) {
        $stmt = $this->conn->prepare("
            INSERT INTO mini_bus_stop (stop_name, distrit, latitude, longitude)
            VALUES (:stop_name, :distrit, :latitude, :longitude)
        ");

        return $stmt->execute([
            'stop_name' => $stop_name,
            'distrit'   => $distrit,
            'latitude'  => $latitude,
            'longitude' => $longitude
        ]);
    }

    public function listarTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM mini_bus_stop ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $stmt = $this->conn->prepare("DELETE FROM mini_bus_stop WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
