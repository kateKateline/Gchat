<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$app = require __DIR__ . '/../../../config/app.php';
?><!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= isset($title) ? $title . ' | ' . $app['app_name'] : $app['app_name'] ?></title>
<link rel="stylesheet" href="<?= $app['base_url'] ?>../public/css/style.css">
<link rel="stylesheet" href="../assets/css/style.css">
<script src="../public/js/scrollremember.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
  <body>
    <div class="flex min-h-screen">
      <!-- Sidebar -->
      <aside class="w-64 bg-white border-r border-gray-200">
        <div class="p-6">
          <h2 class="text-lg font-semibold text-gray-900 mb-6">Settings</h2>
          <nav class="space-y-6">

            <!-- ACCOUNT -->
            <div>
              <h3 class="text-xs font-semibold text-gray-700 uppercase mb-2">Account</h3>
              <div class="space-y-1">
                <a href="index.php?page=profile&tab=my_accounts" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'my_accounts' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">My Account</a>
                <a href="index.php?page=profile&tab=profile" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'profile' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Profile</a>
                <a href="index.php?page=profile&tab=password" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'password' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Password & Security</a>
                <a href="index.php?page=profile&tab=privacy" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'privacy' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Privacy & Safety</a>
                <a href="index.php?page=profile&tab=linked_accounts" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'linked_accounts' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Linked Accounts</a>
                <a href="index.php?page=profile&tab=notifications" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'notifications' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Notifications</a>
              </div>
            </div>

            <!-- PREFERENCES -->
            <div>
              <h3 class="text-xs font-semibold text-gray-700 uppercase mb-2">Preferences</h3>
              <div class="space-y-1">
                <a href="index.php?page=profile&tab=appearance" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'appearance' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Appearance</a>
                <a href="index.php?page=profile&tab=language" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'language' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Language & Region</a>
                <a href="index.php?page=profile&tab=accessibility" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'accessibility' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Accessibility</a>
              </div>
            </div>

            <!-- SUPPORT -->
            <div>
              <h3 class="text-xs font-semibold text-gray-700 uppercase mb-2">Support</h3>
              <div class="space-y-1">
                <a href="index.php?page=profile&tab=help" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'help' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Help Center</a>
                <a href="index.php?page=profile&tab=support" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'support' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Contact Support</a>
                <a href="index.php?page=profile&tab=report" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'report' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Report a Problem</a>
              </div>
            </div>

            <!-- ABOUT -->
            <div>
              <h3 class="text-xs font-semibold text-gray-700 uppercase mb-2">About</h3>
              <div class="space-y-1">
                <a href="index.php?page=profile&tab=app_info" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'app_info' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">App Info</a>
                <a href="index.php?page=profile&tab=terms" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'terms' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">Terms & Policies</a>
              </div>
            </div>

            <!-- BACK -->
            <div>
              <a href="index.php?page=home" class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors text-gray-600">Back to Home</a>
            </div>

          </nav>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="flex-1 p-6 bg-zinc-100">
        <?= $content ?>
      </main>
    </div>
  </body>
</html>