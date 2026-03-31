<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SIMPADU BPS Merangin | Sovereign Data Architect</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800&amp;display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "background": "#fbf9f8",
                        "outline-variant": "#c3c6cf",
                        "on-error-container": "#93000a",
                        "on-error": "#ffffff",
                        "tertiary-container": "#1d5334", // BPS Green Dark
                        "on-secondary-container": "#255783",
                        "on-tertiary-fixed": "#0a1f12",
                        "on-surface-variant": "#43474e",
                        "primary-fixed": "#d4e3ff",
                        "primary-fixed-dim": "#aac8f8",
                        "secondary-fixed-dim": "#9dcafd",
                        "surface-container-low": "#f6f3f2",
                        "tertiary": "#8cc63f", // BPS Green
                        "outline": "#74777f",
                        "secondary": "#f7941d", // BPS Orange
                        "surface-container-highest": "#e4e2e1",
                        "on-secondary-fixed-variant": "#124975",
                        "on-primary-fixed-variant": "#294870",
                        "surface-variant": "#e4e2e1",
                        "tertiary-fixed": "#d7f0b5",
                        "on-secondary-fixed": "#001d34",
                        "secondary-fixed": "#ffedcc",
                        "primary": "#00aeee", // BPS Blue
                        "brand-dark": "#002144", // Merangin Blue Slate base
                        "error": "#ba1a1a",
                        "primary-container": "#00aeee",
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
                        "tertiary-fixed-dim": "#8cc63f",
                        "surface-container": "#f0eded",
                        "surface-bright": "#fbf9f8",
                        "on-tertiary-fixed-variant": "#2c4c0b",
                        "surface-tint": "#00aeee",
                        "surface": "#fbf9f8",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#f7941d",
                        "inverse-surface": "#303030",
                        "on-tertiary-container": "#ffffff",
                        "on-background": "#1b1c1c",
                        "on-primary-container": "#ffffff"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .circuit-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg stroke='%2300aeee' stroke-width='0.5' stroke-opacity='0.15'%3E%3Cpath d='M50 0H20c-4.418 0-8 3.582-8 8v64c0 4.418 3.582 8 8 8h40c4.418 0 8-3.582 8-8V18L50 0z'/%3E%3Cpath d='M50 0v18h18M30 30h20M30 40h20M30 50h10'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary selection:text-white">
    <!-- TopNavBar -->
    <nav class="bg-gradient-to-r from-brand-dark to-brand-dark/95 shadow-2xl shadow-brand-dark/20 full-width top-0 sticky z-50 flex justify-between items-center w-full px-12 h-20 max-w-none mx-auto border-b border-white/5">
        <div class="flex items-center gap-4">
            <span class="text-2xl font-bold tracking-tighter text-white uppercase font-headline" style="">BPS KOTA JAMBI</span>
        </div>
        <div class="hidden md:flex items-center space-x-8">
            <a class="text-primary border-b-2 border-primary pb-1 font-bold font-body transition-all" href="#" style="">Home</a>
            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#" style="">Tim Kerja</a>
            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#" style="">Rumah Perubahan</a>
            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#" style="">Lainnya</a>
            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#" style="">Bantuan</a>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-white hover:bg-white/10 rounded-full transition-all scale-95 active:scale-90" style="">
                <span class="material-symbols-outlined" data-icon="notifications" style="">notifications</span>
            </button>
            <button class="flex items-center gap-2 p-1 pl-3 text-white hover:bg-white/10 rounded-full transition-all scale-95 active:scale-90 border border-white/10" style="">
                <span class="text-xs font-medium font-body" style="">Admin</span>
                <span class="material-symbols-outlined text-3xl" data-icon="account_circle" style="">account_circle</span>
            </button>
        </div>
    </nav>
    <main>
        <!-- Hero Section -->
        <section class="relative min-h-[870px] flex items-center bg-brand-dark overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0 circuit-pattern opacity-40"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/95 to-primary/20"></div>
            <div class="absolute top-1/4 -right-20 w-96 h-96 bg-primary/10 rounded-full blur-[120px]"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-tertiary/10 rounded-full blur-[100px]"></div>
            <div class="container mx-auto px-12 relative z-10">
                <div class="max-w-4xl">
                    <div class="mb-6 inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="text-primary text-xs font-bold tracking-widest uppercase" style="">Official Management System</span>
                    </div>
                    <h1 class="text-white font-headline text-7xl md:text-8xl font-extrabold tracking-tighter mb-4 leading-none" style="">
                        SIMPADU
                    </h1>
                    <p class="text-slate-300 font-headline text-2xl md:text-3xl font-light tracking-tight mb-12 max-w-2xl" style="">
                        SISTEM MANAJEMEN TERPADU <span class="text-secondary font-bold" style="">BPS KOTA JAMBI</span></p>
                    <div class="flex flex-wrap gap-6">
                        <button class="px-8 py-4 bg-gradient-to-r from-primary to-primary/80 text-white font-bold rounded-lg shadow-xl shadow-primary/20 hover:scale-105 transition-transform flex items-center gap-3" style="">
                            Mulai Eksplorasi
                            <span class="material-symbols-outlined" data-icon="arrow_forward" style="">arrow_forward</span>
                        </button>
                        <button class="px-8 py-4 glass-panel text-white font-semibold rounded-lg hover:bg-white/10 transition-colors border border-white/10" style="">
                            Unduh Laporan Tahunan
                        </button>
                    </div>
                </div>
            </div>
            <!-- Floating Data Card -->
            <div class="hidden lg:block absolute bottom-0 right-12 translate-y-1/2 w-[400px]">
                <div class="glass-panel p-8 rounded-xl shadow-2xl border border-white/10">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-white font-bold text-xl font-headline" style="">Statistik Terkini</h3>
                        <span class="text-primary material-symbols-outlined" data-icon="insights" style="">insights</span>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 text-sm" style="">Integritas Data</span>
                            <span class="text-tertiary font-bold" style="">99.8%</span>
                        </div>
                        <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-tertiary h-full w-[99.8%] shadow-[0_0_10px_#8cc63f]"></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div>
                                <p class="text-slate-400 text-xs uppercase tracking-wider mb-1" style="">Total Entri</p>
                                <p class="text-white font-bold text-2xl" style="">12.4k</p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-xs uppercase tracking-wider mb-1" style="">Wilayah</p>
                                <p class="text-white font-bold text-2xl" style="">24 Distrik</p>
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
                        <h2 class="text-brand-dark font-headline text-4xl md:text-5xl font-extrabold tracking-tight mb-4" style="">Pilar Arsitektur Data</h2>
                        <p class="text-on-surface-variant text-lg leading-relaxed" style="">Mengintegrasikan manajemen, sumber daya, dan pengawasan dalam satu ekosistem digital yang kokoh untuk Merangin yang berdaulat.</p>
                    </div>
                    <div class="hidden md:block">
                        <span class="text-brand-dark/10 font-headline text-8xl font-black" style="">01</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    <!-- Major Card -->
                    <div class="md:col-span-8 bg-surface-container-lowest p-10 rounded-2xl shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-500">
                        <div class="flex flex-col h-full justify-between">
                            <div>
                                <div class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                                    <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="hub" style="">hub</span>
                                </div>
                                <h3 class="text-2xl font-bold font-headline mb-4 text-brand-dark" style="">Integrasi Lintas Sektoral</h3>
                                <p class="text-on-surface-variant max-w-lg mb-8" style="">Sinkronisasi data antar tim kerja secara real-time untuk memastikan validitas informasi di setiap tingkatan operasional BPS Kabupaten Merangin.</p>
                            </div>
                            <img class="w-full h-64 object-cover rounded-xl grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="high-tech data visualization dashboard showing interconnected nodes and blue sparklines on a dark professional interface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLiJMDmhglEJdw5ZO3HQCSFw5ua4yb51aKK6YfdoIsS4HF1X0soTyuqzyj8Jm1aOjPIVRdWV8rgGgg6ftXcsmq4Xnp3UkqBOIoqepTUkigDWhir4L00Twxxrox8RfHNbrePY8CnRPKhsGlScfVm1ei45N_XT6xLIzrL9wBxGZbFhMMp6TIoDK-eGpqLvbAAgIVJSxzwuiJtcODVz0GWfWVFdj8B4g_l9qT3Q3RPxL0ZdBu8fZ1lqPetix1Os877PAW-njau7EvK6k" style="">
                        </div>
                    </div>
                    <!-- Side Cards -->
                    <div class="md:col-span-4 flex flex-col gap-8">
                        <div class="bg-brand-dark p-8 rounded-2xl flex-1 text-white group cursor-pointer overflow-hidden relative">
                            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                <span class="material-symbols-outlined text-9xl" data-icon="verified_user" style="">verified_user</span>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold mb-2" style="">Data Integrity</h3>
                                <p class="text-slate-300 text-sm" style="">Standar keamanan berdaulat untuk setiap aset data statistik.</p>
                            </div>
                        </div>
                        <div class="bg-surface-container-high p-8 rounded-2xl flex-1 group cursor-pointer border border-outline-variant/10 hover:border-secondary transition-colors">
                            <span class="material-symbols-outlined text-secondary mb-4" data-icon="analytics" style="">analytics</span>
                            <h3 class="text-xl font-bold mb-2 text-brand-dark" style="">Regional Insight</h3>
                            <p class="text-on-surface-variant text-sm" style="">Analisis mendalam potensi wilayah Merangin berbasis data faktual.</p>
                            <div class="mt-6 flex items-center gap-2 text-secondary font-bold text-sm" style="">
                                Explore <span class="material-symbols-outlined text-sm" data-icon="north_east" style="">north_east</span>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Cards -->
                    <div class="md:col-span-4 bg-secondary/10 p-8 rounded-2xl border border-secondary/20">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="material-symbols-outlined text-secondary" data-icon="groups" style="">groups</span>
                            <h3 class="text-lg font-bold text-brand-dark" style="">Tim Kerja Terpadu</h3>
                        </div>
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300"></div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-400"></div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-500"></div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-primary flex items-center justify-center text-[10px] text-white font-bold" style="">+12</div>
                        </div>
                        <p class="mt-6 text-brand-dark/80 text-sm font-medium" style="">Kolaborasi aktif 156 personel ahli data di seluruh wilayah Merangin.</p>
                    </div>
                    <div class="md:col-span-8 bg-surface-container-low p-8 rounded-2xl flex items-center gap-12 border border-outline-variant/5">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 font-headline text-brand-dark" style="">Rumah Perubahan</h3>
                            <p class="text-on-surface-variant mb-6" style="">Inisiatif transformasi digital BPS menuju lembaga penyedia data yang lebih modern, cepat, dan akurat untuk pembangunan daerah.</p>
                            <button class="text-primary font-bold border-b-2 border-primary pb-1 hover:border-secondary transition-colors" style="">Pelajari Inisiatif</button>
                        </div>
                        <div class="hidden lg:block w-48 h-48 bg-white rounded-full p-2 shadow-inner">
                            <div class="w-full h-full rounded-full bg-gradient-to-tr from-primary to-tertiary flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-5xl" data-icon="dynamic_form" style="">dynamic_form</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Counter Section -->
        <section class="py-24 bg-brand-dark text-white overflow-hidden relative">
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
                        <p class="text-primary font-headline text-5xl font-extrabold mb-2" style="">24</p>
                        <p class="text-slate-400 uppercase tracking-widest text-xs font-bold" style="">Kecamatan</p>
                    </div>
                    <div>
                        <p class="text-tertiary font-headline text-5xl font-extrabold mb-2" style="">205</p>
                        <p class="text-slate-400 uppercase tracking-widest text-xs font-bold" style="">Desa/Kelurahan</p>
                    </div>
                    <div>
                        <p class="text-secondary font-headline text-5xl font-extrabold mb-2" style="">89+</p>
                        <p class="text-slate-400 uppercase tracking-widest text-xs font-bold" style="">Publikasi Data</p>
                    </div>
                    <div>
                        <p class="text-white font-headline text-5xl font-extrabold mb-2" style="">1.2M</p>
                        <p class="text-slate-400 uppercase tracking-widest text-xs font-bold" style="">Data Points</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Section -->
        <section class="py-32 px-12 bg-background">
            <div class="container mx-auto">
                <div class="bg-surface-container-high rounded-[2rem] p-12 md:p-20 flex flex-col md:flex-row items-center gap-16">
                    <div class="md:w-1/2">
                        <img class="rounded-3xl shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-700" data-alt="overhead view of a professional clean office desk with a laptop displaying charts and a cup of coffee on a light gray surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHaoDp5cdetr-bJo_PYKlbwCXmH5bKimNhiTeCi6BNlgH92Ikf6XqWf3dHEBUl5_FpTpavPId-OBMHwFz2jRvExBZ1NgqIkZVKep5eKn2fHzs8MqmWzeu3fP2k0WrSy4SQgmKMH2uHUwKbHWbX4HeipKMS6IeYm_a2otlzTrD4jTiQWarxeYedcC1P-tg70ppNqg_uDswul0Ca68hWvKuOpBTUxAjHWwI4F-eqjDQQ0NA2lEB-cgfynzbgbheNj6iKP05aJogcSa0" style="">
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-brand-dark font-headline text-4xl font-bold mb-6" style="">Butuh Bantuan Teknis?</h2>
                        <p class="text-on-surface-variant text-lg mb-10 leading-relaxed" style="">Tim dukungan teknis SIMPADU siap membantu Anda dalam operasional sistem, manajemen akun, maupun kendala aksesibilitas data setiap hari kerja.</p>
                        <div class="space-y-4">
                            <a class="flex items-center gap-4 p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary transition-colors group" href="#" style="">
                                <span class="material-symbols-outlined text-primary" data-icon="contact_support" style="">contact_support</span>
                                <div>
                                    <p class="font-bold text-brand-dark" style="">Pusat Bantuan</p>
                                    <p class="text-xs text-on-surface-variant" style="">Panduan penggunaan &amp; FAQ</p>
                                </div>
                                <span class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity text-primary" data-icon="chevron_right" style="">chevron_right</span>
                            </a>
                            <a class="flex items-center gap-4 p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-tertiary transition-colors group" href="#" style="">
                                <span class="material-symbols-outlined text-tertiary" data-icon="mail" style="">mail</span>
                                <div>
                                    <p class="font-bold text-brand-dark" style="">Hubungi Administrator</p>
                                    <p class="text-xs text-on-surface-variant" style="">Kirim pertanyaan via email</p>
                                </div>
                                <span class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity text-tertiary" data-icon="chevron_right" style="">chevron_right</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-slate-100 dark:bg-slate-900 w-full py-12 border-t-0 flex flex-col items-center justify-center space-y-8 px-12">
        <div class="flex flex-col items-center space-y-4">
            <p class="text-xs font-medium Inter tracking-wide text-slate-500 uppercase" style="">Sovereign Data Management</p>
            <div class="flex flex-wrap justify-center gap-8">
                <a class="text-slate-500 hover:text-primary text-sm transition-colors font-medium" href="#" style="">Privacy Policy</a>
                <a class="text-slate-500 hover:text-primary text-sm transition-colors font-medium" href="#" style="">Terms of Service</a>
                <a class="text-slate-500 hover:text-primary text-sm transition-colors font-medium" href="#" style="">Contact Support</a>
                <a class="text-slate-500 hover:text-primary text-sm transition-colors font-medium" href="#" style="">Internal Portal</a>
            </div>
        </div>
        <div class="w-24 h-px bg-slate-300 dark:bg-slate-700"></div>
        <div class="text-center">
            <p class="text-xs font-medium Inter tracking-wide text-brand-dark dark:text-slate-400" style="">
                © 2024 BPS Kabupaten Merangin. The Sovereign Data Architect.
            </p>
            <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-[0.2em]" style="">Merangin Digital Sovereignty Initiative</p>
        </div>
    </footer>
</body>

</html>