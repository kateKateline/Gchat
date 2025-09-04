<?php
namespace App\Models;

use App\Core\Model;

class User extends Model {
    public function findByEmail(string $email) {
        $stmt = $this->db()->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function create(string $username, string $email, string $password, string $role = 'user') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db()->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$username, $email, $hashedPassword, $role]);
    }

    public function findById(int $id) {
        $stmt = $this->db()->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    

}
