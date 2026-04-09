@extends('user.layouts.app')
@section('title', $title)
@section('description', 'Daftar aplikasi dan layanan pada ' . $title . ' — BPS Kota Jambi')

@section('content')

<div class="mt-8 px-6 md:px-12 pb-16">
  <div class="max-w-7xl mx-auto">

    {{-- Page Header --}}
    <div class="mb-10">
      <h1 class="text-2xl md:text-3xl font-extrabold font-headline text-brand-dark tracking-tight">
        {{ $title }}
      </h1>
      <p class="text-on-surface-variant text-sm mt-1">
        {{ $cards->count() }} aplikasi tersedia · BPS Kota Jambi
      </p>
    </div>

    {{-- Cards Grid --}}
    @if($cards->isEmpty())
      <div class="flex flex-col items-center justify-center py-24 text-center">
        <span class="material-symbols-outlined text-6xl text-outline-variant mb-4">view_carousel</span>
        <h2 class="text-lg font-semibold text-on-surface-variant">Belum ada kartu di halaman ini.</h2>
        <p class="text-sm text-outline mt-1">Silakan hubungi administrator untuk menambahkan konten.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
          <span class="material-symbols-outlined text-base">arrow_back</span>
          Kembali ke Beranda
        </a>
      </div>
    @else
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
        @foreach($cards as $card)
          <a href="{{ $card->url }}"
             {{ $card->new_tab ? 'target="_blank" rel="noreferrer"' : '' }}
             class="group bg-white rounded-2xl border border-outline-variant/20 shadow-sm overflow-hidden flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300 no-underline">

            {{-- Card Image --}}
            <div class="relative h-44 bg-slate-100 overflow-hidden shrink-0">
              @if($card->image)
                <img src="{{ $card->image }}" alt="{{ $card->name }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     onerror="this.closest('.relative').innerHTML='<div class=\'flex items-center justify-center h-full bg-gradient-to-br from-slate-100 to-slate-200\'><span class=\'material-symbols-outlined text-4xl text-slate-300\'>broken_image</span></div>'" />
              @else
                <div class="flex items-center justify-center h-full bg-gradient-to-br from-slate-100 to-slate-200">
                  <span class="material-symbols-outlined text-4xl text-slate-300">apps</span>
                </div>
              @endif

              {{-- Overlay gradient on hover --}}
              <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                <span class="material-symbols-outlined text-white text-base">open_in_new</span>
              </div>
            </div>

            {{-- Card Name --}}
            <div class="p-4 flex-1 flex items-center justify-center">
              <p class="w-full text-center uppercase text-sm font-semibold text-brand-dark leading-snug line-clamp-2 group-hover:text-primary transition-colors">
                {{ $card->name }}
              </p>
            </div>
          </a>
        @endforeach
      </div>
    @endif

  </div>
</div>

@endsection
