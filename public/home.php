<?php
// 1. Panggil Header
require_once '../src/includes/public_home_header.php';
?>

<main>
    <section class="relative min-h-[100dvh] md:min-h-[870px] flex items-center bg-brand-dark overflow-hidden">

        <div class="absolute inset-0 z-0">
            <img src="assets/img/tugukris.jpg" alt="Background BPS Kota Jambi" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/90 to-primary/40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent"></div>
        </div>

        <div class="absolute inset-0 circuit-pattern opacity-20 z-0"></div>
        <div class="absolute top-1/4 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-[120px] z-0"></div>

        <div class="container mx-auto px-4 md:px-12 relative z-10 py-16 md:py-0">
            <div class="max-w-4xl text-center md:text-left mt-6 md:mt-0">
                <div class="mb-6 inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Official Management System</span>
                </div>

                <h1 class="text-white font-headline text-5xl sm:text-6xl md:text-8xl font-extrabold tracking-tighter mb-4 leading-none">
                    SIMPADU
                </h1>

                <p class="text-slate-200 font-headline text-base sm:text-lg md:text-2xl md:text-3xl font-light tracking-tight mb-8 md:mb-12 max-w-2xl mx-auto md:mx-0 shadow-sm">
                    SISTEM MANAJEMEN TERPADU <span class="text-secondary font-bold block sm:inline mt-1 sm:mt-0">BPS KOTA JAMBI</span>
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap gap-4 md:gap-6 justify-center md:justify-start">
                    <a href="https://jambikota.bps.go.id/id" target="_blank" class="w-full sm:w-auto">
                        <button class="w-full sm:w-auto px-6 md:px-8 py-3 md:py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-lg hover:bg-white/20 transition-colors border border-white/20 flex justify-center items-center">
                            Website BPS Kota Jambi
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 px-4 md:px-12 bg-surface">
        <div class="container mx-auto">

            <div class="flex flex-col md:flex-row md:justify-between items-center md:items-end mb-10 md:mb-16 text-center md:text-left gap-6 md:gap-0">
                <div class="max-w-2xl">
                    <h2 class="text-brand-dark font-headline text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-3 md:mb-4">Sistem Manajemen Terpadu</h2>
                    <p class="text-on-surface-variant text-base md:text-lg leading-relaxed">Mengintegrasikan manajemen, sumber daya, dan pengawasan dalam satu ekosistem digital yang kokoh untuk Jambi yang berdaulat.</p>
                </div>
                <div class="w-32 md:w-40 shrink-0">
                    <img src="assets/img/pngwing.com.png" alt="Logo BPS" class="w-full h-auto object-contain">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8">
                <div class="md:col-span-12 lg:col-span-8 bg-surface-container-lowest p-6 md:p-10 rounded-2xl shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-500">
                    <div class="flex flex-col h-full justify-between">
                        <div class="mb-8">
                            <div class="w-14 h-14 rounded-xl bg-tertiary/5 flex items-center justify-center mb-6 md:mb-8 group-hover:bg-tertiary transition-colors mx-auto md:mx-0">
                                <span class="material-symbols-outlined text-tertiary group-hover:text-white transition-colors" data-icon="hub">hub</span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold font-headline mb-3 text-brand-dark text-center md:text-left">Badan Pusat Statistik</h3>
                            <p class="text-on-surface-variant max-w-lg mb-0 text-center md:text-left text-sm md:text-base">BPS tentu tidak bisa melakukan semuanya sendiri. Kolaborasi dan partisipasi Anda menjadi kunci untuk mewujudkan visi BPS.</p>
                        </div>
                        <div class="w-full aspect-video min-h-[200px] md:min-h-[315px] rounded-xl overflow-hidden mt-2 md:mt-0 shrink-0 bg-slate-100">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/q9BYxUJ-4z4?si=Rl2fTpL2i0ouZsgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-12 lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-6 md:gap-8">
                    <div class="bg-brand-dark p-6 md:p-8 rounded-2xl flex-1 text-white group cursor-pointer overflow-hidden relative flex flex-col justify-center">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                            <span class="material-symbols-outlined text-7xl md:text-9xl" data-icon="verified_user">verified_user</span>
                        </div>
                        <div class="relative z-10 text-center md:text-left">
                            <h3 class="text-lg md:text-xl font-bold mb-2">Portal Terintegrasi</h3>
                            <p class="text-slate-300 text-xs md:text-sm">Akses terpusat ke seluruh aplikasi, sistem, dan layanan digital BPS Kota Jambi dalam satu tautan.</p>
                        </div>
                    </div>
                    <div class="bg-surface-container-high p-6 md:p-8 rounded-2xl flex-1 group cursor-pointer border border-outline-variant/10 hover:border-secondary transition-colors flex flex-col justify-center">
                        <span class="material-symbols-outlined text-secondary mb-3 mx-auto md:mx-0 text-3xl md:text-4xl" data-icon="Home">home</span>
                        <h3 class="text-lg md:text-xl font-bold mb-2 text-brand-dark text-center md:text-left">Rumah Perubahan</h3>
                        <p class="text-on-surface-variant text-xs md:text-sm text-center md:text-left">Inisiatif transformasi digital BPS menuju lembaga penyedia data yang lebih modern, cepat, dan akurat.</p>
                        <div class="mt-4 md:mt-6 flex items-center justify-center md:justify-start gap-2 text-secondary font-bold text-xs md:text-sm">
                            Lihat Detail <span class="material-symbols-outlined text-sm" data-icon="north_east">north_east</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 px-4 md:px-12 bg-background">
        <div class="container mx-auto">
            <div class="bg-surface-container-high rounded-3xl p-6 sm:p-10 md:p-16 lg:p-20 flex flex-col md:flex-row items-center gap-10 md:gap-16">

                <div class="w-full md:w-1/2 aspect-square sm:aspect-video md:aspect-[4/3] rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border border-white/10 shrink-0 bg-slate-100">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2039072731095!2d103.60642237423659!3d-1.6299828983548508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25889fb299c54f%3A0xe887a3bc29be8e7d!2sBadan%20Pusat%20Statistik%20Kota%20Jambi!5e0!3m2!1sid!2sid!4v1774935985999!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="w-full md:w-1/2 text-center md:text-left flex flex-col justify-center">
                    <h2 class="text-brand-dark font-headline text-3xl md:text-4xl font-bold mb-4 md:mb-6">Butuh Bantuan Teknis?</h2>
                    <p class="text-on-surface-variant text-sm md:text-lg mb-8 leading-relaxed max-w-xl mx-auto md:mx-0">Tim dukungan teknis SIMPADU siap membantu Anda dalam operasional sistem, manajemen akun, maupun kendala aksesibilitas data setiap hari kerja.</p>

                    <div class="space-y-3 md:space-y-4 mb-10">
                        <a class="flex items-center gap-3 md:gap-4 p-3 md:p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary hover:shadow-md transition-all group" href="#">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors shrink-0">
                                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors" data-icon="contact_support">contact_support</span>
                            </div>
                            <div class="text-left flex-1">
                                <p class="font-bold text-brand-dark text-sm md:text-base">Pusat Bantuan</p>
                                <p class="text-xs text-on-surface-variant">Panduan penggunaan aplikasi</p>
                            </div>
                            <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity text-primary text-sm mr-2" data-icon="chevron_right">chevron_right</span>
                        </a>

                        <a class="flex items-center gap-3 md:gap-4 p-3 md:p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-tertiary hover:shadow-md transition-all group" href="#">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-tertiary/10 flex items-center justify-center group-hover:bg-tertiary transition-colors shrink-0">
                                <span class="material-symbols-outlined text-tertiary group-hover:text-white transition-colors" data-icon="mail">mail</span>
                            </div>
                            <div class="text-left flex-1">
                                <p class="font-bold text-brand-dark text-sm md:text-base">Hubungi Administrator</p>
                                <p class="text-xs text-on-surface-variant">Kirim pertanyaan via email</p>
                            </div>
                            <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity text-tertiary text-sm mr-2" data-icon="chevron_right">chevron_right</span>
                        </a>
                    </div>

                    <div class="pt-6 border-t border-brand-dark/10">
                        <p class="text-xs font-bold text-brand-dark mb-4 uppercase tracking-wider text-center md:text-left">Kunjungi Media Sosial Kami</p>

                        <div class="flex items-center justify-center md:justify-start gap-4">
                            <a href="https://www.instagram.com/bps.kotajambi?igsh=YnA3Nm95c3N2OWY0" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-pink-50 hover:text-pink-600 hover:border-pink-300 transition-all shadow-sm hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=6282188880571&text=" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-green-50 hover:text-green-600 hover:border-green-300 transition-all shadow-sm hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/live/Y0eYY6xL-lw?si=Lt5-SemSpEs5f0vz" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-red-50 hover:text-red-600 hover:border-red-300 transition-all shadow-sm hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// 2. Panggil Footer
require_once '../src/includes/public_home_footer.php';
?>