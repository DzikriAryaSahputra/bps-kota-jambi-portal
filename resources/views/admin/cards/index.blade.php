@extends('admin.layouts.app')

@php($activeNav = 'submenus')

@section('title', 'Kelola Konten Submenu')
@section('page-title', 'Kelola Konten')

@section('content')
<div class="space-y-6">
  @if($errors->any())
    <section class="rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
      <p class="font-semibold mb-1">Form belum lengkap:</p>
      <ul class="list-disc pl-5 space-y-0.5">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </section>
  @endif

  <section class="space-y-2">
    <a href="{{ route('admin.submenu.index') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-700 bg-white border border-slate-200 rounded-lg px-3 py-1.5 hover:bg-slate-50 hover:border-slate-300 transition">
      <span class="material-symbols-outlined text-[18px]">arrow_back</span>
      Kembali ke Submenu
    </a>
    <h2 class="text-2xl font-black text-gray-900">Konten: {{ $submenu->name }}</h2>
    <p class="text-sm text-slate-500">Tambah dan atur konten untuk submenu ini.</p>
  </section>

  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
    <label for="modal-create-card" class="group rounded-2xl border-2 border-dashed border-slate-300 bg-white p-6 min-h-[220px] flex flex-col items-center justify-center text-center cursor-pointer hover:border-blue-400 hover:bg-blue-50/40 transition">
      <div class="w-14 h-14 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center mb-3 group-hover:scale-110 transition">
        <span class="material-symbols-outlined">add</span>
      </div>
      <h3 class="font-bold text-slate-900">Tambah Konten</h3>
      <p class="text-xs text-slate-500 mt-1">Klik untuk membuat konten baru</p>
    </label>

    @foreach($cards as $card)
      <article class="group relative rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm hover:shadow-xl transition">
        <div class="aspect-[16/10] bg-slate-100">
          <img src="{{ $card->image }}" alt="{{ $card->name }}" class="w-full h-full object-cover" onerror="this.src='https://placehold.co/800x500?text=No+Image';">
        </div>
        <div class="absolute inset-0 bg-black/45 opacity-0 group-hover:opacity-100 transition flex items-center justify-center gap-2">
          <button type="button" class="w-10 h-10 rounded-full bg-white text-slate-700 flex items-center justify-center hover:text-amber-700 open-edit-modal"
            data-id="{{ $card->id }}"
            data-update-url="{{ route('admin.card.update', [$submenu, $card]) }}"
            data-name="{{ $card->name }}"
            data-url="{{ $card->url }}"
            data-image-url="{{ $card->image_url }}"
            data-has-image-path="{{ $card->image_path ? 1 : 0 }}"
            data-new-tab="{{ $card->new_tab ? 1 : 0 }}"
            title="Edit">
            <span class="material-symbols-outlined text-[18px]">edit</span>
          </button>
          <button type="button" class="w-10 h-10 rounded-full bg-white text-red-600 flex items-center justify-center hover:bg-red-50 open-delete-modal"
            data-id="{{ $card->id }}"
            data-delete-url="{{ route('admin.card.destroy', [$submenu, $card]) }}"
            data-name="{{ $card->name }}"
            title="Hapus">
            <span class="material-symbols-outlined text-[18px]">delete</span>
          </button>
        </div>
        <div class="px-4 py-3 border-t border-slate-200 flex items-center justify-center">
          <p class="w-full text-center uppercase font-semibold text-slate-900 truncate">{{ $card->name }}</p>
        </div>
      </article>
    @endforeach
  </section>

  @if($cards->isEmpty())
    <section class="rounded-2xl border border-dashed border-slate-300 bg-white p-10 text-center text-slate-500">Belum ada konten di submenu ini.</section>
  @endif
</div>

