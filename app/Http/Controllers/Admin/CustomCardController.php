<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomCard;
use App\Models\CustomPage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CustomCardController extends Controller
{
    public function index(CustomPage $customPage): View
    {
        $cards = $customPage->cards()->get();

        return view('admin.custom-cards.index', compact('customPage', 'cards'));
    }

    public function store(Request $request, CustomPage $customPage): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'url' => 'required|url|max:500',
            'image_mode' => 'required|in:link,upload',
            'image_url' => 'exclude_unless:image_mode,link|required|url|max:500',
            'image_file' => 'exclude_unless:image_mode,upload|required|image|max:2048',
        ]);

        $data = [
            'custom_page_id' => $customPage->id,
            'name' => $request->name,
            'url' => $request->url,
            'new_tab' => $request->boolean('new_tab', true),
            'order_no' => CustomCard::where('custom_page_id', $customPage->id)->max('order_no') + 1,
        ];

        if ($request->image_mode === 'upload' && $request->hasFile('image_file')) {
            $data['image_path'] = $request->file('image_file')->store('custom-cards', 'public');
        } else {
            $data['image_url'] = $request->image_url;
        }

        CustomCard::create($data);

        return back()->with('success', 'Kartu berhasil ditambahkan.');
    }

    public function update(Request $request, CustomPage $customPage, CustomCard $customCard): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'url' => 'required|url|max:500',
            'image_mode' => 'required|in:link,upload',
            'image_url' => 'nullable|url|max:500',
            'image_file' => 'nullable|image|max:2048',
        ]);

        if ($request->image_mode === 'link' && blank($request->image_url)) {
            return back()->withErrors(['image_url' => 'Link gambar wajib diisi saat mode Link dipilih.'])->withInput();
        }

        if ($request->image_mode === 'upload' && ! $request->hasFile('image_file') && blank($customCard->image_path)) {
            return back()->withErrors(['image_file' => 'Upload gambar wajib diisi saat mode Upload dipilih.'])->withInput();
        }

        $data = [
            'name' => $request->name,
            'url' => $request->url,
            'new_tab' => $request->boolean('new_tab', true),
        ];

        if ($request->image_mode === 'upload' && $request->hasFile('image_file')) {
            if ($customCard->image_path) {
                Storage::disk('public')->delete($customCard->image_path);
            }
            $data['image_path'] = $request->file('image_file')->store('custom-cards', 'public');
            $data['image_url'] = null;
        } elseif ($request->image_mode === 'link') {
            $data['image_url'] = $request->image_url;
            $data['image_path'] = null;
            if ($customCard->image_path) {
                Storage::disk('public')->delete($customCard->image_path);
            }
        }

        $customCard->update($data);

        return back()->with('success', 'Kartu berhasil diperbarui.');
    }

    public function destroy(CustomPage $customPage, CustomCard $customCard): RedirectResponse
    {
        $customCard->delete();

        return back()->with('success', 'Kartu berhasil dihapus.');
    }
}
