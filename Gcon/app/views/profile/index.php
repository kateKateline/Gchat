

  <!-- Main Layout -->
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200">
      <div class="p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-6">Settings</h2>
        <nav class="space-y-2">
          <a href="#account" class="flex items-center gap-3 p-3 rounded-xl bg-violet-50 text-violet-700 border border-violet-200">
            My Account
          </a>
          <a href="#password" class="flex items-center gap-3 p-3 rounded-xl text-gray-600 hover:bg-gray-50">
            Password & Security
          </a>
        </nav>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Banner -->
      <div class="relative mb-8">
        <?php 
          $bannerFile = $user['banner'] ?? null;
          $bannerUrl  = $bannerFile ? "uploads/banner/" . htmlspecialchars($bannerFile) : "assets/img/banner-default.jpg";
        ?>
        <div class="h-56 w-full rounded-xl relative overflow-hidden">
          <img src="<?= $bannerUrl ?>" class="w-full h-full object-cover" alt="banner">
          <div class="absolute inset-0 bg-black/20"></div>
        </div>

        <!-- Profile Picture -->
        <div class="absolute -bottom-16 left-8">
          <img src="<?= $avatarUrl ?>" 
               alt="Profile Picture" 
               class="w-32 h-32 rounded-full border-4 border-white shadow-xl"
               onerror="this.onerror=null;this.src='assets/img/default.png';">
        </div>
      </div>

      <!-- Profile Info -->
      <div class="bg-white rounded-xl shadow-sm border p-8 mt-8">
        <h1 class="text-3xl font-bold text-gray-900"><?= htmlspecialchars($user['username']) ?></h1>
        <p class="text-gray-500 text-lg"><?= htmlspecialchars($user['email']) ?></p>
        <p class="text-sm text-slate-500">Role: <?= htmlspecialchars($user['role']) ?></p>
      </div>
    </main>
  </div>

