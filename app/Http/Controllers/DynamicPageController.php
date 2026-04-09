<?php

namespace App\Http\Controllers;

use App\Models\CustomPage;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\View\View;

class DynamicPageController extends Controller
{
    /**
     * Render halaman submenu: /{menuSlug}/{subSlug}
     */
    public function showSubmenu(string $menuSlug, string $subSlug): View
    {
        $menu = Menu::where('slug', $menuSlug)->where('type', 'dropdown')->firstOrFail();
        $submenu = $menu->submenus()->where('slug', $subSlug)->with('cards')->firstOrFail();

        $navMenus = Menu::where('is_visible', true)
            ->with('submenus')
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        return view('user.dynamic-page', [
            'title' => $submenu->name,
            'cards' => $submenu->cards,
            'menus' => $navMenus,
        ]);
    }

    /**
     * Render halaman kustom: /{slug}
     */
    public function showCustomPage(string $slug): View
    {
        $page = CustomPage::where('slug', $slug)->with('cards')->firstOrFail();

        $navMenus = Menu::where('is_visible', true)
            ->with('submenus')
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        return view('user.dynamic-page', [
            'title' => $page->name,
            'cards' => $page->cards,
            'menus' => $navMenus,
        ]);
    }
}
