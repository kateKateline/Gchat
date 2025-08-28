<?php
require_once __DIR__ . '/../../config/db.php';

class Server {
    private $conn;

    public function __construct() {
        global $conn; // ambil koneksi dari db.php
        $this->conn = $conn;
    }

    public function getAllWithMembers() {
        $sql = "
            SELECT 
                s.id,
                s.name,
                s.description,
                s.icon,
                u.username AS owner,
                COUNT(sm.user_id) AS member_count
            FROM servers s
            LEFT JOIN users u ON s.owner_id = u.id
            LEFT JOIN server_members sm ON s.id = sm.server_id
            GROUP BY s.id, s.name, s.description, s.icon, u.username
            ORDER BY s.created_at DESC
        ";

        $result = $this->conn->query($sql);

        $servers = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $servers[] = $row;
            }
        }
        return $servers;
    }
}
