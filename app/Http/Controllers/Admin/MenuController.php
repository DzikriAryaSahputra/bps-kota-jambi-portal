<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        $perPage = 10;

        $menus = Menu::query()
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $menus = new LengthAwarePaginator(
            $menus->forPage($currentPage, $perPage),
            $menus->count(),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        return view('admin.menus.index', compact('menus'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:menus,slug|regex:/^[a-z0-9\-]+$/',
            'type' => 'required|in:dropdown,link',
            'url' => 'nullable|url|max:255|required_if:type,link',
            'new_tab' => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['slug']);

        if ($data['type'] === 'link') {
            $data['new_tab'] = $request->boolean('new_tab');
        } else {
            $data['url'] = null;
            $data['new_tab'] = false;
        }

        Menu::create($data);

        return back()->with('success', 'Menu berhasil ditambahkan.');
    }

    public function update(Request $request, Menu $menu): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:menus,slug,'.$menu->id.'|regex:/^[a-z0-9\-]+$/',
            'type' => 'required|in:dropdown,link',
            'url' => 'nullable|url|max:255|required_if:type,link',
            'new_tab' => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['slug']);

        if ($data['type'] === 'link') {
            $data['new_tab'] = $request->boolean('new_tab');
        } else {
            $data['url'] = null;
            $data['new_tab'] = false;
        }

        $menu->update($data);

        return back()->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        $menu->delete();

        return back()->with('success', 'Menu beserta seluruh submenu dan kartunya berhasil dihapus.');
    }
}
