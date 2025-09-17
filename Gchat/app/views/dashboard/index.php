
<?php
$stats = $stats ?? ['totalServers'=>0,'totalMembers'=>0,'onlineServers'=>0,'avgUptime'=>0];
function badgeClass($s){
    if ($s==='online') return 'text-green-700 bg-green-50 ring-1 ring-green-200';
    if ($s==='offline') return 'text-red-700 bg-red-50 ring-1 ring-red-200';
    if ($s==='maintenance') return 'text-amber-700 bg-amber-50 ring-1 ring-amber-200';
    return 'text-slate-700 bg-slate-50 ring-1 ring-slate-200';
}
?>
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-slate-900">Server Dashboard</h1>
        <p class="text-slate-600">Manage and monitor your server infrastructure</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-slate-200/60 rounded-xl p-4">
            <div class="text-sm text-slate-500">Total Servers</div>
            <div class="text-2xl font-semibold mt-1"><?= number_format($stats['totalServers']) ?></div>
        </div>
        <div class="bg-white border border-slate-200/60 rounded-xl p-4">
            <div class="text-sm text-slate-500">Total Members</div>
            <div class="text-2xl font-semibold mt-1"><?= number_format($stats['totalMembers']) ?></div>
        </div>
        <div class="bg-white border border-slate-200/60 rounded-xl p-4">
            <div class="text-sm text-slate-500">Online Servers</div>
            <div class="text-2xl font-semibold mt-1"><?= number_format($stats['onlineServers']) ?></div>
        </div>
        <div class="bg-white border border-slate-200/60 rounded-xl p-4">
            <div class="text-sm text-slate-500">Avg Uptime</div>
            <div class="text-2xl font-semibold mt-1"><?= number_format($stats['avgUptime'],1) ?>%</div>
        </div>
    </div>

    <div class="flex items-center gap-3 mb-5">
        <form action="/Gchat/public/index.php" method="GET" class="flex-1">
            <input type="hidden" name="page" value="dashboard">
            <div class="relative">
                <input type="text" name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Search servers..."
                       class="w-full h-11 px-4 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-violet-300">
            </div>
        </form>
        <a href="/Gchat/public/index.php?page=servers&action=create"
           class="h-11 px-4 inline-flex items-center justify-center rounded-xl text-white font-medium shadow-lg brand-gradient">
           + Add Server
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($servers as $s): ?>
            <div class="bg-white border border-slate-200/60 rounded-xl p-4">
                <div class="flex items-start justify-between">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-xl bg-slate-100 overflow-hidden flex items-center justify-center">
                            <?php if (!empty($s['icon'])): ?>
                                <img src="/Gchat/public/uploads/icon_server/<?= htmlspecialchars($s['icon']) ?>" alt="" class="h-10 w-10 object-cover">
                            <?php else: ?>
                                <span class="text-lg">🌩️</span>
                            <?php endif; ?>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h3 class="font-semibold text-slate-900"><?= htmlspecialchars($s['name']) ?></h3>
                                <span class="text-xs px-2 py-0.5 rounded-full <?= badgeClass($s['status'] ?? '') ?>">
                                    <?= ucfirst($s['status'] ?? 'unknown') ?>
                                </span>
                            </div>
                            <div class="text-sm text-slate-500"><?= htmlspecialchars($s['title'] ?? '') ?></div>
                        </div>
                    </div>
                    <button class="h-8 w-8 rounded-lg hover:bg-slate-50">⋮</button>
                </div>

                <p class="text-sm text-slate-600 mt-3 line-clamp-2"><?= htmlspecialchars($s['description'] ?? '') ?></p>

                <div class="grid grid-cols-3 gap-3 mt-4 text-sm">
                    <div class="p-3 rounded-lg bg-slate-50">
                        <div class="text-slate-500">Owner</div>
                        <div class="font-medium"><?= htmlspecialchars($s['owner_name'] ?? '—') ?></div>
                    </div>
                    <div class="p-3 rounded-lg bg-slate-50">
                        <div class="text-slate-500">Members</div>
                        <div class="font-medium"><?= number_format((int)($s['members'] ?? 0)) ?></div>
                    </div>
                    <div class="p-3 rounded-lg bg-slate-50">
                        <div class="text-slate-500">Uptime</div>
                        <div class="font-medium">
                            <?= isset($s['uptime_30d']) ? number_format($s['uptime_30d'],1).'%' : '—' ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($servers)): ?>
            <div class="col-span-full text-center text-slate-500 py-16 border border-dashed rounded-xl">
                No servers found
            </div>
        <?php endif; ?>
    </div>
</div>
