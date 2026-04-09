<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomPage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CustomPageController extends Controller
{
    public function index(): View
    {
        $perPage = 10;

        $pages = CustomPage::withCount('cards')
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $pages = new LengthAwarePaginator(
            $pages->forPage($currentPage, $perPage),
            $pages->count(),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        return view('admin.custom-pages.index', compact('pages'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'slug' => 'required|string|max:150|unique:custom_pages,slug|regex:/^[a-z0-9\-]+$/',
        ]);

        CustomPage::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
        ]);

        return back()->with('success', 'Halaman kustom berhasil dibuat.');
    }

    public function update(Request $request, CustomPage $customPage): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'slug' => 'required|string|max:150|unique:custom_pages,slug,'.$customPage->id.'|regex:/^[a-z0-9\-]+$/',
        ]);

        $customPage->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
        ]);

        return back()->with('success', 'Halaman kustom berhasil diperbarui.');
    }

    public function destroy(CustomPage $customPage): RedirectResponse
    {
        $customPage->delete();

        return back()->with('success', 'Halaman kustom beserta kartunya berhasil dihapus.');
    }
}
