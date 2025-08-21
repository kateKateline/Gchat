<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // cari user berdasarkan email
    public function findByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // simpan user baru
    public function create($username, $email, $password, $profile_picture = null, $role = 'user') {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare("INSERT INTO users (username, email, password, profile_picture, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $email, $hash, $profile_picture, $role);

        return $stmt->execute();
    }
}
