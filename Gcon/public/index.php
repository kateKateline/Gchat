<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gcon — Find Gaming Chat Servers</title>
    <meta name="description" content="Discover and join the best gaming chat servers. Gcon is the hub for game communities." />
    <link rel="canonical" href="https://gcon.app/" />
    <!-- Open Graph / Twitter -->
    <meta property="og:title" content="Gcon — Find Gaming Chat Servers" />
    <meta property="og:description" content="Discover and join the best gaming chat servers. Gcon is the hub for game communities." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://gcon.app/og-image.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@gcon" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Structured Data -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Gcon",
        "url": "https://gcon.app/",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https://gcon.app/search?q={query}",
          "query-input": "required name=query"
        }
      }
    </script>
    <style>
      /* Optional: subtle gradient backdrop tokens */
      .gcon-gradient { 
        background-image:
          radial-gradient(80rem 40rem at 20% -10%, rgba(139, 92, 246, .25), transparent),
          radial-gradient(70rem 40rem at 80% 0%, rgba(34, 211, 238, .20), transparent);
      }
    </style>
  </head>


  <body class="antialiased text-slate-900">
    <!-- navbar -->
  <?php include '../app/view/navbar.php'; ?>

    <main>
      <!-- hero -->
      <?php include '../app/view/hero.php';?>
      <!-- top-server -->
      <?php include '../app/view/card.php'; ?>
      <!-- Info -->
      <?php include '../app/view/info.php';?>
    </main>

      <!-- Footer -->
      <?php include '../app/view/footer.php';?>
  </body>
</html>