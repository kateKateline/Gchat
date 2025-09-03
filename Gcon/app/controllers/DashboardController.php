<?php
namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller {
    private function ensureAdmin() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header("Location: /Gcon/public/index.php?page=login");
            exit;
        }
    }

    public function index() {
        $this->ensureAdmin();
        $this->view('dashboard/index', ['title' => 'Dashboard']);
    }
}
