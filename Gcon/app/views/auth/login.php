
<main class="flex items-center justify-center px-4 py-12 min-h-[calc(100vh-4rem)]">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-2xl border border-slate-200/50 overflow-hidden">

            <!-- Flash Message -->
            <?php if (!empty($_SESSION['flash'])): ?>
                <div class="px-4 py-3 bg-red-100 border-b border-red-200 text-red-700 text-sm text-center">
                    <?= $_SESSION['flash']; unset($_SESSION['flash']); ?>
                </div>
            <?php endif; ?>

            <!-- Card Header -->
            <div class="px-4 pt-6 pb-2 text-center">
                <div class="mb-4">
                    <span class="text-5xl font-extrabold brand-text-gradient">Gcon</span>
                    <h1 id="cardTitle" class="text-2xl font-semibold text-slate-900 mb-2">Welcome</h1>
                    <p id="cardDescription" class="text-slate-600">Sign in to your account to continue</p>
                </div>
            </div>

            <!-- Card Content -->
            <div class="px-4 py-4">
                <form method="POST" action="/Gcon/public/index.php?page=auth&action=auth" class="space-y-3">

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                        <input name="email" id="email" type="email" required
                               class="w-full h-10 px-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-brand-violet">
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                        <input name="password" id="password" type="password" required
                               class="w-full h-10 px-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-brand-violet">
                    </div>

                    <button type="submit"
                            class="w-full h-10 brand-gradient text-white font-medium rounded-md shadow-lg hover:opacity-90 transition">
                        Sign In
                    </button>
                </form>
