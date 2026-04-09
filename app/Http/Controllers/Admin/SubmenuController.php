<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class SubmenuController extends Controller
{
    public function index(Request $request): View
    {
        $selectedMenuId = $request->integer('menu_id');
        $perPage = 10;

        $submenus = Submenu::with(['menu'])
            ->withCount('cards')
            ->when($selectedMenuId, fn ($query) => $query->where('menu_id', $selectedMenuId))
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $submenus = new LengthAwarePaginator(
            $submenus->forPage($currentPage, $perPage),
            $submenus->count(),
            $perPage,
            $currentPage,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );

        $menus = Menu::where('type', 'dropdown')
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        return view('admin.submenus.index', compact('submenus', 'menus', 'selectedMenuId'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|regex:/^[a-z0-9\-]+$/',
        ]);

        $data['slug'] = Str::slug($data['slug']);

        $exists = Submenu::where('menu_id', $data['menu_id'])
            ->where('slug', $data['slug'])->exists();

        if ($exists) {
            return back()->withErrors(['slug' => 'Slug sudah digunakan di menu ini.'])->withInput();
        }

        Submenu::create($data);

        return back()->with('success', 'Submenu berhasil ditambahkan.');
    }

    public function update(Request $request, Submenu $submenu): RedirectResponse
    {
        $data = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|regex:/^[a-z0-9\-]+$/',
        ]);

        $data['slug'] = Str::slug($data['slug']);

        $exists = Submenu::where('menu_id', $data['menu_id'])
            ->where('slug', $data['slug'])
            ->where('id', '!=', $submenu->id)->exists();

        if ($exists) {
            return back()->withErrors(['slug' => 'Slug sudah digunakan di menu ini.'])->withInput();
        }

        $submenu->update($data);

        return back()->with('success', 'Submenu berhasil diperbarui.');
    }

    public function destroy(Submenu $submenu): RedirectResponse
    {
        $submenu->delete();

        return back()->with('success', 'Submenu beserta kartunya berhasil dihapus.');
    }
}
