<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\View\View;

class KontakController extends Controller
{
    public function index(): View
    {
        $menus = Menu::where('is_visible', true)
            ->with('submenus')
            ->get()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();

        return view('user.kontak', compact('menus'));
    }
}
