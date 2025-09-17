<?php
$app = require __DIR__ . '/../../../config/app.php';
?>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= $app['base_url'] ?>/assets/style.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/loginScript"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= isset($title) ? $title . ' | ' . $app['app_name'] : $app['app_name'] ?></title>
</head>
<body>
    <div class="flex min-h-screen bg-slate-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-slate-200 flex flex-col">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-center border-b border-slate-200">
                <span class="text-2xl font-extrabold brand-text-gradient">Gchat</span>
            </div>
    
            <!-- Nav -->
            <nav class="flex-1 p-4 space-y-2">
                <a href="/Gchat/public/index.php?page=dashboard" 
                   class="flex items-center px-3 py-2 rounded-lg hover:bg-violet-50 text-slate-700 font-medium">
                   📊 <span class="ml-2">Dashboard</span>
                </a>
                <a href="/Gchat/public/index.php?page=servers"
                   class="flex items-center px-3 py-2 rounded-lg hover:bg-violet-50 text-slate-700 font-medium">
                   🖥️ <span class="ml-2">Servers</span>
                </a>
                <a href="/Gchat/public/index.php?page=users"
                   class="flex items-center px-3 py-2 rounded-lg hover:bg-violet-50 text-slate-700 font-medium">
                   👥 <span class="ml-2">Users</span>
                </a>
                <a href="/Gchat/public/index.php?page=settings"
                   class="flex items-center px-3 py-2 rounded-lg hover:bg-violet-50 text-slate-700 font-medium">
                   ⚙️ <span class="ml-2">Settings</span>
                </a>
            </nav>
            <!-- profile -->
            <div class="p-4 border-t border-slate-200">
                <?php
                  $avatarFile = $_SESSION['profile_image'] ?? null;
                  $avatarUrl  = $avatarFile ? "uploads/profile_image/" . htmlspecialchars($avatarFile)
                                            : "assets/img/default.png";
                ?>
                <a href="/Gchat/public/index.php?page=profile"
                   class="flex items-center px-3 py-2 rounded-lg bg-violet-50 text-violet-700 font-medium">
                   <img src="<?= $avatarUrl ?>"
                        onerror="this.onerror=null; this.src='assets/img/default.png';"
                        alt="avatar"
                        class="w-8 h-8 rounded-full border" />
                   <span class="ml-2"><?= htmlspecialchars($_SESSION['username'] ?? 'Profile') ?></span>
                </a>
            </div>
    
    
            <!-- logout -->
            <div class="p-4 border-t border-slate-200">
                <a href="/Gchat/public/index.php?page=logout"
                   class="flex items-center px-3 py-2 rounded-lg bg-red-50 text-red-700 font-medium">
                   🚪 <span class="ml-2">Logout</span>
                </a>
            </div>
        </aside>
    
        <!-- content -->
        <main class="flex-1 p-8">
            <?= $content ?? '<h1 class="text-3xl font-bold">Welcome to Dashboard 🎉</h1><p class="text-slate-600 mt-2">Silakan pilih menu di sidebar.</p>' ?>
        </main>
    </div>

</body>
</html>


