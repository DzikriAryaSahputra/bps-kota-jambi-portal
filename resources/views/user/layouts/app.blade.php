<!doctype html>
<html class="light" lang="id">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>@yield('title', 'SEMPOL') - BPS Kota Jambi</title>
  <meta name="description" content="@yield('description', 'Sistem Manajemen Portal BPS Kota Jambi')">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/bps.png') }}">
  <link rel="shortcut icon" href="{{ asset('assets/img/bps.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@700;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            background:                '#fbf9f8',
            'brand-dark':              '#002144',
            primary:                   '#00aeee',
            secondary:                 '#f7941d',
            tertiary:                  '#8cc63f',
            'outline-variant':         '#c3c6cf',
            'surface-container-lowest':'#ffffff',
            'surface-container-low':   '#f6f3f2',
            'surface-container-high':  '#eae8e7',
            'surface-container':       '#f0eded',
            'on-surface':              '#1b1c1c',
            'on-surface-variant':      '#43474e',
            outline:                   '#74777f',
            surface:                   '#f8f9fa',
          },
          fontFamily: {
            headline: ['Manrope', 'sans-serif'],
            body:     ['Inter', 'sans-serif'],
          },
        },
      },
    };
  </script>

  <style>
    .material-symbols-outlined {
      font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      display: inline-block;
      vertical-align: middle;
    }
    .nav-dropdown-menu {
      transform-origin: top center;
      transition: opacity 150ms ease, transform 150ms ease, visibility 150ms ease;
    }
    .group:hover .nav-dropdown-menu {
      opacity: 1;
      transform: translateY(0);
      visibility: visible;
    }
    .nav-dropdown-menu:not(.group:hover .nav-dropdown-menu) {
      opacity: 0;
      transform: translateY(-6px);
      visibility: hidden;
    }
  </style>

  @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-background text-on-surface font-body selection:bg-primary selection:text-white">

  {{-- ═══════════════════════════════ NAVBAR ═══════════════════════════════ --}}
  @php
    $currentRoute = request()->route()->getName();
    $currentMenuSlug = request()->route('menuSlug');
    $currentSubSlug  = request()->route('subSlug');
    $currentSlug     = request()->route('slug');
    $normalizeMenuName = fn ($name) => mb_strtolower(trim(preg_replace('/\s+/u', ' ', (string) $name)));

    $timKerjaMenus = $menus->filter(fn ($menu) => $normalizeMenuName($menu->name) === 'tim kerja')->values();
    $otherMenus = $menus
      ->filter(fn ($menu) => $normalizeMenuName($menu->name) !== 'tim kerja' && $normalizeMenuName($menu->name) !== 'lainnya')
      ->values();
    $lainnyaMenus = $menus->filter(fn ($menu) => $normalizeMenuName($menu->name) === 'lainnya')->values();
    $orderedMenus = $timKerjaMenus->concat($otherMenus)->concat($lainnyaMenus)->values();

    $timKerjaSubmenuOrder = collect([
      'Kepala',
      'Umum',
      'IPDS',
      'Nerwilis',
      'Distribusi & Harga',
      'KTI & PariwiQsata',
      'Kesra & Naker',
      'Hansos',
      'Pertanian',
      'Industri & Pek',
    ])->mapWithKeys(fn ($name, $index) => [$normalizeMenuName($name) => $index]);

    $getRenderableSubmenus = function ($menu) use ($normalizeMenuName, $timKerjaSubmenuOrder) {
      $submenus = $menu->sorted_submenus;

      if ($normalizeMenuName($menu->name) !== 'tim kerja') {
        return $submenus;
      }

      return $submenus
        ->sort(function ($a, $b) use ($normalizeMenuName, $timKerjaSubmenuOrder) {
          $aName = trim($a->name);
          $bName = trim($b->name);

          $aOrder = $timKerjaSubmenuOrder[$normalizeMenuName($aName)] ?? null;
          $bOrder = $timKerjaSubmenuOrder[$normalizeMenuName($bName)] ?? null;

          if (!is_null($aOrder) && !is_null($bOrder)) {
            return $aOrder <=> $bOrder;
          }

          if (!is_null($aOrder)) {
            return -1;
          }

          if (!is_null($bOrder)) {
            return 1;
          }

          return strnatcasecmp($aName, $bName);
        })
        ->values();
    };
  @endphp

  <header class="bg-gradient-to-r from-brand-dark to-brand-dark/95 shadow-2xl shadow-brand-dark/20 sticky top-0 z-50 w-full border-b border-white/5">
    <nav class="flex justify-between items-center w-full px-6 md:px-12 h-20">

      {{-- Brand --}}
      <div class="flex items-center gap-3 shrink-0">
        <a href="{{ route('home') }}" class="flex items-center gap-0 text-xl md:text-2xl font-bold tracking-tighter text-white uppercase font-headline hover:text-primary transition-colors">
          <img src="{{ asset('assets/img/icon.png') }}" alt="SEMPOL Icon" class="h-16 md:h-20 w-auto">
          SEMPOL
        </a>
      </div>

      {{-- Desktop Nav --}}
      <div class="hidden md:flex items-center gap-1 ml-auto">

        {{-- ★ HOME — selalu paling kiri --}}
        <a href="{{ route('home') }}"
           class="{{ $currentRoute === 'home'
             ? 'text-primary border-b-2 border-primary pb-1 font-bold font-body px-3 py-1 transition-all'
             : 'text-slate-300 hover:text-white font-body hover:bg-white/10 px-3 py-1 rounded transition-colors' }}">
          Home
        </a>

        {{-- Menu Dinamis dari DB (tengah) --}}
        @foreach($orderedMenus as $menu)
          @if($menu->type === 'dropdown' && $menu->sorted_submenus->isNotEmpty())
            @php
              $isMenuActive = $currentMenuSlug === $menu->slug;
              $renderableSubmenus = $getRenderableSubmenus($menu);
            @endphp
            <div class="relative group">
              <button type="button"
                      class="{{ $isMenuActive
                        ? 'text-primary border-b-2 border-primary pb-1 font-bold font-body px-3 py-1 flex items-center gap-0.5 transition-all'
                        : 'text-slate-300 hover:text-white font-body hover:bg-white/10 px-3 py-1 rounded flex items-center gap-0.5 transition-colors' }}">
                {{ $menu->name }}
                <span class="material-symbols-outlined text-lg transition-transform duration-300 group-hover:rotate-180">expand_more</span>
              </button>
              {{-- Dropdown --}}
              <div class="nav-dropdown-menu absolute left-0 mt-0 w-52 bg-white rounded-xl shadow-2xl border border-slate-100 overflow-hidden opacity-0 invisible max-h-[min(28rem,calc(100vh-7rem))] overflow-y-auto">
                <div class="py-1.5">
                  @foreach($renderableSubmenus as $sub)
                    <a href="{{ route('page.submenu', [$menu->slug, $sub->slug]) }}"
                       class="block px-5 py-3 text-sm font-medium transition-colors border-l-4
                          {{ ($currentMenuSlug === $menu->slug && $currentSubSlug === $sub->slug)
                            ? 'text-primary bg-primary/5 border-primary'
                            : 'text-slate-700 hover:bg-primary/8 hover:text-primary border-transparent hover:border-primary' }}">
                      {{ $sub->name }}
                    </a>
                  @endforeach
                </div>
              </div>
            </div>

          @elseif($menu->type === 'link' && $menu->url)
            <a href="{{ $menu->url }}" {{ $menu->new_tab ? 'target="_blank" rel="noreferrer"' : '' }}
               class="text-slate-300 hover:text-white font-body hover:bg-white/10 px-3 py-1 rounded transition-colors">
              {{ $menu->name }}
            </a>
          @endif
        @endforeach

        {{-- ★ KONTAK — selalu paling kanan --}}
        <a href="{{ route('kontak') }}"
           class="{{ $currentRoute === 'kontak'
             ? 'text-primary border-b-2 border-primary pb-1 font-bold font-body px-3 py-1 transition-all'
             : 'text-slate-300 hover:text-white font-body hover:bg-white/10 px-3 py-1 rounded transition-colors' }}">
          Kontak
        </a>

      </div>

      {{-- Hamburger (Mobile) --}}
      <div class="flex items-center md:hidden">
        <button id="hamburger-btn" class="p-2 text-white hover:bg-white/10 rounded-lg transition-colors focus:outline-none" type="button">
          <span class="material-symbols-outlined text-3xl" id="hamburger-icon">menu</span>
        </button>
      </div>
    </nav>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-brand-dark w-full border-t border-white/10 absolute left-0 top-20 shadow-2xl z-40 max-h-[calc(100vh-5rem)] overflow-y-auto overscroll-contain">
      <div class="flex flex-col px-6 py-5 space-y-1 min-h-fit">

        {{-- Home --}}
        <a href="{{ route('home') }}"
           class="{{ $currentRoute === 'home' ? 'text-primary font-bold' : 'text-slate-300 hover:text-white' }} font-body py-2 transition-colors">
          Home
        </a>

        {{-- Menus --}}
        @foreach($orderedMenus as $menu)
          @if($menu->type === 'dropdown' && $menu->sorted_submenus->isNotEmpty())
            @php
              $isMenuExpanded = $currentMenuSlug === $menu->slug;
              $renderableSubmenus = $getRenderableSubmenus($menu);
            @endphp
            <div class="pt-1 border-t border-white/5 first:border-t-0 first:pt-0">
              <button type="button"
                      class="mobile-submenu-toggle w-full flex items-center justify-between py-2 text-left {{ $isMenuExpanded ? 'text-primary' : 'text-slate-300 hover:text-white' }} transition-colors"
                      data-target="mobile-submenu-{{ $menu->id }}"
                      aria-expanded="{{ $isMenuExpanded ? 'true' : 'false' }}">
                <span class="text-xs font-bold uppercase tracking-wider">{{ $menu->name }}</span>
                <span class="material-symbols-outlined text-lg transition-transform duration-300 {{ $isMenuExpanded ? 'rotate-180' : '' }}">expand_more</span>
              </button>

              <div id="mobile-submenu-{{ $menu->id }}" class="mt-1 space-y-1 {{ $isMenuExpanded ? '' : 'hidden' }}">
                @foreach($renderableSubmenus as $sub)
                  <a href="{{ route('page.submenu', [$menu->slug, $sub->slug]) }}"
                     class="block pl-3 py-2 text-sm rounded-lg
                        {{ ($currentMenuSlug === $menu->slug && $currentSubSlug === $sub->slug)
                         ? 'text-primary font-bold bg-white/5' : 'text-slate-300 hover:text-white hover:bg-white/5' }} transition-colors">
                    {{ $sub->name }}
                  </a>
                @endforeach
              </div>
            </div>
          @elseif($menu->type === 'link' && $menu->url)
            <a href="{{ $menu->url }}" {{ $menu->new_tab ? 'target="_blank" rel="noreferrer"' : '' }}
               class="text-slate-300 hover:text-white font-body py-2 transition-colors">
              {{ $menu->name }}
            </a>
          @endif
        @endforeach

        {{-- Kontak --}}
        <a href="{{ route('kontak') }}"
           class="{{ $currentRoute === 'kontak' ? 'text-primary font-bold' : 'text-slate-300 hover:text-white' }} font-body py-2 transition-colors border-t border-white/10 mt-2 pt-3">
          Kontak
        </a>

      </div>
    </div>
  </header>
  {{-- ══════════════════════════════════════════════════════════════════════ --}}

  <main class="flex-1">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="bg-brand-dark text-slate-400 py-8 px-6 md:px-12 text-center border-t border-white/5">
    <p class="text-xs tracking-wider uppercase font-semibold">
      © {{ date('Y') }} Badan Pusat Statistik Kota Jambi
    </p>
  </footer>

  {{-- Hamburger Script --}}
  <script>
    const btn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('hamburger-icon');
    if (btn && menu && icon) {
      btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        icon.textContent = menu.classList.contains('hidden') ? 'menu' : 'close';
      });
    }

    document.querySelectorAll('.mobile-submenu-toggle').forEach((toggle) => {
      toggle.addEventListener('click', () => {
        const targetId = toggle.dataset.target;
        const target = document.getElementById(targetId);
        const icon = toggle.querySelector('.material-symbols-outlined');

        if (!target || !icon) return;

        const isHidden = target.classList.contains('hidden');

        target.classList.toggle('hidden');
        toggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
        icon.classList.toggle('rotate-180', isHidden);
      });
    });
  </script>

  @stack('scripts')
</body>
</html>
