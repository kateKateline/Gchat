<script src="../assets/js/loginScript"></script>
<script src="https://cdn.tailwindcss.com"></script>
<div class="flex min-h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-white border-r border-gray-200">
    <div class="p-6">
      <h2 class="text-lg font-semibold text-gray-900 mb-6">Settings</h2>
      <nav class="space-y-2">
          <a href="index.php?page=profile&tab=my_accounts" 
          class="block p-3 rounded-lg hover:bg-gray-50 <?php echo ($_GET['tab'] ?? '') === 'my_accounts' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          My Accounts
        </a>
        <a href="index.php?page=profile&tab=profile" 
           class="block p-3 rounded-lg hover:bg-gray-50 <?php echo ($_GET['tab'] ?? '') === 'profile' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          Profile
        </a>
        <a href="index.php?page=profile&tab=password" 
           class="block p-3 rounded-lg hover:bg-gray-50 <?php echo ($_GET['tab'] ?? '') === 'password' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          Password & Security
        </a>
        <a href="index.php?page=profile&tab=privacy" 
           class="block p-3 rounded-lg hover:bg-gray-50 <?php echo ($_GET['tab'] ?? '') === 'privacy' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          Privacy & Safety
        </a>
        <a href="index.php?page=home" 
           class="block p-3 rounded-lg hover:bg-gray-50 text-gray-600">
          Back to Home
        </a>
      </nav>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6 bg-zinc-100">
    <?= $content ?>
  </main>
</div>
