<?php
require_once __DIR__ . '/../model/Server.php';
$title = "Discover — Gcon";
$description = "Find and join servers on Gcon";
$content = __DIR__ . '/../view/landing/page/discover.php';

class DiscoverController {
    public function index() {
        $server = new Server();
        $servers = $server->getAllWithMembers();
        include __DIR__ . '/../view/landing/page/discover.php';
    }
}
