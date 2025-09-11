<div class="max-w-4xl mx-auto space-y-8">
  <!-- Preview Akun -->
  <div class="bg-white rounded-xl shadow p-6">
    <h2 class="text-lg font-semibold text-gray-900 mb-4">Account Overview</h2>
    <div class="flex items-center gap-6">
      <img src="uploads/profile_image/<?= htmlspecialchars($user['profile_image'] ?? 'default.png') ?>" 
           alt="Avatar" class="w-20 h-20 rounded-full object-cover shadow">
      <div class="flex-1 space-y-4">
        <!-- Username -->
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-500">Username</p>
            <p class="text-base font-medium text-gray-900"><?= htmlspecialchars($user['username']) ?></p>
          </div>
          <button class="px-4 py-1.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-sm text-gray-700">Edit</button>
        </div>
        <!-- Email -->
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="text-base font-medium text-gray-900">
              <?= htmlspecialchars(substr($user['email'],0,3)) ?>********@gmail.com
            </p>
          </div>
          <button class="px-4 py-1.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-sm text-gray-700">Edit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Danger Zone -->
  <div class="bg-white rounded-xl shadow p-6 border border-red-200 space-y-4">
    <h2 class="text-lg font-semibold text-red-600">Danger Zone</h2>

    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
      <div>
        <p class="font-medium text-gray-900">Change Password</p>
        <p class="text-sm text-gray-500">Update your account password.</p>
      </div>
      <a href="index.php?page=profile&tab=password" 
         class="px-4 py-2 text-sm rounded-lg bg-yellow-500 text-white hover:bg-yellow-600">
        Change
      </a>
    </div>

    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
      <div>
        <p class="font-medium text-gray-900">Disable Account</p>
        <p class="text-sm text-gray-500">Temporarily disable your account.</p>
      </div>
      <button class="px-4 py-2 text-sm rounded-lg bg-gray-600 text-white hover:bg-gray-700">
        Disable
      </button>
    </div>

    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
      <div>
        <p class="font-medium text-gray-900">Delete Account</p>
        <p class="text-sm text-gray-500">Permanently delete your account.</p>
      </div>
      <button class="px-4 py-2 text-sm rounded-lg bg-red-600 text-white hover:bg-red-700">
        Delete
      </button>
    </div>
  </div>
</div>
