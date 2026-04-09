@extends('admin.layouts.app')
@php $activeNav = 'dashboard'; @endphp
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<section class="space-y-6">
  <div>
    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 tracking-tight">Selamat Datang, {{ session('admin_username', 'Admin') }}!</h1>
    <p class="text-gray-600 mt-1">Kelola menu, submenu, dan konten kartu portal dalam satu dashboard.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
    <a href="{{ route('admin.menu.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition-all p-5 block">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-sm font-medium text-slate-500">Total Menu</h2>
        <span class="material-symbols-outlined text-blue-600 bg-blue-50 rounded-lg p-2">menu</span>
      </div>
      <p class="text-4xl font-black text-slate-900">{{ $totalMenus }}</p>
      <p class="text-xs text-slate-500 mt-2">Item navbar utama</p>
    </a>

    <a href="{{ route('admin.submenu.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition-all p-5 block">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-sm font-medium text-slate-500">Total Submenu</h2>
        <span class="material-symbols-outlined text-indigo-600 bg-indigo-50 rounded-lg p-2">segment</span>
      </div>
      <p class="text-4xl font-black text-slate-900">{{ $totalSubmenus }}</p>
      <p class="text-xs text-slate-500 mt-2">Turunan menu dropdown</p>
    </a>

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-sm font-medium text-slate-500">Total Kartu</h2>
        <span class="material-symbols-outlined text-sky-600 bg-sky-50 rounded-lg p-2">view_carousel</span>
      </div>
      <p class="text-4xl font-black text-slate-900">{{ $totalCards }}</p>
      <p class="text-xs text-slate-500 mt-2">Seluruh kartu submenu</p>
    </div>

    <a href="{{ route('admin.custom-page.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition-all p-5 block">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-sm font-medium text-slate-500">Halaman Kustom</h2>
        <span class="material-symbols-outlined text-cyan-700 bg-cyan-50 rounded-lg p-2">dashboard_customize</span>
      </div>
      <p class="text-4xl font-black text-slate-900">{{ $totalCustomPages }}</p>
      <p class="text-xs text-slate-500 mt-2">Halaman mandiri publik</p>
    </a>
  </div>

  <div class="space-y-3">
    <h2 class="text-lg font-bold text-slate-900">Akses Cepat</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <a href="{{ route('admin.menu.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition p-4 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center">
          <span class="material-symbols-outlined text-[20px]">menu</span>
        </div>
        <div>
          <p class="font-semibold text-slate-900 text-sm">Kelola Menu</p>
          <p class="text-xs text-slate-500">Kelola menu utama</p>
        </div>
      </a>

      <a href="{{ route('admin.submenu.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition p-4 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-700 flex items-center justify-center">
          <span class="material-symbols-outlined text-[20px]">segment</span>
        </div>
        <div>
          <p class="font-semibold text-slate-900 text-sm">Kelola Submenu</p>
          <p class="text-xs text-slate-500">Kelola turunan dropdown</p>
        </div>
      </a>

      <a href="{{ route('admin.custom-page.index') }}" class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition p-4 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-700 flex items-center justify-center">
          <span class="material-symbols-outlined text-[20px]">dashboard_customize</span>
        </div>
        <div>
          <p class="font-semibold text-slate-900 text-sm">Halaman Kustom</p>
          <p class="text-xs text-slate-500">Kelola halaman mandiri</p>
        </div>
      </a>
    </div>
  </div>
</section>

@endsection