<input type="checkbox" id="modal-create-card" class="peer hidden">
<div class="fixed inset-0 z-40 bg-black/55 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition"></div>
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto transition">
  <div class="w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Tambah Konten</h3>
      <label for="modal-create-card" class="w-9 h-9 rounded-full hover:bg-slate-100 flex items-center justify-center cursor-pointer text-slate-500">✕</label>
    </div>
    <form action="{{ route('admin.card.store', $submenu) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
      @csrf
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Konten</label>
        <input type="text" name="name" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">URL Redirect</label>
        <input type="url" name="url" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div class="grid sm:grid-cols-2 gap-3">
        <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 cursor-pointer">
          <input type="radio" name="image_mode" value="link" class="accent-blue-600" checked>
          <span class="text-sm font-medium text-slate-700">Pakai Link Gambar</span>
        </label>
        <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 cursor-pointer">
          <input type="radio" name="image_mode" value="upload" class="accent-blue-600">
          <span class="text-sm font-medium text-slate-700">Upload File Gambar</span>
        </label>
      </div>
      <div id="create-image-link-wrap">
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Link Gambar</label>
        <input type="url" id="create-image-url" name="image_url" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" placeholder="https://...">
      </div>
      <div id="create-image-file-wrap" class="hidden">
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Upload Gambar</label>
        <input type="file" id="create-image-file" name="image_file" accept="image/*" class="w-full rounded-xl border border-slate-300 px-3 py-2 text-sm">
      </div>
      <label class="flex items-center gap-2 cursor-pointer">
        <input type="checkbox" name="new_tab" value="1" class="w-4 h-4 rounded accent-blue-600" checked>
        <span class="text-sm text-slate-600">Buka di Tab Baru</span>
      </label>
      <div class="grid grid-cols-2 gap-3 pt-2">
        <label for="modal-create-card" class="h-11 rounded-xl border border-slate-300 flex items-center justify-center font-semibold text-slate-700 cursor-pointer">Batal</label>
        <button type="submit" class="h-11 rounded-xl bg-[#001f4d] text-white font-semibold">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="edit-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
  <div class="absolute inset-0 bg-black/55" id="edit-overlay"></div>
  <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
      <h3 class="text-xl font-black text-slate-900">Edit Konten</h3>
      <button type="button" id="edit-close" class="w-9 h-9 rounded-full hover:bg-slate-100 text-slate-500">✕</button>
    </div>
    <form id="edit-form" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Nama Konten</label>
        <input type="text" id="edit-name" name="name" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div>
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">URL Redirect</label>
        <input type="url" id="edit-url" name="url" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm" required>
      </div>
      <div class="grid sm:grid-cols-2 gap-3">
        <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 cursor-pointer">
          <input type="radio" name="image_mode" value="link" class="accent-blue-600 edit-image-mode" checked>
          <span class="text-sm font-medium text-slate-700">Pakai Link Gambar</span>
        </label>
        <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 cursor-pointer">
          <input type="radio" name="image_mode" value="upload" class="accent-blue-600 edit-image-mode">
          <span class="text-sm font-medium text-slate-700">Upload File Gambar</span>
        </label>
      </div>
      <div id="edit-image-link-wrap">
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Link Gambar</label>
        <input type="url" id="edit-image-url" name="image_url" class="w-full h-11 rounded-xl border border-slate-300 px-3 text-sm">
      </div>
      <div id="edit-image-file-wrap" class="hidden">
        <label class="text-xs font-bold uppercase tracking-wide text-slate-500 block mb-1.5">Upload Gambar Baru</label>
        <input type="file" id="edit-image-file" name="image_file" accept="image/*" class="w-full rounded-xl border border-slate-300 px-3 py-2 text-sm">
      </div>
      <label class="flex items-center gap-2 cursor-pointer">
        <input type="checkbox" id="edit-new-tab" name="new_tab" value="1" class="w-4 h-4 rounded accent-blue-600">
        <span class="text-sm text-slate-600">Buka di Tab Baru</span>
      </label>
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
    <h3 class="text-xl font-black text-center text-slate-900">Hapus Konten?</h3>
    <p class="text-sm text-slate-500 text-center mt-2">Konten <span id="delete-name" class="font-semibold text-slate-800"></span> akan dihapus permanen.</p>
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

    const createForm = document.querySelector("form[action='{{ route('admin.card.store', $submenu) }}']");
    const createModes = createForm ? createForm.querySelectorAll('input[name="image_mode"]') : [];
    const createLinkWrap = document.getElementById('create-image-link-wrap');
    const createFileWrap = document.getElementById('create-image-file-wrap');
    const createImageUrlInput = document.getElementById('create-image-url');
    const createImageFileInput = document.getElementById('create-image-file');
    const editImageUrlInput = document.getElementById('edit-image-url');
    const editImageFileInput = document.getElementById('edit-image-file');
    let editHasImagePath = false;

    function toggleCreateImageMode() {
      const mode = createForm?.querySelector('input[name="image_mode"]:checked')?.value || 'link';
      createLinkWrap.classList.toggle('hidden', mode !== 'link');
      createFileWrap.classList.toggle('hidden', mode !== 'upload');
      if (createImageUrlInput instanceof HTMLInputElement) {
        createImageUrlInput.required = mode === 'link';
      }
      if (createImageFileInput instanceof HTMLInputElement) {
        createImageFileInput.required = mode === 'upload';
      }
    }

    function toggleEditImageMode() {
      const mode = document.querySelector('.edit-image-mode:checked')?.value || 'link';
      document.getElementById('edit-image-link-wrap').classList.toggle('hidden', mode !== 'link');
      document.getElementById('edit-image-file-wrap').classList.toggle('hidden', mode !== 'upload');
      if (editImageUrlInput instanceof HTMLInputElement) {
        editImageUrlInput.required = mode === 'link';
      }
      if (editImageFileInput instanceof HTMLInputElement) {
        editImageFileInput.required = mode === 'upload' && !editHasImagePath;
      }
    }

    createModes.forEach((el) => el.addEventListener('change', toggleCreateImageMode));
    document.querySelectorAll('.edit-image-mode').forEach((el) => el.addEventListener('change', toggleEditImageMode));
    toggleCreateImageMode();
    toggleEditImageMode();

    document.querySelectorAll('.open-edit-modal').forEach((btn) => {
      btn.addEventListener('click', () => {
        editForm.action = btn.dataset.updateUrl;
        document.getElementById('edit-name').value = btn.dataset.name || '';
        document.getElementById('edit-url').value = btn.dataset.url || '';
        document.getElementById('edit-image-url').value = btn.dataset.imageUrl || '';
        document.getElementById('edit-new-tab').checked = (btn.dataset.newTab === '1');
        editHasImagePath = btn.dataset.hasImagePath === '1';
        const editMode = btn.dataset.imageUrl ? 'link' : 'upload';
        document.querySelectorAll('.edit-image-mode').forEach((el) => {
          el.checked = el.value === editMode;
        });
        toggleEditImageMode();
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
