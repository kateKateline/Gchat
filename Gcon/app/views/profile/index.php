<div class="max-w-lg mx-auto bg-white shadow rounded-lg p-6">
    <div class="flex items-center gap-4">
        <?php 
            $avatarFile = $user['profile_image'] ?? null;
            $avatarUrl  = $avatarFile ? "uploads/profile_image/" . htmlspecialchars($avatarFile) : "assets/img/default.png";
        ?>
        <img src="<?= $avatarUrl ?>" 
             alt="avatar"
             class="w-16 h-16 rounded-full border" 
             onerror="this.onerror=null;this.src='assets/img/default.png';">

        <div>
            <h2 class="text-xl font-bold text-slate-800"><?= htmlspecialchars($user['username']) ?></h2>
            <p class="text-slate-600"><?= htmlspecialchars($user['email']) ?></p>
            <p class="text-sm text-slate-500">Role: <?= htmlspecialchars($user['role']) ?></p>
        </div>
    </div>
</div>
