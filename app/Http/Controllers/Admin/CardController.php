<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Submenu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CardController extends Controller
{
    public function index(Submenu $submenu): View
    {
        $cards = $submenu->cards()->get();

        return view('admin.cards.index', compact('submenu', 'cards'));
    }

    public function store(Request $request, Submenu $submenu): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'url' => 'required|url|max:500',
            'image_mode' => 'required|in:link,upload',
            'image_url' => 'exclude_unless:image_mode,link|required|url|max:500',
            'image_file' => 'exclude_unless:image_mode,upload|required|image|max:2048',
        ]);

        $data = [
            'submenu_id' => $submenu->id,
            'name' => $request->name,
            'url' => $request->url,
            'new_tab' => $request->boolean('new_tab', true),
            'order_no' => Card::where('submenu_id', $submenu->id)->max('order_no') + 1,
        ];

        if ($request->image_mode === 'upload' && $request->hasFile('image_file')) {
            $data['image_path'] = $request->file('image_file')->store('cards', 'public');
        } else {
            $data['image_url'] = $request->image_url;
        }

        Card::create($data);

        return back()->with('success', 'Kartu berhasil ditambahkan.');
    }

    public function update(Request $request, Submenu $submenu, Card $card): RedirectResponse
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

        if ($request->image_mode === 'upload' && ! $request->hasFile('image_file') && blank($card->image_path)) {
            return back()->withErrors(['image_file' => 'Upload gambar wajib diisi saat mode Upload dipilih.'])->withInput();
        }

        $data = [
            'name' => $request->name,
            'url' => $request->url,
            'new_tab' => $request->boolean('new_tab', true),
        ];

        if ($request->image_mode === 'upload' && $request->hasFile('image_file')) {
            if ($card->image_path) {
                Storage::disk('public')->delete($card->image_path);
            }
            $data['image_path'] = $request->file('image_file')->store('cards', 'public');
            $data['image_url'] = null;
        } elseif ($request->image_mode === 'link') {
            $data['image_url'] = $request->image_url;
            $data['image_path'] = null;
            if ($card->image_path) {
                Storage::disk('public')->delete($card->image_path);
            }
        }

        $card->update($data);

        return back()->with('success', 'Kartu berhasil diperbarui.');
    }

    public function destroy(Submenu $submenu, Card $card): RedirectResponse
    {
        $card->delete();

        return back()->with('success', 'Kartu berhasil dihapus.');
    }
}
