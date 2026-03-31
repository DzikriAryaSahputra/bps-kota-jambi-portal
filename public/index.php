<?php
// 1. Panggil Header
require_once '../src/includes/public_header.php';
?>

<main>
    <!-- Hero Section (Menu Home) -->
    <section class="relative min-h-[500px] md:min-h-[870px] flex items-center bg-brand-dark overflow-hidden">

        <!-- 1. FOTO BACKGROUND & GRADASI BIRU -->
        <div class="absolute inset-0 z-0">
            <!-- Foto Utama (Silakan ganti atribut src dengan link/lokasi foto BPS Kota Jambi milik Anda) -->
            <!-- Contoh menggunakan foto ilustrasi data/kantor dari Unsplash -->
            <img src="assets/img/tugukris.jpg" alt="Background BPS Kota Jambi" class="w-full h-full object-cover">

            <!-- Overlay Gradasi: Gelap di kiri (agar teks terbaca), tembus pandang/biru terang di kanan -->
            <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/90 to-primary/40"></div>

            <!-- Overlay Gradasi Bawah: Agar menyatu mulus dengan section putih di bawahnya -->
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent"></div>
        </div>

        <!-- 2. Elemen Hiasan (Opsional: Pola sirkuit dan cahaya) -->
        <div class="absolute inset-0 circuit-pattern opacity-20 z-0"></div>
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-[120px] z-0"></div>

        <!-- 3. KONTEN TEKS (Di atas gambar) -->
        <div class="container mx-auto px-4 md:px-12 relative z-10 py-12 md:py-0">
            <div class="max-w-4xl text-center md:text-left mt-10 md:mt-0">
                <div class="mb-6 inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Official Management System</span>
                </div>

                <h1 class="text-white font-headline text-5xl sm:text-7xl md:text-8xl font-extrabold tracking-tighter mb-4 leading-none">
                    SIMPADU
                </h1>

                <p class="text-slate-200 font-headline text-lg md:text-2xl md:text-3xl font-light tracking-tight mb-8 md:mb-12 max-w-2xl mx-auto md:mx-0 shadow-sm">
                    SISTEM MANAJEMEN TERPADU <span class="text-secondary font-bold">BPS KOTA JAMBI</span>
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap gap-4 md:gap-6 justify-center md:justify-start">
                    <button class="px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-primary to-primary/80 text-white font-bold rounded-lg shadow-xl shadow-primary/20 hover:scale-105 transition-transform flex items-center justify-center gap-3 border border-primary/50">
                        Mulai Eksplorasi
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                    </button>
                    <button class="px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-lg hover:bg-white/20 transition-colors border border-white/20 justify-center">
                        Website BPS Kota Jambi
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 px-4 md:px-12 bg-surface">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row md:justify-between md:items-end mb-12 md:mb-16">
                <div class="max-w-2xl mb-6 md:mb-0">
                    <h2 class="text-brand-dark font-headline text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-3 md:mb-4">Sistem Manajemen Terpadu</h2>
                    <p class="text-on-surface-variant text-base md:text-lg leading-relaxed">Mengintegrasikan manajemen, sumber daya, dan pengawasan dalam satu ekosistem digital yang kokoh untuk Jambi yang berdaulat.</p>
                </div>
                <div class="text-brand-dark/10 font-headline text-6xl md:text-8xl font-black mt-2 md:mt-0 text-center md:text-left">
                    BPS
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8">
                <div class="md:col-span-12 lg:col-span-8 bg-surface-container-lowest p-6 md:p-10 rounded-2xl shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-500">
                    <div class="flex flex-col h-full justify-between">
                        <div class="mb-8">
                            <div class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center mb-6 md:mb-8 group-hover:bg-primary transition-colors mx-auto md:mx-0">
                                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="hub">hub</span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold font-headline mb-4 text-brand-dark text-center md:text-left">Badan Pusat Statistik</h3>
                            <p class="text-on-surface-variant max-w-lg mb-0 text-center md:text-left">BPS tentu tidak bisa melakukan semuanya sendiri. Kolaborasi dan partisipasi Anda menjadi kunci untuk mewujudkan visi BPS.</p>
                        </div>
                        <div class="w-full aspect-video min-h-[250px] md:min-h-[315px] rounded-xl overflow-hidden mt-6 md:mt-0 shrink-0 bg-slate-100">
    <iframe class="w-full h-full" src="https://www.youtube.com/embed/q9BYxUJ-4z4?si=Rl2fTpL2i0ouZsgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
                    </div>
                </div>

                <div class="md:col-span-12 lg:col-span-4 flex flex-col sm:flex-row md:flex-col lg:flex-col gap-6 md:gap-8">
                    <div class="bg-brand-dark p-6 md:p-8 rounded-2xl flex-1 text-white group cursor-pointer overflow-hidden relative flex flex-col justify-center">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                            <span class="material-symbols-outlined text-8xl md:text-9xl" data-icon="verified_user">verified_user</span>
                        </div>
                        <div class="relative z-10 text-center md:text-left">
                            <h3 class="text-lg md:text-xl font-bold mb-2">Data Integrity</h3>
                            <p class="text-slate-300 text-xs md:text-sm">Standar keamanan berdaulat untuk setiap aset data statistik.</p>
                        </div>
                    </div>
                    <div class="bg-surface-container-high p-6 md:p-8 rounded-2xl flex-1 group cursor-pointer border border-outline-variant/10 hover:border-secondary transition-colors flex flex-col justify-center">
                        <span class="material-symbols-outlined text-secondary mb-4 mx-auto md:mx-0" data-icon="Home">home</span>
                        <h3 class="text-lg md:text-xl font-bold mb-2 text-brand-dark text-center md:text-left">Rumah Perubahan</h3>
                        <p class="text-on-surface-variant text-xs md:text-sm text-center md:text-left">Inisiatif transformasi digital BPS menuju lembaga penyedia data yang lebih modern, cepat, dan akurat untuk pembangunan daerah.</p>
                        <div class="mt-6 flex items-center justify-center md:justify-start gap-2 text-secondary font-bold text-sm">
                            Lihat Detail <span class="material-symbols-outlined text-sm" data-icon="north_east">north_east</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 px-4 md:px-12 bg-background">
        <div class="container mx-auto">
            <div class="bg-surface-container-high rounded-3xl p-6 sm:p-12 md:p-20 flex flex-col md:flex-row items-center gap-10 md:gap-16">
                <div class="w-full md:w-1/2 aspect-video md:aspect-[4/3] min-h-[300px] md:min-h-[450px] rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border border-white/10 shrink-0 bg-slate-100">
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2039072731095!2d103.60642237423659!3d-1.6299828983548508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25889fb299c54f%3A0xe887a3bc29be8e7d!2sBadan%20Pusat%20Statistik%20Kota%20Jambi!5e0!3m2!1sid!2sid!4v1774935985999!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h2 class="text-brand-dark font-headline text-3xl md:text-4xl font-bold mb-4 md:mb-6">Butuh Bantuan Teknis?</h2>
                    <p class="text-on-surface-variant text-base md:text-lg mb-8 md:mb-10 leading-relaxed max-w-xl mx-auto md:mx-0">Tim dukungan teknis SIMPADU siap membantu Anda dalam operasional sistem, manajemen akun, maupun kendala aksesibilitas data setiap hari kerja.</p>

                    <div class="space-y-4">
                        <a class="flex items-center gap-3 md:gap-4 p-3 md:p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary transition-colors group" href="#">
                            <span class="material-symbols-outlined text-primary" data-icon="contact_support">contact_support</span>
                            <div>
                                <p class="font-bold text-brand-dark text-sm md:text-base">Pusat Bantuan</p>
                                <p class="text-xs text-on-surface-variant">Panduan penggunaan</p>
                            </div>
                            <span class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity text-primary text-sm" data-icon="chevron_right">chevron_right</span>
                        </a>
                        <a class="flex items-center gap-3 md:gap-4 p-3 md:p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-tertiary transition-colors group" href="#">
                            <span class="material-symbols-outlined text-tertiary" data-icon="mail">mail</span>
                            <div>
                                <p class="font-bold text-brand-dark text-sm md:text-base">Hubungi Administrator</p>
                                <p class="text-xs text-on-surface-variant">Kirim pertanyaan via email</p>
                            </div>
                            <span class="material-symbols-outlined ml-auto opacity-0 group-hover:opacity-100 transition-opacity text-tertiary text-sm" data-icon="chevron_right">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// 2. Panggil Footer
require_once '../src/includes/public_footer.php';
?>