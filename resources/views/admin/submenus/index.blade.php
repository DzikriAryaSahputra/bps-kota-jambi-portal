@extends('admin.layouts.app')

@php($activeNav = 'submenus')

@section('title', 'Kelola Submenu')
@section('page-title', 'Kelola Submenu')

@section('content')
<div class="space-y-6">
  <section class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
    <div class="space-y-3 w-full lg:w-auto">
      <h2 class="text-2xl font-black text-gray-900">Submenu</h2>
      <p class="text-sm text-slate-500 mt-1">Kelola submenu untuk setiap menu dropdown beserta akses kartu.</p>

      <form method="GET" action="{{ route('admin.submenu.index') }}" class="w-full sm:w-auto rounded-xl border border-slate-200 bg-white p-2.5 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center gap-2">
          <label for="filter-menu-id" class="text-[11px] font-bold uppercase tracking-wide text-slate-500 px-1">Filter Menu</label>
          <div class="flex items-center gap-2 w-full sm:w-auto">
            <select id="filter-menu-id" name="menu_id" class="h-9 min-w-0 flex-1 sm:min-w-[180px] rounded-lg border border-slate-300 bg-white px-3 text-sm text-slate-700">
              <option value="">Semua Menu</option>
              @foreach($menus as $menu)
                <option value="{{ $menu->id }}" {{ (string) ($selectedMenuId ?? '') === (string) $menu->id ? 'selected' : '' }}>{{ $menu->name }}</option>
              @endforeach
            </select>
            <button type="submit" class="h-9 px-3.5 rounded-lg bg-slate-900 text-white text-sm font-semibold hover:bg-slate-800 transition whitespace-nowrap">Terapkan</button>
          </div>
        </div>
      </form>
    </div>
    <label for="modal-create-submenu" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-white bg-[#001f3f] font-semibold cursor-pointer hover:bg-[#001730] hover:shadow-md transition">
      <span class="material-symbols-outlined text-[18px]">add</span>
      <span>Tambah Submenu</span>
    </label>
  </section>

  <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="hidden md:block overflow-x-auto">
      <table class="w-full min-w-[980px]">
        <thead class="bg-slate-50 border-b border-slate-200">
          <tr>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Nama Submenu</th>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Slug</th>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Menu Utama</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Total Konten</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($submenus as $submenu)
            <tr class="border-b border-slate-100 hover:bg-slate-50/60">
              <td class="px-5 py-4 font-semibold text-slate-900">{{ $submenu->name }}</td>
              <td class="px-5 py-4 text-sm text-slate-500">/{{ $submenu->slug }}</td>
              <td class="px-5 py-4">
                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700">
                  {{ $submenu->menu?->name ?? '-' }}
                </span>
              </td>
              <td class="px-5 py-4 text-center">
                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700">
                  {{ $submenu->cards_count ?? 0 }}
                </span>
              </td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-center gap-2">
                  <a href="{{ route('admin.card.index', $submenu) }}" class="w-9 h-9 rounded-lg border border-blue-200 bg-blue-50 flex items-center justify-center text-blue-700 hover:bg-blue-100" title="Kelola card submenu">
                    <span class="material-symbols-outlined text-[18px]">view_carousel</span>
                  </a>
                  <button type="button" class="w-9 h-9 rounded-lg border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:text-amber-700 hover:border-amber-200 open-edit-modal"
                    data-id="{{ $submenu->id }}"
                    data-update-url="{{ route('admin.submenu.update', $submenu) }}"
                    data-name="{{ $submenu->name }}"
                    data-slug="{{ $submenu->slug }}"
                    data-menu-id="{{ $submenu->menu_id }}"
                    title="Edit">
                    <span class="material-symbols-outlined text-[18px]">edit</span>
                  </button>
                  <button type="button" class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-100 open-delete-modal"
                    data-id="{{ $submenu->id }}"
                    data-delete-url="{{ route('admin.submenu.destroy', $submenu) }}"
                    data-name="{{ $submenu->name }}"
                    title="Hapus">
                    <span class="material-symbols-outlined text-[18px]">delete</span>
                  </button>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="px-5 py-10 text-center text-slate-500">Belum ada submenu.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="md:hidden divide-y divide-slate-100">
      @forelse($submenus as $submenu)
        <article class="p-4">
          <h3 class="font-bold text-slate-900">{{ $submenu->name }}</h3>
          <p class="text-xs text-slate-500 mt-1">/{{ $submenu->slug }}</p>
          <span class="inline-flex mt-2 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700">{{ $submenu->menu?->name ?? '-' }}</span>
          <p class="text-[11px] text-slate-500 mt-2">Total konten: <span class="font-semibold text-slate-700">{{ $submenu->cards_count ?? 0 }}</span></p>
          <div class="flex items-center gap-2 mt-3">
            <a href="{{ route('admin.card.index', $submenu) }}" class="w-9 h-9 rounded-lg border border-blue-200 bg-blue-50 flex items-center justify-center text-blue-700"><span class="material-symbols-outlined text-[18px]">view_carousel</span></a>
            <button type="button" class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 open-edit-modal" data-id="{{ $submenu->id }}" data-update-url="{{ route('admin.submenu.update', $submenu) }}" data-name="{{ $submenu->name }}" data-slug="{{ $submenu->slug }}" data-menu-id="{{ $submenu->menu_id }}"><span class="material-symbols-outlined text-[18px]">edit</span></button>
            <button type="button" class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 open-delete-modal" data-id="{{ $submenu->id }}" data-delete-url="{{ route('admin.submenu.destroy', $submenu) }}" data-name="{{ $submenu->name }}"><span class="material-symbols-outlined text-[18px]">delete</span></button>
          </div>
        </article>
      @empty
        <p class="p-5 text-sm text-slate-500">Belum ada submenu.</p>
      @endforelse
    </div>

    @if($submenus->hasPages())
      <div class="px-5 py-4 border-t border-slate-200 flex flex-wrap justify-between items-center gap-3 text-sm text-slate-500">
        <p>Menampilkan {{ $submenus->firstItem() }}-{{ $submenus->lastItem() }} dari {{ $submenus->total() }} data</p>

        <nav class="inline-flex items-center gap-2" aria-label="Pagination">
          @if($submenus->onFirstPage())
            <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-300">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </span>
          @else
            <a href="{{ $submenus->previousPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </a>
          @endif

          <span class="h-9 px-3 inline-flex items-center rounded-lg border border-slate-300 bg-white text-slate-700 text-xs sm:text-sm font-medium">
            Hal {{ $submenus->currentPage() }} / {{ $submenus->lastPage() }}
          </span>

          @if($submenus->hasMorePages())
            <a href="{{ $submenus->nextPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
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

<input type="checkbox" id="modal-create-submenu" class="peer hidden">
<div class="fixed inset-0 z-40 bg-black/55 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition"></div>
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition">
  <div class="w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Tambah Submenu</h3>
      <label for="modal-create-submenu" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center cursor-pointer text-slate-500">✕</label>
    </div>
    <form action="{{ route('admin.submenu.store') }}" method="POST" class="p-6 space-y-4">
      @csrf
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Menu Utama</label>
        <select name="menu_id" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
          <option value="">Pilih menu</option>
          @foreach($menus as $menu)
            <option value="{{ $menu->id }}" {{ (string) old('menu_id') === (string) $menu->id ? 'selected' : '' }}>{{ $menu->name }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Submenu</label>
        <input type="text" name="name" value="{{ old('name') }}" data-slug-source class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: Statistik Daerah" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Slug</label>
        <input type="text" name="slug" value="{{ old('slug') }}" data-slug-target class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: statistik-daerah" required>
      </div>
      <div class="grid grid-cols-2 gap-3 pt-2">
        <label for="modal-create-submenu" class="h-11 rounded-xl border border-slate-300 flex items-center justify-center font-semibold text-slate-700 cursor-pointer">Batal</label>
        <button type="submit" class="h-11 rounded-xl bg-[#001f4d] text-white font-semibold">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="edit-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/55" id="edit-overlay"></div>
  <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Edit Submenu</h3>
      <button type="button" id="edit-close" class="w-9 h-9 rounded-full hover:bg-slate-100 text-slate-500">✕</button>
    </div>
    <form id="edit-form" method="POST" class="p-6 space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Menu Utama</label>
        <select id="edit-menu-id" name="menu_id" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
          @foreach($menus as $menu)
            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Submenu</label>
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
    <h3 class="text-xl font-black text-center text-slate-900">Hapus Submenu?</h3>
    <p class="text-sm text-slate-500 text-center mt-2">Submenu <span id="delete-name" class="font-semibold text-slate-800"></span> akan dihapus permanen.</p>
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
        document.getElementById('edit-menu-id').value = btn.dataset.menuId || '';
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
