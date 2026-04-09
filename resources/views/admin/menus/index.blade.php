@extends('admin.layouts.app')

@php($activeNav = 'menus')

@section('title', 'Kelola Menu')
@section('page-title', 'Kelola Menu Navbar')

@section('content')
<div class="space-y-6">
  <section class="flex flex-wrap items-center justify-between gap-3">
    <div>
      <h2 class="text-2xl font-black text-gray-900">Menu Navbar</h2>
      <p class="text-sm text-slate-500 mt-1">Atur urutan tampilan berdasarkan abjad, jenis menu, dan aksi cepat.</p>
    </div>
    <label for="modal-create" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-white bg-[#001f3f] font-semibold cursor-pointer hover:bg-[#001730] hover:shadow-md transition">
      <span class="material-symbols-outlined text-[18px]">add</span>
      <span>Tambah Menu</span>
    </label>
  </section>

  <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="hidden md:block overflow-x-auto">
      <table class="w-full min-w-[780px]">
        <thead class="bg-slate-50 border-b border-slate-200">
          <tr>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Nama</th>
            <th class="text-left text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Slug</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Tipe</th>
            <th class="text-center text-xs font-bold uppercase tracking-wide text-slate-500 px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($menus as $menu)
            <tr class="border-b border-slate-100 hover:bg-slate-50/60">
              <td class="px-5 py-4 font-semibold text-slate-900">{{ $menu->name }}</td>
              <td class="px-5 py-4 text-sm text-slate-500">/{{ $menu->slug }}</td>
              <td class="px-5 py-4 text-center">
                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold {{ $menu->type === 'link' ? 'bg-cyan-50 text-cyan-700' : 'bg-indigo-50 text-indigo-700' }}">
                  {{ $menu->type === 'link' ? 'Redirect' : 'Dropdown' }}
                </span>
              </td>
              <td class="px-5 py-4">
                <div class="flex items-center justify-center gap-2">
                  <button
                    type="button"
                    class="w-9 h-9 rounded-lg border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:text-amber-700 hover:border-amber-200 open-edit-modal"
                    data-id="{{ $menu->id }}"
                    data-update-url="{{ route('admin.menu.update', $menu) }}"
                    data-name="{{ $menu->name }}"
                    data-slug="{{ $menu->slug }}"
                    data-type="{{ $menu->type }}"
                    data-url="{{ $menu->url }}"
                    data-new-tab="{{ $menu->new_tab ? 1 : 0 }}"
                    title="Edit"
                  >
                    <span class="material-symbols-outlined text-[18px]">edit</span>
                  </button>
                  <button
                    type="button"
                    class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 hover:bg-red-100 open-delete-modal"
                    data-id="{{ $menu->id }}"
                    data-delete-url="{{ route('admin.menu.destroy', $menu) }}"
                    data-name="{{ $menu->name }}"
                    title="Hapus"
                  >
                    <span class="material-symbols-outlined text-[18px]">delete</span>
                  </button>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-5 py-10 text-center text-slate-500">Belum ada menu.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="md:hidden divide-y divide-slate-100">
      @forelse($menus as $menu)
        <article class="p-4">
          <div class="flex items-start justify-between gap-3">
            <div>
              <h3 class="font-bold text-slate-900">{{ $menu->name }}</h3>
              <p class="text-xs text-slate-500 mt-1">/{{ $menu->slug }}</p>
              <span class="inline-flex mt-2 px-2.5 py-1 rounded-full text-[11px] font-semibold {{ $menu->type === 'link' ? 'bg-cyan-50 text-cyan-700' : 'bg-indigo-50 text-indigo-700' }}">
                {{ $menu->type === 'link' ? 'Redirect' : 'Dropdown' }}
              </span>
            </div>
            <div class="flex items-center gap-2">
              <button type="button" class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 open-edit-modal"
                data-id="{{ $menu->id }}" data-update-url="{{ route('admin.menu.update', $menu) }}" data-name="{{ $menu->name }}" data-slug="{{ $menu->slug }}" data-type="{{ $menu->type }}" data-url="{{ $menu->url }}" data-new-tab="{{ $menu->new_tab ? 1 : 0 }}">
                <span class="material-symbols-outlined text-[18px]">edit</span>
              </button>
              <button type="button" class="w-9 h-9 rounded-lg border border-red-200 bg-red-50 flex items-center justify-center text-red-600 open-delete-modal"
                data-id="{{ $menu->id }}" data-delete-url="{{ route('admin.menu.destroy', $menu) }}" data-name="{{ $menu->name }}">
                <span class="material-symbols-outlined text-[18px]">delete</span>
              </button>
            </div>
          </div>
        </article>
      @empty
        <p class="p-5 text-sm text-slate-500">Belum ada menu.</p>
      @endforelse
    </div>

    @if($menus->hasPages())
      <div class="px-5 py-4 border-t border-slate-200 flex flex-wrap justify-between items-center gap-3 text-sm text-slate-500">
        <p>Menampilkan {{ $menus->firstItem() }}-{{ $menus->lastItem() }} dari {{ $menus->total() }} data</p>

        <nav class="inline-flex items-center gap-2" aria-label="Pagination">
          @if($menus->onFirstPage())
            <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-300">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </span>
          @else
            <a href="{{ $menus->previousPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </a>
          @endif

          <span class="h-9 px-3 inline-flex items-center rounded-lg border border-slate-300 bg-white text-slate-700 text-xs sm:text-sm font-medium">
            Hal {{ $menus->currentPage() }} / {{ $menus->lastPage() }}
          </span>

          @if($menus->hasMorePages())
            <a href="{{ $menus->nextPageUrl() }}" class="w-9 h-9 inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">
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

<input type="checkbox" id="modal-create" class="peer hidden">
<div class="fixed inset-0 z-40 bg-black/55 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition"></div>
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition">
  <div class="w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Tambah Menu Baru</h3>
      <label for="modal-create" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center cursor-pointer text-slate-500">✕</label>
    </div>
    <form action="{{ route('admin.menu.store') }}" method="POST" class="p-6 space-y-4">
      @csrf
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama</label>
        <input type="text" name="name" value="{{ old('name') }}" data-slug-source class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: Tim Kerja" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Slug</label>
        <input type="text" name="slug" value="{{ old('slug') }}" data-slug-target class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="contoh: tim-kerja" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Tipe</label>
        <select name="type" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" data-menu-type required>
          <option value="dropdown" {{ old('type') === 'dropdown' ? 'selected' : '' }}>Dropdown</option>
          <option value="link" {{ old('type') === 'link' ? 'selected' : '' }}>Redirect</option>
        </select>
      </div>
      <div data-redirect-fields class="space-y-3 {{ old('type') === 'link' ? '' : 'hidden' }}">
        <div>
          <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">URL Redirect</label>
          <input type="url" name="url" value="{{ old('url') }}" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="https://example.com">
        </div>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="checkbox" name="new_tab" value="1" {{ old('new_tab') ? 'checked' : '' }} class="w-4 h-4 rounded accent-blue-600">
          <span class="text-sm text-slate-600">Buka di Tab Baru</span>
        </label>
      </div>
      <div class="grid grid-cols-2 gap-3 pt-2">
        <label for="modal-create" class="h-11 rounded-xl border border-slate-300 flex items-center justify-center font-semibold text-slate-700 cursor-pointer">Batal</label>
        <button type="submit" class="h-11 rounded-xl bg-[#001f4d] text-white font-semibold">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="edit-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/55" id="edit-overlay"></div>
  <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Edit Menu</h3>
      <button type="button" id="edit-close" class="w-9 h-9 rounded-full hover:bg-slate-100 text-slate-500">✕</button>
    </div>
    <form id="edit-form" method="POST" class="p-6 space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama</label>
        <input type="text" id="edit-name" name="name" data-slug-source class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Slug</label>
        <input type="text" id="edit-slug" name="slug" data-slug-target class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Tipe</label>
        <select id="edit-type" name="type" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" data-menu-type required>
          <option value="dropdown">Dropdown</option>
          <option value="link">Redirect</option>
        </select>
      </div>
      <div data-redirect-fields class="space-y-3 hidden">
        <div>
          <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">URL Redirect</label>
          <input type="url" id="edit-url" name="url" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="https://example.com">
        </div>
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="checkbox" id="edit-new-tab" name="new_tab" value="1" class="w-4 h-4 rounded accent-blue-600">
          <span class="text-sm text-slate-600">Buka di Tab Baru</span>
        </label>
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
    <div class="w-14 h-14 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4">
      <span class="material-symbols-outlined">warning</span>
    </div>
    <h3 class="text-xl font-black text-center text-slate-900">Hapus Menu?</h3>
    <p class="text-sm text-slate-500 text-center mt-2">Menu <span id="delete-name" class="font-semibold text-slate-800"></span> akan dihapus permanen.</p>
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
    const editType = document.getElementById('edit-type');

    function toggleEditRedirectFields() {
      const isLink = editType.value === 'link';
      editForm.querySelectorAll('[data-redirect-fields]').forEach((el) => {
        el.classList.toggle('hidden', !isLink);
      });
    }

    document.querySelectorAll('.open-edit-modal').forEach((btn) => {
      btn.addEventListener('click', () => {
        editForm.action = btn.dataset.updateUrl;
        document.getElementById('edit-name').value = btn.dataset.name || '';
        document.getElementById('edit-slug').value = btn.dataset.slug || '';
        editType.value = btn.dataset.type || 'dropdown';
        document.getElementById('edit-url').value = btn.dataset.url || '';
        document.getElementById('edit-new-tab').checked = (btn.dataset.newTab === '1');
        toggleEditRedirectFields();
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

    editType?.addEventListener('change', toggleEditRedirectFields);
    toggleEditRedirectFields();
  })();
</script>
@endpush
@endsection
