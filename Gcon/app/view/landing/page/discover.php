  <script src="../assets/js/loginScript"></script>
  <script src="https://cdn.tailwindcss.com"></script>

<section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mb-8">
        <h2 class="text-3xl font-bold tracking-tight text-slate-900">Discover Servers</h2>
        <p class="mt-2 text-slate-600">Explore and join the most active communities</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($servers as $server): ?>
            <div class="group relative overflow-hidden rounded-lg border border-slate-200 bg-white card-shadow transition-smooth hover:card-shadow-hover hover:-translate-y-0.5">
                <div class="relative h-32 overflow-hidden">
                    <div class="h-full w-full gaming-gradient"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-3 right-3 rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-slate-700 backdrop-blur-sm">
                        <?= htmlspecialchars($server['owner']) ?>
                    </div>
                </div>

                <div class="p-4">
                    <div class="flex items-start gap-3 mb-3">
                        <div class="relative">
                            <?php if ($server['icon']): ?>
                                <img src="<?= htmlspecialchars($server['icon']) ?>" alt="Server Icon" 
                                     class="h-12 w-12 rounded-full border-2 border-slate-200 object-cover">
                            <?php else: ?>
                                <div class="h-12 w-12 rounded-full border-2 border-slate-200 gaming-gradient flex items-center justify-center">
                                    <span class="text-black font-bold text-sm"><?= strtoupper(substr($server['name'],0,2)) ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="absolute -bottom-1 -right-1 h-4 w-4 rounded-full bg-green-500 border-2 border-white"></div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-slate-900 truncate group-hover:text-gaming-primary transition-colors">
                                <?= htmlspecialchars($server['name']) ?>
                            </h3>
                            <p class="text-sm text-slate-600 line-clamp-2 leading-relaxed">
                                <?= htmlspecialchars(substr($server['description'],0,100)) ?>...
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4 text-sm text-slate-500">
                            <div class="flex items-center gap-1.5">
                                <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 21H3v-1a6 6 0 0112 0v1zM17 8a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <span class="font-medium text-slate-700"><?= $server['member_count'] ?></span>
                                <span>members</span>
                            </div>
                        </div>
                        
                        <a href="index.php?page=server&id=<?= $server['id'] ?>" 
                           class="inline-flex items-center gap-1.5 rounded-md gaming-gradient px-3 py-1.5 text-xs font-medium text-white transition-colors hover:opacity-90">
                            <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            View
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
