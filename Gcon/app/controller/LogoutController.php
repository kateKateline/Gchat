<?php
class LogoutController {
    public function index() {
        session_start();
        session_unset();   // hapus semua data session
        session_destroy(); // hancurkan session

        header("Location: /Gcon/public/index.php?page=home");
        exit;
    }
}
