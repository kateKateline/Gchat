<script src="../assets/js/loginScript"></script>
<script src="https://cdn.tailwindcss.com"></script>
<div class="flex min-h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-white border-r border-gray-200">
    
    <div class="p-6">
      <h2 class="text-lg font-semibold text-gray-900 mb-6">Settings</h2>
      <nav class="space-y-2">
        <a href="index.php?page=profile&tab=my_accounts" 
           class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'my_accounts' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
          </svg>
          <span class="ml-3">My Accounts</span>
        </a>
        
        <a href="index.php?page=profile&tab=profile" 
           class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'profile' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
          <span class="ml-3">Profile</span>
        </a>
        
        <a href="index.php?page=profile&tab=password" 
           class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'password' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
          <span class="ml-3">Password & Security</span>
        </a>
        
        <a href="index.php?page=profile&tab=privacy" 
           class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors <?php echo ($_GET['tab'] ?? '') === 'privacy' ? 'bg-violet-50 text-violet-700 border border-violet-200' : 'text-gray-600'; ?>">
          <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          <span class="ml-3">Privacy & Safety</span>
        </a>
        
        <a href="index.php?page=home" 
           class="group flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors text-gray-600">
          <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          <span class="ml-3">Back to Home</span>
        </a>
      </nav>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6 bg-zinc-100">
    <?= $content ?>
  </main>
</div>



