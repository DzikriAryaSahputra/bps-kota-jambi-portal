@extends('user.layouts.app')
@section('title', 'Kontak')
@section('description', 'Hubungi tim BPS Kota Jambi untuk dukungan teknis, konsultasi layanan statistik, dan koordinasi kebutuhan data.')

@section('content')

<div class="mt-12 flex-1 px-6 md:px-12 pb-16">

  {{-- Header --}}
  <header class="relative mb-10 max-w-7xl mx-auto rounded-3xl overflow-hidden border border-slate-200 shadow-sm">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop');"></div>
    <div class="absolute inset-0 bg-white/80 backdrop-blur-[2px]"></div>

    <div class="relative z-10 p-10 sm:p-12">
      <h2 class="text-primary font-black font-headline text-4xl mb-4 tracking-tight drop-shadow-sm">KONTAK</h2>
      <div class="flex flex-col">
        <h1 class="text-xl font-bold font-headline text-slate-900 mb-2">PUSAT BANTUAN DAN KOMUNIKASI</h1>
        <p class="text-slate-700 font-body max-w-2xl">Hubungi tim kami untuk dukungan teknis, konsultasi layanan statistik, dan koordinasi kebutuhan data.</p>
      </div>
    </div>
  </header>

  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-8">

    {{-- Info Kontak --}}
    <article class="lg:col-span-2 bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
      <h3 class="text-brand-dark font-headline text-2xl font-bold mb-6">Informasi Kontak</h3>

      <ul class="space-y-4">
        <li class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">location_on</span>
          <div>
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-0.5">Alamat</p>
            <p class="text-sm text-slate-700 font-medium">Jl. Basuki Rahmat, Kota Jambi, Jambi 38128</p>
          </div>
        </li>
        <li class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">phone</span>
          <div>
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-0.5">Telepon</p>
            <p class="text-sm text-slate-700 font-medium">(0741) 40539</p>
          </div>
        </li>
        <li class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">mail</span>
          <div>
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-0.5">Email</p>
            <p class="text-sm text-slate-700 font-medium">bps1571@bps.go.id</p>
          </div>
        </li>
        <li class="p-4 rounded-2xl border border-slate-200 bg-slate-50 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">schedule</span>
          <div>
            <p class="text-xs uppercase tracking-wider text-slate-500 mb-0.5">Jam Kerja</p>
            <p class="text-sm text-slate-700 font-medium">Senin–Jumat, 07.30–16.00 WIB</p>
          </div>
        </li>
      </ul>
    </article>

    {{-- Maps --}}
    <article class="lg:col-span-3 bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col">
      <h3 class="text-brand-dark font-headline text-2xl font-bold mb-6">Lokasi Kami</h3>
      
      <div class="w-full flex-1 min-h-[350px] rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 shadow-inner">
        <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2039072731095!2d103.60642237423659!3d-1.6299828983548508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25889fb299c54f%3A0xe887a3bc29be8e7d!2sBadan%20Pusat%20Statistik%20Kota%20Jambi!5e0!3m2!1sid!2sid!4v1774935985999!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </article>

  </div>
</div>

@endsection


