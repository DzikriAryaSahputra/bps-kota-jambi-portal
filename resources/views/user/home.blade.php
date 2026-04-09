@extends('user.layouts.app')
@section('title', 'Beranda')
@section('description', 'Sistem Manajemen Portal BPS Kota Jambi — akses terpusat ke seluruh aplikasi dan layanan digital.')

@section('content')

{{-- ═══ HERO SECTION ═══ --}}
<section class="relative min-h-[100dvh] md:min-h-[870px] flex items-center bg-brand-dark overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('assets/img/tugukeris.jpg') }}"
         alt="Background BPS Kota Jambi" class="w-full h-full object-cover opacity-70" />
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/60 via-brand-dark/35 to-primary/15"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/40 via-transparent to-transparent"></div>
  </div>

  {{-- Glow effects --}}
  <div class="absolute top-1/4 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-[120px] z-0 pointer-events-none"></div>
  <div class="absolute bottom-1/4 -left-20 w-64 h-64 bg-secondary/10 rounded-full blur-[80px] z-0 pointer-events-none"></div>

  <div class="container mx-auto px-6 md:px-12 relative z-10 py-24 md:py-0">
    <div class="max-w-4xl text-center md:text-left mt-6 md:mt-0">
      <div class="mb-6 inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
        <span class="text-white text-xs font-bold tracking-widest uppercase">Official Management System</span>
      </div>

      <h1 class="text-white font-headline text-5xl sm:text-6xl md:text-8xl font-extrabold tracking-tighter mb-4 leading-none">
        SEMPOL
      </h1>

      <div class="mb-10 max-w-2xl mx-auto md:mx-0">
        <p class="text-slate-200 font-headline text-lg md:text-2xl font-light tracking-tight">
          SISTEM MANAJEMEN PORTAL
        </p>
        <p class="text-secondary font-headline text-lg md:text-2xl font-bold tracking-tight mt-1">
          BADAN PUSAT STATISTIK KOTA JAMBI
        </p>
      </div>

      <div class="flex justify-center md:justify-start">
        <a href="https://jambikota.bps.go.id/id" target="_blank" rel="noreferrer"
           class="px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl hover:bg-white/20 transition-colors border border-white/20 flex items-center gap-2 w-fit">
          <span class="material-symbols-outlined text-lg">open_in_new</span>
          Kunjungi Website
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ═══ TENTANG SECTION ═══ --}}
<section class="py-16 md:py-24 px-6 md:px-12 bg-surface">
  <div class="container mx-auto max-w-7xl">
    <div class="flex flex-col md:flex-row md:justify-between items-center md:items-end mb-12 md:mb-16 gap-6 text-center md:text-left">
      <div class="max-w-2xl">
        <h2 class="text-brand-dark font-headline text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-3">
          Sistem Manajemen Portal
        </h2>
        <p class="text-on-surface-variant text-base md:text-lg leading-relaxed">
          Kelola dan akses berbagai tautan internal dalam satu portal terpusat dengan mudah dan efisien.
        </p>
      </div>
      <div class="w-24 md:w-32 shrink-0 flex items-center justify-end md:justify-center">
        <img src="{{ asset('assets/img/bps.png') }}" alt="Logo BPS" class="w-full h-auto object-contain drop-shadow-sm">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8">
      {{-- Video BPS --}}
      <div class="md:col-span-12 lg:col-span-8 bg-surface-container-lowest p-6 md:p-10 rounded-2xl shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-500">
        <div class="flex flex-col h-full justify-between">
          <div class="mb-6">
            <div class="w-14 h-14 rounded-xl bg-tertiary/5 flex items-center justify-center mb-6 group-hover:bg-tertiary transition-colors mx-auto md:mx-0">
              <span class="material-symbols-outlined text-tertiary group-hover:text-white transition-colors">hub</span>
            </div>
            <h3 class="text-xl md:text-2xl font-bold font-headline mb-2 text-brand-dark text-center md:text-left">Badan Pusat Statistik</h3>
            <p class="text-on-surface-variant max-w-lg text-center md:text-left text-sm md:text-base">
              BPS tentu tidak bisa melakukan semuanya sendiri. Kolaborasi dan partisipasi Anda menjadi kunci untuk mewujudkan visi BPS.
            </p>
          </div>
          <div class="w-full aspect-video min-h-[200px] md:min-h-[315px] rounded-xl overflow-hidden shrink-0 bg-slate-100">
            <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/q9BYxUJ-4z4?si=Rl2fTpL2i0ouZsgw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      {{-- Info Cards --}}
      <div class="md:col-span-12 lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-6 md:gap-8">
        <div class="bg-brand-dark p-6 md:p-8 rounded-2xl flex-1 text-white group cursor-pointer overflow-hidden relative flex flex-col justify-center">
          <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
            <span class="material-symbols-outlined text-7xl md:text-9xl">verified_user</span>
          </div>
          <div class="relative z-10">
            <h3 class="text-lg md:text-xl font-bold mb-2">Portal Terintegrasi</h3>
            <p class="text-slate-300 text-xs md:text-sm">Akses terpusat ke seluruh aplikasi, sistem, dan layanan digital BPS Kota Jambi dalam satu tautan.</p>
          </div>
        </div>
        <div class="bg-surface-container-high p-6 md:p-8 rounded-2xl flex-1 group cursor-pointer border border-outline-variant/10 hover:border-secondary transition-colors flex flex-col justify-center">
          <span class="material-symbols-outlined text-secondary mb-3 mx-auto md:mx-0 text-3xl md:text-4xl">home</span>
          <h3 class="text-lg md:text-xl font-bold mb-2 text-brand-dark text-center md:text-left">Portal Layanan</h3>
          <p class="text-on-surface-variant text-xs md:text-sm text-center md:text-left">Inisiatif transformasi digital BPS menuju lembaga penyedia data yang lebih modern, cepat, dan akurat.</p>
          <a href="https://statistik1571.my.id/" target="_blank" rel="noreferrer" class="mt-4 flex items-center justify-center md:justify-start gap-1 text-secondary font-bold text-xs md:text-sm hover:gap-2 transition-all">
            Lihat Detail <span class="material-symbols-outlined text-sm">north_east</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ═══ CTA KONTAK ═══ --}}
