<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SIMPADU BPS Kota Jambi | Sovereign Data Architect</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@700;800&amp;display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    
    <!-- 1. TAILWIND VIA CDN (Tanpa perlu install npx) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- 2. KONFIGURASI WARNA & FONT LANGSUNG DI SINI -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "background": "#fbf9f8",
                        "brand-dark": "#002144",
                        "primary": "#00aeee",
                        "secondary": "#f7941d",
                        "tertiary": "#8cc63f",
                        "outline-variant": "#c3c6cf",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f6f3f2",
                        "surface-container-high": "#eae8e7",
                        "surface-container": "#f0eded",
                        "on-surface": "#1b1c1c",
                        "on-surface-variant": "#43474e",
                        "outline": "#74777f"
                    },
                    fontFamily: {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>

    <!-- 3. CUSTOM CSS BAWAAN STITCH -->
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
            <span class="text-2xl font-bold tracking-tighter text-white uppercase font-headline">SIMPADU</span>
        </div>
        <div class="hidden md:flex items-center space-x-8">
            <a class="text-primary border-b-2 border-primary pb-1 font-bold font-body transition-all" href="#">Home</a>
            <!-- MENU DROPDOWN MULAI DI SINI -->
            <div class="relative group">
                <!-- Tombol Utama Dropdown -->
                <button class="flex items-center gap-1 text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded">
                    Tim Kerja
                    <!-- Ikon panah yang akan berputar saat di-hover -->
                    <span class="material-symbols-outlined text-lg transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                </button>
                
                <!-- Kotak Isi Dropdown (Sembunyi secara default, muncul saat di-hover) -->
                <div class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-slate-100 overflow-hidden transform origin-top group-hover:translate-y-0 translate-y-2">
                    <div class="py-2">
                        <!-- Link Sub-Menu 1 -->
                        <a href="https://sirusa.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Kepala
                        </a>
                        <!-- Link Sub-Menu 2 -->
                        <a href="https://silastik.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Umum
                        </a>
                        <!-- Link Sub-Menu 3 -->
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            IPDS
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Nerwilis
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Distribusi & Harga
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            KTI & Pariwisata
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Kesra & Naker
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Hansos
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Pertanian
                        </a>
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Industri dan PEK
                        </a>
                    </div>
                </div>
            </div>
            <!-- MENU DROPDOWN SELESAI -->
            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#">Rumah Perubahan</a>
            
            <!-- MENU DROPDOWN MULAI DI SINI -->
            <div class="relative group">
                <!-- Tombol Utama Dropdown -->
                <button class="flex items-center gap-1 text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded">
                    Layanan Terpadu
                    <!-- Ikon panah yang akan berputar saat di-hover -->
                    <span class="material-symbols-outlined text-lg transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                </button>
                
                <!-- Kotak Isi Dropdown (Sembunyi secara default, muncul saat di-hover) -->
                <div class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-slate-100 overflow-hidden transform origin-top group-hover:translate-y-0 translate-y-2">
                    <div class="py-2">
                        <!-- Link Sub-Menu 1 -->
                        <a href="https://sirusa.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Sistem Rujukan Statistik
                        </a>
                        <!-- Link Sub-Menu 2 -->
                        <a href="https://silastik.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Layanan Konsultasi (Silastik)
                        </a>
                        <!-- Garis Pemisah (Opsional) -->
                        <div class="h-px bg-slate-100 my-1"></div>
                        <!-- Link Sub-Menu 3 -->
                        <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">
                            Website Utama BPS
                        </a>
                    </div>
                </div>
            </div>
            <!-- MENU DROPDOWN SELESAI -->

            <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#">Bantuan</a>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-white hover:bg-white/10 rounded-full transition-all scale-95 active:scale-90">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="flex items-center gap-2 p-1 pl-3 text-white hover:bg-white/10 rounded-full transition-all scale-95 active:scale-90 border border-white/10">
                <span class="text-xs font-medium font-body">Admin</span>
                <span class="material-symbols-outlined text-3xl" data-icon="account_circle">account_circle</span>
            </button>
        </div>
    </nav>