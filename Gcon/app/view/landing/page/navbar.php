<header class="sticky top-0 z-50 border-b bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60">
  <nav class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
    <!-- Left: Logo + Nav -->
    <div class="flex items-center gap-6">
      <a href="#" aria-label="Gcon home" class="flex items-center">
        <span class="text-2xl font-extrabold bg-gradient-to-r from-violet-600 to-cyan-500 bg-clip-text text-transparent">Gcon</span>
      </a>
      <div class="hidden md:flex items-center gap-6 text-sm">
        <a href="index.php?page=home" class="text-slate-600 hover:text-slate-900">Home</a>
        <a href="index.php?page=discover" class="text-slate-600 hover:text-slate-900">Discover</a>
        <a href="index.php?page=event" class="text-slate-600 hover:text-slate-900">Event</a>
        <a href="index.php?page=dev" class="text-slate-600 hover:text-slate-900">Developer</a>
      </div>
    </div>
    <!--Login-->

<div class="flex items-center gap-2">
  <?php if (isset($_SESSION['user_id'])): ?>
    <?php
      // Ambil dari session
      $avatarFile = $_SESSION['profile_image'] ?? null;
      $avatarUrl  = $avatarFile ? "../uploads/avatars/" . htmlspecialchars($avatarFile) : "../../../../assets/img/default.png";
    ?>
    
    <div class="flex items-center gap-2">
      <a href="index.php?page=unknown"><img
        src="<?php echo $avatarUrl; ?>"
        onerror="this.onerror=null; this.src='assets/img/default.png';"
        alt="avatar"
        class="w-8 h-8 rounded-full border"
      /></a>
      <a href="index.php?page=unknown">
      <span class="text-sm font-medium text-slate-700">
        <?php echo htmlspecialchars($_SESSION['username']); ?>
      </span>
      </a>

      <a href="index.php?page=logout">test</a>

  <?php else: ?>
    <a href="index.php?page=login"
       class="inline-flex h-9 items-center rounded-md border border-slate-200 px-4 text-sm font-medium text-slate-700 hover:bg-slate-50">
      Sign in
    </a>
    <a href="index.php?page=register"
       class="inline-flex h-9 items-center rounded-md bg-slate-900 px-4 text-sm font-medium text-white hover:bg-slate-800">
      Sign up
    </a>
  <?php endif; ?>
</div>


  </nav>
</header>