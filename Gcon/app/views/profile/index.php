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

        <!-- Tombol Change Banner -->
        <form action="index.php?page=profile&action=updateBanner" method="POST" enctype="multipart/form-data" class="absolute top-4 right-4">
          <label for="banner-upload" class="cursor-pointer bg-black/50 hover:bg-black/70 text-white text-sm px-4 py-2 rounded-lg flex items-center gap-2 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h2l2-3h10l2 3h2a1 1 0 011 1v11a1 1 0 01-1 1H3a1 1 0 01-1-1V8a1 1 0 011-1z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11a3 3 0 100-6 3 3 0 000 6z" />
            </svg>
            Change Banner
          </label>
          <input type="file" name="banner" id="banner-upload" class="hidden" onchange="this.form.submit()">
        </form>
      </div>

      <!-- profile -->
      <?php
        $avatarFile = $user['profile_image'] ?? null;
        $avatarUrl  = $avatarFile ? "uploads/profile_image/" . htmlspecialchars($avatarFile) : "assets/img/default.png";
      ?>
      <div class="absolute -bottom-16 left-8">
        <div class="relative">
          <img src="<?= $avatarUrl ?>" 
               alt="Profile Picture" 
               class="w-32 h-32 rounded-full border-4 border-white shadow-xl"
               onerror="this.onerror=null;this.src='assets/img/default.png';">

          <form action="index.php?page=profile&action=updateAvatar" method="POST" enctype="multipart/form-data" class="absolute bottom-2 right-2">
            <label for="avatar-upload" class="cursor-pointer bg-black/50 hover:bg-black/70 text-white text-xs px-2 py-1 rounded-lg">
              Change
            </label>
            <input type="file" name="avatar" id="avatar-upload" class="hidden" onchange="this.form.submit()">
          </form>
        </div>
      </div>
    </div>

    <!-- Profile Info -->
    <div class="bg-white rounded-xl shadow-sm border p-8 mt-20">
      <h1 class="text-3xl font-bold text-gray-900"><?= htmlspecialchars($user['username']) ?></h1>
      <p class="text-gray-500 text-lg"><?= htmlspecialchars($user['email']) ?></p>
      <p class="text-sm text-slate-500">Role: <?= htmlspecialchars($user['role']) ?></p>

      <!-- Status -->
      <?php if (isset($user['status'])): ?>
      <!-- Form Ganti Status -->
        <form action="index.php?page=profile&action=updateStatus" method="POST" class="mt-6 max-w-xs">
          <label for="status" class="block text-sm font-semibold text-slate-700 mb-2">
            Change Status
          </label>
          <div class="relative">
            <select name="status" id="status"
              class="block w-full appearance-none rounded-xl border border-slate-300 bg-white py-2.5 pl-3 pr-10 text-sm text-slate-700 shadow-sm focus:border-violet-500 focus:ring focus:ring-violet-200 hover:border-slate-400 cursor-pointer"
              onchange="this.form.submit()">
              <option value="online" <?= $user['status'] === 'online' ? 'selected' : '' ?>>🟢 Online</option>
              <option value="offline" <?= $user['status'] === 'offline' ? 'selected' : '' ?>>⚪ Offline</option>
              <option value="dnd" <?= $user['status'] === 'dnd' ? 'selected' : '' ?>>🔴 Do Not Disturb</option>
              <option value="invisible" <?= $user['status'] === 'invisible' ? 'selected' : '' ?>>⚫ Invisible</option>
            </select>
            <!-- Icon dropdown -->
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400">
              ▼
            </div>
          </div>
        </form>

      <?php endif; ?>
        <!-- About Me -->
        <div class="mt-8 bg-slate-50 border border-slate-200 rounded-xl p-5 shadow-sm">
          <h2 class="text-sm font-semibold text-slate-600 uppercase tracking-wide">About Me</h2>
          <?php if (!empty($user['about_me'])): ?>
            <p class="mt-3 text-base text-slate-700 leading-relaxed">
              <?= nl2br(htmlspecialchars($user['about_me'])) ?>
            </p>
          <?php else: ?>
            <p class="mt-3 text-sm text-slate-500 italic">
              This user hasn’t written anything yet.
            </p>
          <?php endif; ?>
        </div>
    </div>
  </main>
</div>
