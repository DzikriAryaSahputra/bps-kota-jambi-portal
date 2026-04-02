<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SIMPADU BPS Kota Jambi | Sovereign Data Architect</title>

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

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

    <header class="bg-gradient-to-r from-brand-dark to-brand-dark/95 shadow-2xl shadow-brand-dark/20 sticky top-0 z-50 w-full border-b border-white/5">

        <nav class="flex justify-between items-center w-full px-6 md:px-12 h-20 mx-auto">
            <div class="flex items-center gap-4">
                <span class="text-xl md:text-2xl font-bold tracking-tighter text-white uppercase font-headline">SIMPADU</span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a class="text-primary border-b-2 border-primary pb-1 font-bold font-body transition-all" href="#">Home</a>

                <div class="relative group">
                    <button class="flex items-center gap-1 text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded">
                        Tim Kerja
                        <span class="material-symbols-outlined text-lg transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-slate-100 overflow-hidden transform origin-top group-hover:translate-y-0 translate-y-2">
                        <div class="py-2 max-h-96 overflow-y-auto"> <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Kepala</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Umum</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">IPDS</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Nerwilis</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Distribusi & Harga</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">KTI & Pariwisata</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Kesra & Naker</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Hansos</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Pertanian</a>
                            <a href="#" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Industri dan PEK</a>
                        </div>
                    </div>
                </div>

                <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#">Rumah Perubahan</a>

                <div class="relative group">
                    <button class="flex items-center gap-1 text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded">
                        Layanan Terpadu
                        <span class="material-symbols-outlined text-lg transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-slate-100 overflow-hidden transform origin-top group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            <a href="https://sirusa.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Sistem Rujukan Statistik</a>
                            <a href="https://silastik.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Layanan Konsultasi (Silastik)</a>
                            <div class="h-px bg-slate-100 my-1"></div>
                            <a href="https://jambikota.bps.go.id" target="_blank" class="block px-5 py-3 text-sm font-medium text-slate-700 hover:bg-primary/10 hover:text-primary transition-colors border-l-4 border-transparent hover:border-primary">Website Utama BPS</a>
                        </div>
                    </div>
                </div>

                <a class="text-slate-300 hover:text-white transition-colors font-body hover:bg-white/10 px-3 py-1 rounded" href="#">Bantuan</a>
            </div>

            <div class="flex items-center md:hidden">
                <button id="hamburger-btn" class="p-2 text-white hover:bg-white/10 rounded-lg transition-colors focus:outline-none">
                    <span class="material-symbols-outlined text-3xl" id="hamburger-icon">menu</span>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-brand-dark w-full border-t border-white/10 absolute left-0 top-20 shadow-2xl z-40 max-h-[calc(100vh-5rem)] overflow-y-auto">
            <div class="flex flex-col px-6 py-4 space-y-4">
                <a class="text-primary font-bold font-body" href="#">Home</a>

                <div class="flex flex-col space-y-3 pt-2 pb-2 border-y border-white/10">
                    <span class="text-slate-400 text-xs font-bold uppercase tracking-wider">Tim Kerja</span>
                    <div class="grid grid-cols-2 gap-2 pl-2">
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Kepala</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Umum</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">IPDS</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Nerwilis</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Distribusi & Harga</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">KTI & Pariwisata</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Kesra & Naker</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Hansos</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Pertanian</a>
                        <a href="#" class="text-slate-300 hover:text-white text-sm font-medium">Industri & PEK</a>
                    </div>
                </div>

                <a class="text-slate-300 hover:text-white transition-colors font-body" href="#">Rumah Perubahan</a>

                <div class="flex flex-col space-y-3 pt-2 pb-2 border-y border-white/10">
                    <span class="text-slate-400 text-xs font-bold uppercase tracking-wider">Layanan Terpadu</span>
                    <a href="https://sirusa.bps.go.id" target="_blank" class="text-slate-300 hover:text-white pl-4 text-sm font-medium">Sistem Rujukan Statistik</a>
                    <a href="https://silastik.bps.go.id" target="_blank" class="text-slate-300 hover:text-white pl-4 text-sm font-medium">Layanan Konsultasi (Silastik)</a>
                    <a href="https://jambikota.bps.go.id" target="_blank" class="text-slate-300 hover:text-white pl-4 text-sm font-medium">Website Utama BPS</a>
                </div>

                <a class="text-slate-300 hover:text-white transition-colors font-body pb-4" href="#">Bantuan</a>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('hamburger-btn');
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('hamburger-icon');

            if (btn && menu && icon) {
                btn.addEventListener('click', () => {
                    // Memunculkan / menyembunyikan menu mobile
                    menu.classList.toggle('hidden');

                    // Mengubah ikon menu menjadi ikon 'X' (close)
                    if (menu.classList.contains('hidden')) {
                        icon.textContent = 'menu';
                    } else {
                        icon.textContent = 'close';
                    }
                });
            }
        });
    </script>