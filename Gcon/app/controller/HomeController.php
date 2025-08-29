<?php
class HomeController {
    public function index() {
        $title = "Gcon — Find Gaming Chat Servers";
        $description = "Discover and join the best gaming chat servers.";

        // file view 
        $content = __DIR__ . '/../view/landing/page/home.php';
        
        include __DIR__ . '/../view/layout.php';
    }
}