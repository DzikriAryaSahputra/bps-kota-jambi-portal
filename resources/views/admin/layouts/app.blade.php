<!doctype html>
<html class="light" lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'SEMPOL Admin') - BPS Kota Jambi</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/bps.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/bps.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Manrope:wght@700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-primary-fixed": "#001c3a",
              "on-tertiary-fixed": "#2c1600",
              "secondary-fixed": "#a1efff",
              "on-secondary-fixed": "#001f25",
              tertiary: "#0d0400",
              primary: "#000613",
              "on-background": "#191c1d",
              "on-secondary-container": "#006573",
              "on-secondary-fixed-variant": "#004e59",
              "inverse-primary": "#afc8f0",
              "on-tertiary-fixed-variant": "#693c00",
              "on-error-container": "#93000a",
              "surface-container-lowest": "#ffffff",
              "surface-variant": "#e1e3e4",
              "inverse-on-surface": "#f0f1f2",
              "on-surface-variant": "#43474e",
              "error-container": "#ffdad6",
              surface: "#f8f9fa",
              "on-primary-container": "#6f88ad",
              error: "#ba1a1a",
              "surface-container-highest": "#e1e3e4",
              outline: "#74777f",
              "secondary-fixed-dim": "#44d8f1",
              "on-primary": "#ffffff",
              "surface-dim": "#d9dadb",
              "primary-fixed": "#d4e3ff",
              "primary-fixed-dim": "#afc8f0",
              "surface-container-low": "#f3f4f5",
              "on-error": "#ffffff",
              "primary-container": "#001f3f",
              "outline-variant": "#c4c6cf",
              "surface-container-high": "#e7e8e9",
              "surface-bright": "#f8f9fa",
              "on-primary-fixed-variant": "#2f486a",
              "on-tertiary-container": "#c37300",
              "on-secondary": "#ffffff",
              "inverse-surface": "#2e3132",
              background: "#f8f9fa",
              "tertiary-container": "#311900",
              "tertiary-fixed-dim": "#ffb870",
              "secondary-container": "#58e6ff",
              "surface-container": "#edeeef",
              "tertiary-fixed": "#ffdcbe",
              secondary: "#006876",
              "on-surface": "#191c1d",
              "on-tertiary": "#ffffff",
              "surface-tint": "#476083",
            },
            fontFamily: {
              headline: ["Inter"],
              body: ["Inter"],
              label: ["Inter"],
            },
          },
        },
      };
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
    <style>
      .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
        display: inline-block;
        vertical-align: middle;
      }
      .cubic-bezier-transition {
        transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
      }
    </style>

    @stack('styles')
  </head>
  <body class="bg-[#f8f9fa] font-body text-on-surface overflow-x-hidden">

    {{-- Mobile Overlay --}}
    <div class="fixed inset-0 bg-black/50 z-[45] opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden" id="drawer-overlay"></div>

    {{-- Sidebar --}}
    <aside class="fixed left-0 top-0 h-screen w-64 bg-[#001f3f] dark:bg-[#000613] text-white flex flex-col p-4 gap-2 shadow-[12px_0_32px_-4px_rgba(0,31,63,0.06)] z-50 -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out" id="mobile-drawer">
      <div class="flex items-center justify-between mb-8 px-2 lg:block">
        <div class="flex flex-col">
          <div class="flex items-center gap-0">
            <img src="{{ asset('assets/img/icon.png') }}" class="h-16 md:h-20 w-auto" alt="SEMPOL Icon">
            <h1 class="text-2xl font-black tracking-tighter italic text-white leading-tight">SEMPOL</h1>
          </div>
          <p class="text-xs text-slate-300 tracking-widest uppercase mt-1">BPS Kota Jambi</p>
        </div>
        <button class="lg:hidden w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/10" id="close-drawer" type="button">
          <span class="material-symbols-outlined text-xl">close</span>
        </button>
      </div>

      @php
        $navItems = [
          'dashboard'    => ['label' => 'Dashboard',              'href' => route('admin.dashboard'),         'icon' => 'dashboard'],
          'menus'        => ['label' => 'Kelola Menu',            'href' => route('admin.menu.index'),        'icon' => 'menu'],
          'submenus'     => ['label' => 'Kelola Submenu',         'href' => route('admin.submenu.index'),     'icon' => 'segment'],
          'custom-pages' => ['label' => 'Kelola Halaman Custom',  'href' => route('admin.custom-page.index'), 'icon' => 'dashboard_customize'],
        ];
        $activeNav = $activeNav ?? 'dashboard';
      @endphp

      <nav class="flex-1 flex flex-col gap-1">
        @foreach($navItems as $key => $item)
          @php $isActive = $activeNav === $key; @endphp
          <a class="{{ $isActive
              ? 'bg-[#001730] text-white rounded-lg shadow-inner px-4 py-3 flex items-center gap-3 cubic-bezier-transition group'
              : 'text-slate-300/70 hover:text-white px-4 py-3 flex items-center gap-3 hover:bg-white/5 transition-all duration-200 rounded-lg group' }}"
             href="{{ $item['href'] }}">
            <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
            <span class="font-['Inter'] text-sm tracking-normal font-medium">{{ $item['label'] }}</span>
          </a>
        @endforeach
      </nav>

    </aside>

    {{-- Main Content --}}
    <main class="lg:ml-64 min-h-screen flex flex-col transition-all duration-300">

      {{-- Topbar --}}
      <header class="sticky top-0 z-40 bg-white border-b border-outline-variant/30 px-4 lg:px-8 py-3 lg:py-4 flex justify-between items-center w-full shadow-sm">
        <div class="flex items-center gap-3">
          <button class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-[#f3f4f5] text-[#001f3f]" id="open-drawer" type="button">
            <span class="material-symbols-outlined">menu</span>
          </button>
          <h2 class="font-['Inter'] tracking-tight font-medium text-base lg:text-lg text-[#001f3f] truncate">
            @yield('page-title', 'Dashboard')
          </h2>
        </div>
        <div class="relative" id="admin-profile-dropdown">
          <button aria-expanded="false" aria-haspopup="true" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#f3f4f5] transition-colors duration-200 text-[#43474e] border border-transparent hover:border-outline-variant/50" id="admin-profile-toggle" type="button">
            <span class="material-symbols-outlined">account_circle</span>
          </button>
          <div class="absolute right-0 top-full mt-2 w-48 bg-white rounded-xl shadow-xl border border-outline-variant/20 py-2 z-10 hidden" id="admin-profile-menu">
            <div class="px-4 py-2 border-b border-outline-variant/10 mb-1">
              <p class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Administrator</p>
              <p class="text-[11px] text-on-surface-variant/70 truncate">BPS Kota Jambi</p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-error hover:bg-error-container/10 transition-colors">
                <span class="material-symbols-outlined text-sm">logout</span>
                <span class="font-medium">Logout</span>
              </button>
            </form>
          </div>
        </div>
      </header>

      {{-- Page Content --}}
      <div class="px-4 lg:px-8 py-6 lg:py-8 flex flex-col gap-6 lg:gap-8 max-w-7xl mx-auto w-full flex-1">

        {{-- Flash Messages --}}
        @if(session('success'))
          <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700 flex items-center gap-2">
            <span class="material-symbols-outlined text-base">check_circle</span>
            {{ session('success') }}
          </div>
        @endif
        @if(session('error'))
          <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-medium text-red-700 flex items-center gap-2">
            <span class="material-symbols-outlined text-base">error</span>
            {{ session('error') }}
          </div>
        @endif

        @if($errors->any())
          <div class="rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
            <div class="flex items-start gap-2">
              <span class="material-symbols-outlined text-base mt-0.5">warning</span>
              <div class="space-y-2">
                <p class="font-semibold">Proses tidak berhasil. Periksa input berikut:</p>
                <ul class="list-disc space-y-1 pl-5">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        @endif

        @yield('content')
      </div>

      {{-- Footer --}}
      <footer class="mt-auto border-t border-outline-variant/30 px-4 lg:px-8 py-6 flex justify-center items-center text-center text-[10px] lg:text-[11px] text-on-surface-variant/70 bg-white/50 backdrop-blur-sm">
        <span>© {{ date('Y') }} Badan Pusat Statistik Kota Jambi. Seluruh hak cipta dilindungi.</span>
      </footer>
    </main>

    {{-- Sidebar JS --}}
    <script>
      const drawer = document.getElementById('mobile-drawer');
      const overlay = document.getElementById('drawer-overlay');
      const openBtn = document.getElementById('open-drawer');
      const closeBtn = document.getElementById('close-drawer');

      const toggleDrawer = () => {
        if (!drawer || !overlay) return;
        drawer.classList.toggle('-translate-x-full');
        drawer.classList.toggle('translate-x-0');
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('pointer-events-none');
      };

      if (openBtn) openBtn.addEventListener('click', toggleDrawer);
      if (closeBtn) closeBtn.addEventListener('click', toggleDrawer);
      if (overlay) overlay.addEventListener('click', toggleDrawer);

      const profileDropdown = document.getElementById('admin-profile-dropdown');
      const profileToggle = document.getElementById('admin-profile-toggle');
      const profileMenu = document.getElementById('admin-profile-menu');

      const closeProfileMenu = () => {
        if (!profileToggle || !profileMenu) return;
        profileMenu.classList.add('hidden');
        profileToggle.setAttribute('aria-expanded', 'false');
      };

      const openProfileMenu = () => {
        if (!profileToggle || !profileMenu) return;
        profileMenu.classList.remove('hidden');
        profileToggle.setAttribute('aria-expanded', 'true');
      };

      if (profileDropdown && profileToggle && profileMenu) {
        profileToggle.addEventListener('click', (event) => {
          event.stopPropagation();

          if (profileMenu.classList.contains('hidden')) {
            openProfileMenu();
            return;
          }

          closeProfileMenu();
        });

        profileMenu.addEventListener('click', (event) => {
          event.stopPropagation();
        });

        document.addEventListener('click', (event) => {
          if (!profileDropdown.contains(event.target)) {
            closeProfileMenu();
          }
        });

        document.addEventListener('keydown', (event) => {
          if (event.key === 'Escape') {
            closeProfileMenu();
          }
        });
      }
    </script>

    <script defer src="{{ asset('assets/js/admin.js') }}"></script>
    @stack('scripts')
  </body>
</html>
