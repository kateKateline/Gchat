<?php
class HomeController {
    public function index() {
        $title = "Gcon — Find Gaming Chat Servers";
        $description = "Discover and join the best gaming chat servers.";

        // Tentukan file view utama
        $content = __DIR__ . '/../view/landing/home.php';
        
        include __DIR__ . '/../view/layout.php';
    }
}