<section class="py-16 md:py-24 px-6 md:px-12 bg-background">
  <div class="container mx-auto max-w-7xl">
    <div class="bg-surface-container-high rounded-3xl p-8 sm:p-12 md:p-16 flex flex-col md:flex-row items-center gap-12 md:gap-16">
      <div class="w-full md:w-1/2 aspect-square sm:aspect-video md:aspect-[4/3] rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border border-white/10 shrink-0 bg-slate-100">
        <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2039072731095!2d103.60642237423659!3d-1.6299828983548508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25889fb299c54f%3A0xe887a3bc29be8e7d!2sBadan%20Pusat%20Statistik%20Kota%20Jambi!5e0!3m2!1sid!2sid!4v1774935985999!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="w-full md:w-1/2 text-center md:text-left flex flex-col justify-center">
        <h2 class="text-brand-dark font-headline text-3xl md:text-4xl font-bold mb-4 md:mb-6">Butuh Bantuan Teknis?</h2>
        <p class="text-on-surface-variant text-sm md:text-lg mb-8 leading-relaxed max-w-xl mx-auto md:mx-0">
          Tim dukungan teknis SEMPOL siap membantu Anda dalam operasional sistem, manajemen akun, maupun kendala aksesibilitas data setiap hari kerja.
        </p>

        <div class="space-y-3 mb-8">
          <a href="{{ route('kontak') }}" class="flex items-center gap-4 p-4 bg-white rounded-xl border border-outline-variant/10 hover:border-primary hover:shadow-md transition-all group">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors shrink-0">
              <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors">contact_support</span>
            </div>
            <div class="text-left flex-1">
              <p class="font-bold text-brand-dark text-sm">Pusat Bantuan</p>
              <p class="text-xs text-on-surface-variant">Panduan penggunaan dan kirim pertanyaan</p>
            </div>
            <span class="material-symbols-outlined text-primary text-sm opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
          </a>
        </div>

        {{-- Social Media --}}
        <div class="pt-6 border-t border-brand-dark/10">
          <p class="text-xs font-bold text-brand-dark mb-4 uppercase tracking-wider text-center md:text-left">Kunjungi Media Sosial Kami</p>
          <div class="flex items-center justify-center md:justify-start gap-4">
            {{-- Website --}}
            <a href="https://jambikota.bps.go.id/" target="_blank" rel="noreferrer" title="Website"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-300 transition-all shadow-sm hover:scale-110">
              <span class="material-symbols-outlined text-[20px]">language</span>
            </a>
            
            {{-- Facebook --}}
            <a href="https://web.facebook.com/p/BPS-Kota-Jambi-100069372032427/" target="_blank" rel="noreferrer" title="Facebook"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-300 transition-all shadow-sm hover:scale-110">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
            </a>

            {{-- Instagram --}}
            <a href="https://www.instagram.com/bps.kotajambi/" target="_blank" rel="noreferrer" title="Instagram"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-pink-50 hover:text-pink-600 hover:border-pink-300 transition-all shadow-sm hover:scale-110">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
            </a>

            {{-- Youtube --}}
            <a href="https://www.youtube.com/@bpskotajambi9179" target="_blank" rel="noreferrer" title="Youtube"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-outline-variant/20 text-slate-600 hover:bg-red-50 hover:text-red-600 hover:border-red-300 transition-all shadow-sm hover:scale-110">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M21.582 6.186a2.66 2.66 0 00-1.884-1.892C17.985 3.8 12 3.8 12 3.8s-5.985 0-7.698.494a2.66 2.66 0 00-1.884 1.892C2.015 7.915 2 12 2 12s.015 4.085.402 5.814a2.66 2.66 0 001.884 1.892c1.713.494 7.698.494 7.698.494s5.985 0 7.698-.494a2.66 2.66 0 001.884-1.892C23.985 16.085 24 12 24 12s-.015-4.085-.402-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" clip-rule="evenodd" /></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
