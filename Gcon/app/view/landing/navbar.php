<header class="sticky top-0 z-50 border-b bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60">
  <nav class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
    <!-- Left: Logo + Nav -->
    <div class="flex items-center gap-6">
      <a href="#" aria-label="Gcon home" class="flex items-center">
        <span class="text-2xl font-extrabold bg-gradient-to-r from-violet-600 to-cyan-500 bg-clip-text text-transparent">Gcon</span>
      </a>
      <div class="hidden md:flex items-center gap-6 text-sm">
        <a href="#features" class="text-slate-600 hover:text-slate-900">Explore</a>
        <a href="#communities" class="text-slate-600 hover:text-slate-900">Communities</a>
        <a href="#safety" class="text-slate-600 hover:text-slate-900">Safety</a>
        <a href="#download" class="text-slate-600 hover:text-slate-900">Download</a>
      </div>
    </div>
    <!--Login-->
    <!-- Right: Auth -->
    <div class="flex items-center gap-2">
      <!-- Sign In ke loginController -->
      <a href="index.php?page=login" 
         class="inline-flex h-9 items-center rounded-md border border-slate-200 px-4 text-sm font-medium text-slate-700 hover:bg-slate-50">
        Sign in
      </a>
      <!-- Sign Up bisa nanti diarahkan ke registerController -->
      <a href="index.php?page=register" 
         class="inline-flex h-9 items-center rounded-md bg-slate-900 px-4 text-sm font-medium text-white hover:bg-slate-800">
        Sign up
      </a>
    </div>
  </nav>
</header>