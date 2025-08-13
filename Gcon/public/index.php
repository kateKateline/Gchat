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
    <!-- Navbar -->
<?php include '../app/view/navbar.php'; ?>

    <main>
      <!-- Hero -->
      <section class="relative isolate overflow-hidden">
        <div class="absolute inset-0 gcon-gradient"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
          <h1 class="text-4xl font-extrabold tracking-tight sm:text-6xl">
            Find and join gaming servers on Gcon
          </h1>
          <p class="mt-4 max-w-2xl text-lg text-slate-600">
            Discover active communities for your favorite titles. Chat, squad up, and level up together.
          </p>

          <!-- Search -->
          <form class="mt-8 flex max-w-2xl items-center gap-2" action="https://gcon.app/search" method="get">
            <div class="relative flex-1">
              <input
                type="search"
                name="q"
                placeholder="Search for games, genres, or server names"
                aria-label="Search servers"
                class="h-12 w-full rounded-md border border-slate-200 bg-white px-4 pr-10 text-slate-900 shadow-sm outline-none ring-0 placeholder:text-slate-400 focus:border-slate-300 focus:ring-2 focus:ring-violet-200"
                required
              />
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="pointer-events-none absolute right-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </div>
            <button type="submit" class="h-12 rounded-md bg-slate-900 px-5 font-medium text-white shadow-sm transition hover:bg-slate-800">
              Search
            </button>
          </form>

          <!-- Trending -->
          <div class="mt-6 flex flex-wrap items-center gap-2">
            <span class="mr-1 text-sm text-slate-600">Trending:</span>
            <a href="#" class="inline-flex items-center rounded-full border border-slate-200 px-3 py-1 text-xs text-slate-700">Valorant</a>
            <a href="#" class="inline-flex items-center rounded-full border border-slate-200 px-3 py-1 text-xs text-slate-700">Minecraft</a>
            <a href="#" class="inline-flex items-center rounded-full border border-slate-200 px-3 py-1 text-xs text-slate-700">Fortnite</a>
            <a href="#" class="inline-flex items-center rounded-full border border-slate-200 px-3 py-1 text-xs text-slate-700">GTA RP</a>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section id="features" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 md:py-24 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Built for gamers and communities</h2>
        <p class="mt-3 max-w-2xl text-slate-600">Everything you need to discover, join, and hang out with your crew.</p>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <article class="rounded-lg border border-slate-200 p-6 shadow-sm transition-transform duration-200 hover:-translate-y-0.5">
            <div class="text-slate-800">🎮</div>
            <h3 class="mt-4 text-xl font-semibold">Discover servers</h3>
            <p class="mt-2 text-slate-600">Powerful search and curated categories help you find the right fit fast.</p>
          </article>
          <article class="rounded-lg border border-slate-200 p-6 shadow-sm transition-transform duration-200 hover:-translate-y-0.5">
            <div class="text-slate-800">💬</div>
            <h3 class="mt-4 text-xl font-semibold">Crystal-clear chat</h3>
            <p class="mt-2 text-slate-600">Text, voice, and party channels built for seamless gaming.</p>
          </article>
          <article class="rounded-lg border border-slate-200 p-6 shadow-sm transition-transform duration-200 hover:-translate-y-0.5">
            <div class="text-slate-800">🛡️</div>
            <h3 class="mt-4 text-xl font-semibold">Safe & moderated</h3>
            <p class="mt-2 text-slate-600">Modern tools and controls keep your community welcoming.</p>
          </article>
        </div>
      </section>

      <!-- Placeholder sections -->
      <section id="communities" class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold">Communities</h2>
        <p class="mt-2 text-slate-600">Join featured communities and see what's trending.</p>
      </section>
      <section id="safety" class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold">Safety</h2>
        <p class="mt-2 text-slate-600">Learn about guidelines and moderation best practices.</p>
      </section>
      <section id="download" class="mx-auto max-w-7xl px-4 py-12 pb-20 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold">Download</h2>
        <p class="mt-2 text-slate-600">Apps for desktop and mobile coming soon.</p>
      </section>
    </main>

        <!-- Footer -->
    <footer class="relative border-t border-slate-200 bg-white">
      <div class="absolute inset-0 gcon-gradient-footer"></div>
      <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-4 md:grid-cols-2">
          
          <!-- Brand Column -->
          <div class="lg:col-span-1">
            <a href="#" aria-label="Gcon home" class="flex items-center mb-4">
              <span class="text-2xl font-extrabold bg-gradient-to-r from-violet-600 to-cyan-500 bg-clip-text text-transparent">Gcon</span>
            </a>
            <p class="text-slate-600 text-sm leading-relaxed mb-6">
              The ultimate platform for discovering and joining gaming communities. Connect with players, find your squad, and level up together.
            </p>
            
            <!-- Social Links -->
            <div class="flex items-center gap-4">
              <a href="#" aria-label="Discord" class="text-slate-400 hover:text-slate-600 transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z"/>
                </svg>
              </a>
              <a href="#" aria-label="Twitter" class="text-slate-400 hover:text-slate-600 transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
              </a>
              <a href="#" aria-label="YouTube" class="text-slate-400 hover:text-slate-600 transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              </a>
              <a href="#" aria-label="GitHub" class="text-slate-400 hover:text-slate-600 transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Product Column -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-4">Product</h3>
            <ul class="space-y-3 text-sm">
              <li><a href="#features" class="text-slate-600 hover:text-slate-900 transition-colors">Features</a></li>
              <li><a href="#explore" class="text-slate-600 hover:text-slate-900 transition-colors">Explore Servers</a></li>
              <li><a href="#communities" class="text-slate-600 hover:text-slate-900 transition-colors">Communities</a></li>
              <li><a href="#safety" class="text-slate-600 hover:text-slate-900 transition-colors">Safety Center</a></li>
              <li><a href="#moderation" class="text-slate-600 hover:text-slate-900 transition-colors">Moderation Tools</a></li>
              <li><a href="#api" class="text-slate-600 hover:text-slate-900 transition-colors">API</a></li>
            </ul>
          </div>

          <!-- Resources Column -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-4">Resources</h3>
            <ul class="space-y-3 text-sm">
              <li><a href="#download" class="text-slate-600 hover:text-slate-900 transition-colors">Download</a></li>
              <li><a href="#help" class="text-slate-600 hover:text-slate-900 transition-colors">Help Center</a></li>
              <li><a href="#guidelines" class="text-slate-600 hover:text-slate-900 transition-colors">Community Guidelines</a></li>
              <li><a href="#blog" class="text-slate-600 hover:text-slate-900 transition-colors">Blog</a></li>
              <li><a href="#developers" class="text-slate-600 hover:text-slate-900 transition-colors">Developers</a></li>
              <li><a href="#status" class="text-slate-600 hover:text-slate-900 transition-colors">System Status</a></li>
            </ul>
          </div>

          <!-- Company Column -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-4">Company</h3>
            <ul class="space-y-3 text-sm">
              <li><a href="#about" class="text-slate-600 hover:text-slate-900 transition-colors">About Us</a></li>
              <li><a href="#careers" class="text-slate-600 hover:text-slate-900 transition-colors">Careers</a></li>
              <li><a href="#press" class="text-slate-600 hover:text-slate-900 transition-colors">Press Kit</a></li>
              <li><a href="#contact" class="text-slate-600 hover:text-slate-900 transition-colors">Contact</a></li>
              <li><a href="#partnerships" class="text-slate-600 hover:text-slate-900 transition-colors">Partnerships</a></li>
              <li><a href="#investors" class="text-slate-600 hover:text-slate-900 transition-colors">Investors</a></li>
            </ul>
          </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-12 pt-8 border-t border-slate-200">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            
            <!-- Legal Links -->
            <div class="flex flex-wrap items-center gap-6 text-sm">
              <a href="#privacy" class="text-slate-600 hover:text-slate-900 transition-colors">Privacy Policy</a>
              <a href="#terms" class="text-slate-600 hover:text-slate-900 transition-colors">Terms of Service</a>
              <a href="#cookies" class="text-slate-600 hover:text-slate-900 transition-colors">Cookie Policy</a>
              <a href="#dmca" class="text-slate-600 hover:text-slate-900 transition-colors">DMCA</a>
            </div>

            <!-- Copyright -->
            <div class="text-sm text-slate-500">
              © 2024 Gcon. All rights reserved.
            </div>
          </div>

          <!-- Additional Info -->
          <div class="mt-6 pt-6 border-t border-slate-100">
            <p class="text-xs text-slate-500 leading-relaxed">
              Gcon is not affiliated with any game publishers or platforms. All game names, logos, and trademarks are property of their respective owners. 
              By using our service, you agree to our Terms of Service and acknowledge our Privacy Policy.
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>