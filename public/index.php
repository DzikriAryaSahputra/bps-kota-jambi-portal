<!doctype html>

<html class="light" lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SIMPADU BPS Kota Jambi | Sovereign Data Architect</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Icons -->
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              background: "#fbf9f8",
              "outline-variant": "#c3c6cf",
              "on-error-container": "#93000a",
              "on-error": "#ffffff",
              "tertiary-container": "#473300",
              "on-secondary-container": "#255783",
              "on-tertiary-fixed": "#261a00",
              "on-surface-variant": "#43474e",
              "primary-fixed": "#d4e3ff",
              "primary-fixed-dim": "#aac8f8",
              "secondary-fixed-dim": "#9dcafd",
              "surface-container-low": "#f6f3f2",
              tertiary: "#2c1f00",
              outline: "#74777f",
              secondary: "#31618e",
              "surface-container-highest": "#e4e2e1",
              "on-secondary-fixed-variant": "#124975",
              "on-primary-fixed-variant": "#294870",
              "surface-variant": "#e4e2e1",
              "tertiary-fixed": "#ffdf9e",
              "on-secondary-fixed": "#001d34",
              "secondary-fixed": "#d0e4ff",
              primary: "#002144",
              error: "#ba1a1a",
              "primary-container": "#16375f",
              "surface-container-lowest": "#ffffff",
              "on-primary": "#ffffff",
              "inverse-on-surface": "#f3f0f0",
              "inverse-primary": "#aac8f8",
              "on-surface": "#1b1c1c",
              "surface-dim": "#dcd9d9",
              "surface-container-high": "#eae8e7",
              "on-tertiary": "#ffffff",
              "error-container": "#ffdad6",
              "on-primary-fixed": "#001c3a",
              "tertiary-fixed-dim": "#fabd00",
              "surface-container": "#f0eded",
              "surface-bright": "#fbf9f8",
              "on-tertiary-fixed-variant": "#5b4300",
              "surface-tint": "#425f8a",
              surface: "#fbf9f8",
              "on-secondary": "#ffffff",
              "secondary-container": "#a0cdff",
              "inverse-surface": "#303030",
              "on-tertiary-container": "#c99700",
              "on-background": "#1b1c1c",
              "on-primary-container": "#84a1cf",
            },
            fontFamily: {
              headline: ["Manrope"],
              body: ["Inter"],
              label: ["Inter"],
            },
            borderRadius: {
              DEFAULT: "0.125rem",
              lg: "0.25rem",
              xl: "0.5rem",
              full: "0.75rem",
            },
          },
        },
      };
    </script>
    <style>
      .material-symbols-outlined {
        font-variation-settings:
          "FILL" 0,
          "wght" 400,
          "GRAD" 0,
          "opsz" 24;
        vertical-align: middle;
      }
      .circuit-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg stroke='%23fabd00' stroke-width='0.5' stroke-opacity='0.15'%3E%3Cpath d='M50 0H20c-4.418 0-8 3.582-8 8v64c0 4.418 3.582 8 8 8h40c4.418 0 8-3.582 8-8V18L50 0z'/%3E%3Cpath d='M50 0v18h18M30 30h20M30 40h20M30 50h10'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }
      .glass-panel {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.05);
      }
    </style>
  </head>
  <body
    class="bg-background text-on-surface font-body selection:bg-tertiary-fixed-dim selection:text-primary"
  >
    <!-- TopNavBar -->
    <nav
      class="bg-gradient-to-r from-[#002144] to-[#31618e] shadow-2xl shadow-blue-900/20 full-width top-0 sticky z-50 flex justify-between items-center w-full px-12 h-20 max-w-none mx-auto"
    >
      <div class="flex items-center gap-4">
        <span
          class="text-2xl font-bold tracking-tighter text-white uppercase font-headline"
          >SIMPADU BPS Kota Jambi</span
        >
      </div>
      <div class="hidden md:flex items-center space-x-8">
        <a
          class="text-[#fabd00] border-b-2 border-[#fabd00] pb-1 font-bold font-body transition-all"
          href="#"
          >Home</a
        >
        <a
          class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded"
          href="#"
          >Tim Kerja</a
        >
        <a
          class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded"
          href="#"
          >Rumah Perubahan</a
        >
        <a
          class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded"
          href="#"
          >Lainnya</a
        >
        <a
          class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded"
          href="#"
          >Bantuan</a
        >
      </div>
      <div class="flex items-center gap-4">
        <button
          class="flex items-center gap-2 p-1 pl-3 text-white hover:bg-white/10 rounded-full transition-all scale-95 active:scale-90 border border-white/10"
        >
          <span class="text-xs font-medium font-body">Login</span>
          <span
            class="material-symbols-outlined text-3xl"
            data-icon="account_circle"
            >account_circle</span
          >
        </button>
      </div>
    </nav>
    <main>
      <!-- Hero Section -->
      <section
        class="relative min-h-[870px] flex items-center bg-primary overflow-hidden"
      >
        <!-- Background Elements -->
        <div class="absolute inset-0 circuit-pattern opacity-40"></div>
        <div
          class="absolute inset-0 bg-gradient-to-br from-primary/90 via-primary to-secondary/40"
        ></div>
        <div
          class="absolute top-1/4 -right-20 w-96 h-96 bg-tertiary-fixed-dim/10 rounded-full blur-[120px]"
        ></div>
        <div class="container mx-auto px-12 relative z-10">
          <div class="max-w-4xl">
            <div
              class="mb-6 inline-flex items-center gap-2 bg-tertiary-fixed-dim/10 px-4 py-2 rounded-full border border-tertiary-fixed-dim/20"
            >
              <span
                class="w-2 h-2 rounded-full bg-tertiary-fixed-dim animate-pulse"
              ></span>
              <span
                class="text-tertiary-fixed-dim text-xs font-bold tracking-widest uppercase"
                >Official Management System</span
              >
            </div>
            <h1
              class="text-white font-headline text-7xl md:text-8xl font-extrabold tracking-tighter mb-4 leading-none"
            >
              SIMPADU
            </h1>
            <p
              class="text-on-primary-container font-headline text-2xl md:text-3xl font-light tracking-tight mb-12 max-w-2xl"
            >
              SISTEM MANAJEMEN TERPADU
              <span class="text-tertiary-fixed-dim font-bold"
                >BPS KABUPATEN KOTA JAMBI</span
              >
            </p>
            <div class="flex flex-wrap">
              <button
                class="px-8 py-4 bg-gradient-to-r from-primary-container to-secondary text-white font-bold rounded-lg shadow-xl shadow-primary/40 hover:scale-105 transition-transform flex items-center gap-3"
              >
                Mulai Eksplorasi
                <span
                  class="material-symbols-outlined"
                  data-icon="arrow_forward"
                  >arrow_forward</span
                >
            </div>
          </div>
        </div>
        <!-- Floating Data Card -->
        <div
          class="hidden lg:block absolute bottom-0 right-12 translate-y-1/2 w-[400px]"
        >
          <div class="glass-panel p-8 rounded-xl shadow-2xl">
            <div class="flex justify-between items-start mb-6">
              <h3 class="text-white font-bold text-xl font-headline">
                Statistik Terkini
              </h3>
              <span
                class="text-tertiary-fixed-dim material-symbols-outlined"
                data-icon="insights"
                >insights</span
              >
            </div>
            <div class="space-y-6">
              <div class="flex items-center justify-between">
                <span class="text-slate-400 text-sm">Integritas Data</span>
                <span class="text-[#fabd00] font-bold">99.8%</span>
              </div>
              <div
                class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden"
              >
                <div
                  class="bg-[#fabd00] h-full w-[99.8%] shadow-[0_0_10px_#fabd00]"
                ></div>
              </div>
              <div class="grid grid-cols-2 gap-4 pt-2">
                <div>
                  <p
                    class="text-slate-400 text-xs uppercase tracking-wider mb-1"
                  >
                    Total Entri
                  </p>
                  <p class="text-white font-bold text-2xl">12.4k</p>
                </div>
                <div>
                  <p
                    class="text-slate-400 text-xs uppercase tracking-wider mb-1"
                  >
                    Wilayah
                  </p>
                  <p class="text-white font-bold text-2xl">24 Distrik</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Grid (Bento Style) -->
      <section class="py-32 px-12 bg-surface">
        <div class="container mx-auto">
          <div class="flex justify-between items-end mb-16">
            <div class="max-w-2xl">
              <h2
                class="text-primary font-headline text-4xl md:text-5xl font-extrabold tracking-tight mb-4"
              >
                Pilar Arsitektur Data
              </h2>
              <p class="text-on-surface-variant text-lg leading-relaxed">
                Mengintegrasikan manajemen, sumber daya, dan pengawasan dalam
                satu ekosistem digital yang kokoh untuk Kota Jambi yang
                berdaulat.
              </p>
            </div>
            <div class="hidden md:block">
              <span class="text-primary/10 font-headline text-8xl font-black"
                >01</span
              >
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Major Card -->
            <div
              class="md:col-span-8 bg-surface-container-lowest p-10 rounded-2xl shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-500"
            >
              <div class="flex flex-col h-full justify-between">
                <div>
                  <div
                    class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors"
                  >
                    <span
                      class="material-symbols-outlined text-primary group-hover:text-white transition-colors"
                      data-icon="hub"
                      >hub</span
                    >
                  </div>
                  <h3 class="text-2xl font-bold font-headline mb-4">
                    Integrasi Lintas Sektoral
                  </h3>
                  <p class="text-on-surface-variant max-w-lg mb-8">
                    Sinkronisasi data antar tim kerja secara real-time untuk
                    memastikan validitas informasi di setiap tingkatan
                    operasional BPS Kabupaten Kota Jambi.
                  </p>
                </div>
                <img
                  class="w-full h-64 object-cover rounded-xl grayscale group-hover:grayscale-0 transition-all duration-700"
                  data-alt="high-tech data visualization dashboard showing interconnected nodes and golden sparklines on a dark professional interface"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLiJMDmhglEJdw5ZO3HQCSFw5ua4yb51aKK6YfdoIsS4HF1X0soTyuqzyj8Jm1aOjPIVRdWV8rgGgg6ftXcsmq4Xnp3UkqBOIoqepTUkigDWhir4L00Twxxrox8RfHNbrePY8CnRPKhsGlScfVm1ei45N_XT6xLIzrL9wBxGZbFhMMp6TIoDK-eGpqLvbAAgIVJSxzwuiJtcODVz0GWfWVFdj8B4g_l9qT3Q3RPxL0ZdBu8fZ1lqPetix1Os877PAW-njau7EvK6k"
                />
              </div>
            </div>
            <!-- Side Cards -->
            <div class="md:col-span-4 flex flex-col gap-8">
              <div
                class="bg-primary p-8 rounded-2xl flex-1 text-white group cursor-pointer overflow-hidden relative"
              >
                <div
                  class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity"
                >
                  <span
                    class="material-symbols-outlined text-9xl"
                    data-icon="verified_user"
                    >verified_user</span
                  >
                </div>
                <div class="relative z-10">
                  <span
                    class="material-symbols-outlined text-tertiary-fixed-dim mb-4"
                    data-icon="security"
                    style="font-variation-settings: &quot;FILL&quot; 1"
                    >security</span
                  >
                  <h3 class="text-xl font-bold mb-2">Data Integrity</h3>
                  <p class="text-on-primary-container text-sm">
                    Standar keamanan berdaulat untuk setiap aset data statistik.
                  </p>
                </div>
              </div>
              <div
                class="bg-surface-container-high p-8 rounded-2xl flex-1 group cursor-pointer border border-outline-variant/10"
              >
                <span
                  class="material-symbols-outlined text-secondary mb-4"
                  data-icon="analytics"
                  >analytics</span
                >
                <h3 class="text-xl font-bold mb-2 text-primary">
                  Regional Insight
                </h3>
                <p class="text-on-surface-variant text-sm">
                  Analisis mendalam potensi wilayah Kota Jambi berbasis data
                  faktual.
                </p>
                <div
                  class="mt-6 flex items-center gap-2 text-secondary font-bold text-sm"
                >
                  Explore
                  <span
                    class="material-symbols-outlined text-sm"
                    data-icon="north_east"
                    >north_east</span
                  >
                </div>
              </div>
            </div>
            <!-- Bottom Cards -->
            <div
              class="md:col-span-4 bg-tertiary-fixed p-8 rounded-2xl border border-tertiary-fixed-dim/20"
            >
              <div class="flex items-center gap-4 mb-6">
                <span
                  class="material-symbols-outlined text-tertiary"
                  data-icon="groups"
                  >groups</span
                >
                <h3 class="text-lg font-bold text-tertiary">
                  Tim Kerja Terpadu
                </h3>
              </div>
              <div class="flex -space-x-3">
                <div
                  class="w-10 h-10 rounded-full border-2 border-tertiary-fixed bg-slate-300"
                ></div>
                <div
                  class="w-10 h-10 rounded-full border-2 border-tertiary-fixed bg-slate-400"
                ></div>
                <div
                  class="w-10 h-10 rounded-full border-2 border-tertiary-fixed bg-slate-500"
                ></div>
                <div
                  class="w-10 h-10 rounded-full border-2 border-tertiary-fixed bg-primary flex items-center justify-center text-[10px] text-white font-bold"
                >
                  +12
                </div>
              </div>
              <p class="mt-6 text-tertiary/80 text-sm font-medium">
                Kolaborasi aktif 156 personel ahli data di seluruh wilayah Kota
                Jambi.
              </p>
            </div>
            <div
              class="md:col-span-8 bg-surface-container-low p-8 rounded-2xl flex items-center gap-12 border border-outline-variant/5"
            >
              <div class="flex-1">
                <h3 class="text-2xl font-bold mb-4 font-headline text-primary">
                  Rumah Perubahan
                </h3>
                <p class="text-on-surface-variant mb-6">
                  Inisiatif transformasi digital BPS menuju lembaga penyedia
                  data yang lebih modern, cepat, dan akurat untuk pembangunan
                  daerah.
                </p>
                <button
                  class="text-primary font-bold border-b-2 border-primary pb-1 hover:border-tertiary-fixed-dim transition-colors"
                >
                  Pelajari Inisiatif
                </button>
              </div>
              <div
                class="hidden lg:block w-48 h-48 bg-white rounded-full p-2 shadow-inner"
              >
                <div
                  class="w-full h-full rounded-full bg-gradient-to-tr from-primary to-secondary flex items-center justify-center"
                >
                  <span
                    class="material-symbols-outlined text-white text-5xl"
                    data-icon="dynamic_form"
                    >dynamic_form</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Stats Counter Section -->
      <section class="py-24 bg-primary text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-5">
          <div class="grid grid-cols-6 h-full">
            <div class="border-r border-white"></div>
            <div class="border-r border-white"></div>
            <div class="border-r border-white"></div>
            <div class="border-r border-white"></div>
            <div class="border-r border-white"></div>
          </div>
        </div>
        <div class="container mx-auto px-12 relative z-10">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
              <p
                class="text-tertiary-fixed-dim font-headline text-5xl font-extrabold mb-2"
              >
                24
              </p>
              <p
                class="text-slate-400 uppercase tracking-widest text-xs font-bold"
              >
                Kecamatan
              </p>
            </div>
            <div>
              <p
                class="text-tertiary-fixed-dim font-headline text-5xl font-extrabold mb-2"
              >
                205
              </p>
              <p
                class="text-slate-400 uppercase tracking-widest text-xs font-bold"
              >
                Desa/Kelurahan
              </p>
            </div>
            <div>
              <p
                class="text-tertiary-fixed-dim font-headline text-5xl font-extrabold mb-2"
              >
                89+
              </p>
              <p
                class="text-slate-400 uppercase tracking-widest text-xs font-bold"
              >
                Publikasi Data
              </p>
            </div>
            <div>
              <p
                class="text-tertiary-fixed-dim font-headline text-5xl font-extrabold mb-2"
              >
                1.2M
              </p>
              <p
                class="text-slate-400 uppercase tracking-widest text-xs font-bold"
              >
                Data Points
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Support Section -->
      <section class="py-32 px-12 bg-background">
        <div class="container mx-auto">
          <div
            class="bg-surface-container-high rounded-[2rem] p-12 md:p-20 flex flex-col md:flex-row items-center gap-16"
          >
            <div class="md:w-1/2">
              <img
                class="rounded-3xl shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-700"
                data-alt="overhead view of a professional clean office desk with a laptop displaying charts and a cup of coffee on a light gray surface"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHaoDp5cdetr-bJo_PYKlbwCXmH5bKimNhiTeCi6BNlgH92Ikf6XqWf3dHEBUl5_FpTpavPId-OBMHwFz2jRvExBZ1NgqIkZVKep5eKn2fHzs8MqmWzeu3fP2k0WrSy4SQgmKMH2uHUwKbHWbX4HeipKMS6IeYm_a2otlzTrD4jTiQWarxeYedcC1P-tg70ppNqg_uDswul0Ca68hWvKuOpBTUxAjHWwI4F-eqjDQQ0NA2lEB-cgfynzbgbheNj6iKP05aJogcSa0"
              />
            </div>
            <div class="md:w-1/2">
              <h2 class="text-primary font-headline text-4xl font-bold mb-6">
                Butuh Bantuan Teknis?
              </h2>
              <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">
                Tim dukungan teknis SIMPADU siap membantu Anda dalam operasional
                sistem, manajemen akun, maupun kendala aksesibilitas data setiap
                hari kerja.
              </p>
              <div class="space-y-4">
                <a
                  class="flex items-center gap-4 p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary transition-colors group"
                  href="#"
                >
                  <span
                    class="material-symbols-outlined text-primary"
                    data-icon="contact_support"
                    >contact_support</span
                  >
                  <div>
                    <p class="font-bold">Pusat Bantuan</p>
                    <p class="text-xs text-on-surface-variant">
                      Panduan penggunaan &amp; FAQ
                    </p>
                  </div>
                  <span
                    class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity"
                    data-icon="chevron_right"
                    >chevron_right</span
                  >
                </a>
                <a
                  class="flex items-center gap-4 p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary transition-colors group"
                  href="#"
                >
                  <span
                    class="material-symbols-outlined text-primary"
                    data-icon="mail"
                    >mail</span
                  >
                  <div>
                    <p class="font-bold">Hubungi Administrator</p>
                    <p class="text-xs text-on-surface-variant">
                      Kirim pertanyaan via email
                    </p>
                  </div>
                  <span
                    class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity"
                    data-icon="chevron_right"
                    >chevron_right</span
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
    <footer
      class="bg-slate-100 dark:bg-slate-900 w-full py-12 border-t-0 flex flex-col items-center justify-center space-y-8 px-12"
    >
      <div class="flex flex-col items-center space-y-4">
        <p
          class="text-xs font-medium Inter tracking-wide text-slate-500 uppercase"
        >
          Sovereign Data Management
        </p>
        <div class="flex flex-wrap justify-center gap-8">
          <a
            class="text-slate-500 hover:text-[#31618e] text-sm transition-colors font-medium"
            href="#"
            >Privacy Policy</a
          >
          <a
            class="text-slate-500 hover:text-[#31618e] text-sm transition-colors font-medium"
            href="#"
            >Terms of Service</a
          >
          <a
            class="text-slate-500 hover:text-[#31618e] text-sm transition-colors font-medium"
            href="#"
            >Contact Support</a
          >
          <a
            class="text-slate-500 hover:text-[#31618e] text-sm transition-colors font-medium"
            href="#"
            >Internal Portal</a
          >
        </div>
      </div>
      <div class="w-24 h-px bg-slate-300 dark:bg-slate-700"></div>
      <div class="text-center">
        <p
          class="text-xs font-medium Inter tracking-wide text-[#31618e] dark:text-slate-400"
        >
          © 2024 BPS Kabupaten Kota Jambi. The Sovereign Data Architect.
        </p>
        <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-[0.2em]">
          Kota Jambi Digital Sovereignty Initiative
        </p>
      </div>
    </footer>
  </body>
</html>
