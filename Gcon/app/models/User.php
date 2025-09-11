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

    // Update banner
    public function updateBanner(int $id, string $bannerFile) {
        $stmt = $this->db()->prepare("UPDATE users SET banner = ? WHERE id = ?");
        return $stmt->execute([$bannerFile, $id]);
    }

    // Update foto profil
    public function updateAvatar(int $id, string $avatarFile) {
        $stmt = $this->db()->prepare("UPDATE users SET profile_image = ? WHERE id = ?");
        return $stmt->execute([$avatarFile, $id]);
    }

    // Update nama & about me
    public function updateInfo(int $id, string $username, string $about) {
        $stmt = $this->db()->prepare("UPDATE users SET username = ?, about = ? WHERE id = ?");
        return $stmt->execute([$username, $about, $id]);
    }

    // Update status user (online, offline, dnd, invisible)
    public function updateStatus(int $id, string $status) {
        $stmt = $this->db()->prepare("UPDATE users SET status = ? WHERE id = ?");
        return $stmt->execute([$status, $id]);
    }
}
