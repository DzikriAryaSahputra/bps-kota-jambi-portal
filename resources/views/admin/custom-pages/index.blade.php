@extends('admin.layouts.app')

@php($activeNav = 'custom-pages')

@section('title', 'Kelola Halaman Kustom')
@section('page-title', 'Kelola Halaman Kustom')

@section('content')
<div class="space-y-6">
  <section class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
    <div class="space-y-2 w-full lg:w-auto">
      <h2 class="text-2xl font-black text-gray-900">Halaman Kustom</h2>
      <p class="text-sm text-slate-500 mt-1">Buat halaman custom mandiri beserta daftar konten di dalamnya.</p>
    </div>
    <label for="modal-create-page" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-white bg-[#001f3f] font-semibold cursor-pointer hover:bg-[#001730] hover:shadow-md transition">
      <span class="material-symbols-outlined text-[18px]">add</span>
      <span>Tambah Halaman</span>
    </label>
  </section>

  <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="hidden md:block overflow-x-auto">
      <table class="w-full min-w-[980px]">
        <thead class="bg-slate-50 border-b border-slate-200">
          <tr>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Nama Halaman</th>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Slug</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Total Konten</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($pages as $page)
            <tr class="border-b border-slate-100 hover:bg-slate-50/60">
              <td class="px-5 py-4 font-semibold text-slate-900">{{ $page->name }}</td>
              <td class="px-5 py-4 text-sm text-slate-500">/{{ $page->slug }}</td>
              <td class="px-5 py-4 text-center"><span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700">{{ $page->cards_count ?? 0 }}</span></td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-center gap-2">
                  <a href="{{ route('admin.custom-card.index', $page) }}" class="w-9 h-9 rounded-lg border border-blue-200 bg-blue-50 flex items-center justify-center text-blue-700 hover:bg-blue-100" title="Kelola konten halaman"><span class="material-symbols-outlined text-[18px]">view_carousel</span></a>
                  <button type="button" class="w-9 h-9 rounded-lg border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:text-amber-700 hover:border-amber-200 open-edit-modal"
                    data-id="{{ $page->id }}"
                    data-update-url="{{ route('admin.custom-page.update', $page) }}"
                    data-name="{{ $page->name }}"
                    data-slug="{{ $page->slug }}"
                    title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                  <button type="button" class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-100 open-delete-modal"
                    data-id="{{ $page->id }}"
                    data-delete-url="{{ route('admin.custom-page.destroy', $page) }}"
                    data-name="{{ $page->name }}"
                    title="Hapus"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-5 py-10 text-center text-slate-500">Belum ada halaman kustom.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="md:hidden divide-y divide-slate-100">
      @forelse($pages as $page)
        <article class="p-4">
          <h3 class="font-bold text-slate-900">{{ $page->name }}</h3>
          <p class="text-xs text-slate-500 mt-1">/{{ $page->slug }}</p>
          <span class="inline-flex mt-2 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-slate-100 text-slate-700">{{ $page->cards_count ?? 0 }} Konten</span>
          <div class="flex items-center gap-2 mt-3">
            <a href="{{ route('admin.custom-card.index', $page) }}" class="w-9 h-9 rounded-lg border border-blue-200 bg-blue-50 flex items-center justify-center text-blue-700"><span class="material-symbols-outlined text-[18px]">view_carousel</span></a>
            <button type="button" class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 open-edit-modal" data-id="{{ $page->id }}" data-update-url="{{ route('admin.custom-page.update', $page) }}" data-name="{{ $page->name }}" data-slug="{{ $page->slug }}"><span class="material-symbols-outlined text-[18px]">edit</span></button>
            <button type="button" class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 open-delete-modal" data-id="{{ $page->id }}" data-delete-url="{{ route('admin.custom-page.destroy', $page) }}" data-name="{{ $page->name }}"><span class="material-symbols-outlined text-[18px]">delete</span></button>
          </div>
        </article>
      @empty
        <p class="p-5 text-sm text-slate-500">Belum ada halaman kustom.</p>
      @endforelse
    </div>

    @if($pages->hasPages())
      <div class="px-5 py-4 border-t border-slate-200 flex flex-wrap justify-between items-center gap-3 text-sm text-slate-500">
        <p>Menampilkan {{ $pages->firstItem() }}-{{ $pages->lastItem() }} dari {{ $pages->total() }} data</p>

        <nav class="inline-flex items-center gap-2" aria-label="Pagination">
          @if($pages->onFirstPage())
            <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-300">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </span>
          @else
            <a href="{{ $pages->previousPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </a>
          @endif

          <span class="h-9 px-3 inline-flex items-center rounded-lg border border-slate-300 bg-white text-slate-700 text-xs sm:text-sm font-medium">
            Hal {{ $pages->currentPage() }} / {{ $pages->lastPage() }}
          </span>

          @if($pages->hasMorePages())
            <a href="{{ $pages->nextPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
              <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </a>
          @else
            <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-300">
              <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </span>
          @endif
        </nav>
      </div>
    @endif
  </section>
</div>

<input type="checkbox" id="modal-create-page" class="peer hidden">
<div class="fixed inset-0 z-40 bg-black/55 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition"></div>
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition">
  <div class="w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Tambah Halaman Kustom</h3>
      <label for="modal-create-page" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center cursor-pointer text-slate-500">✕</label>
    </div>
    <form action="{{ route('admin.custom-page.store') }}" method="POST" class="p-6 space-y-4">
      @csrf
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Halaman</label>
        <input type="text" name="name" value="{{ old('name') }}" data-slug-source class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: Layanan Publik" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Slug</label>
        <input type="text" name="slug" value="{{ old('slug') }}" data-slug-target class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: layanan-publik" required>
      </div>
      <div class="grid grid-cols-2 gap-3 pt-2">
        <label for="modal-create-page" class="h-11 rounded-xl border border-slate-300 flex items-center justify-center font-semibold text-slate-700 cursor-pointer">Batal</label>
        <button type="submit" class="h-11 rounded-xl bg-[#001f4d] text-white font-semibold">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="edit-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/55" id="edit-overlay"></div>
  <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Edit Halaman Kustom</h3>
      <button type="button" id="edit-close" class="w-9 h-9 rounded-full hover:bg-slate-100 text-slate-500">✕</button>
    </div>
    <form id="edit-form" method="POST" class="p-6 space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Halaman</label>
        <input type="text" id="edit-name" name="name" data-slug-source class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Slug</label>
        <input type="text" id="edit-slug" name="slug" data-slug-target class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div class="grid grid-cols-2 gap-3 pt-2">
        <button type="button" id="edit-cancel" class="h-11 rounded-xl border border-slate-300 font-semibold text-slate-700">Batal</button>
        <button type="submit" class="h-11 rounded-xl bg-[#001f4d] text-white font-semibold">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="delete-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/55" id="delete-overlay"></div>
  <div class="relative w-full max-w-md bg-white rounded-3xl shadow-2xl border border-red-100 p-6">
    <div class="w-14 h-14 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4"><span class="material-symbols-outlined">warning</span></div>
    <h3 class="text-xl font-black text-center text-slate-900">Hapus Halaman?</h3>
    <p class="text-sm text-slate-500 text-center mt-2">Halaman <span id="delete-name" class="font-semibold text-slate-800"></span> dan seluruh konten di dalamnya akan dihapus permanen.</p>
    <form id="delete-form" method="POST" class="mt-6 grid grid-cols-2 gap-3">
      @csrf
      @method('DELETE')
      <button type="button" id="delete-cancel" class="h-11 rounded-xl border border-slate-300 font-semibold text-slate-700">Batal</button>
      <button type="submit" class="h-11 rounded-xl bg-red-600 text-white font-semibold">Hapus</button>
    </form>
  </div>
</div>

@push('scripts')
<script>
  (function () {
    const editModal = document.getElementById('edit-modal');
    const deleteModal = document.getElementById('delete-modal');
    const editForm = document.getElementById('edit-form');
    const deleteForm = document.getElementById('delete-form');

    document.querySelectorAll('.open-edit-modal').forEach((btn) => {
      btn.addEventListener('click', () => {
        editForm.action = btn.dataset.updateUrl;
        document.getElementById('edit-name').value = btn.dataset.name || '';
        document.getElementById('edit-slug').value = btn.dataset.slug || '';
        editModal.classList.remove('hidden');
        editModal.classList.add('flex');
      });
    });

    document.querySelectorAll('.open-delete-modal').forEach((btn) => {
      btn.addEventListener('click', () => {
        deleteForm.action = btn.dataset.deleteUrl;
        document.getElementById('delete-name').textContent = btn.dataset.name || '';
        deleteModal.classList.remove('hidden');
        deleteModal.classList.add('flex');
      });
    });

    [
      ['edit-close', editModal],
      ['edit-cancel', editModal],
      ['edit-overlay', editModal],
      ['delete-cancel', deleteModal],
      ['delete-overlay', deleteModal],
    ].forEach(([id, modal]) => {
      const el = document.getElementById(id);
      if (!el) return;
      el.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      });
    });
  })();
</script>
@endpush
@endsection
