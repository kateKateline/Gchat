<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $title ?? 'Gcon' ?></title>
  <meta name="description" content="<?= $description ?? '' ?>" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="../assets/js/loginScript"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased text-slate-900">

  <?php include __DIR__ . '/landing/navbar.php'; ?>

  <main>
    <?php include $content; ?>
  </main>

  <?php
  if (($title ?? '') !== "Sign in — Gcon" && ($title ?? '') !== "Sign Up — Gcon") {
      include __DIR__ . '/landing/footer.php';
  }
  ?>
</body>
</html>
