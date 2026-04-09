<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CustomCardController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SubmenuController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

// ─── User Routes ─────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// ─── Admin Auth ───────────────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ─── Admin Panel (Protected) ──────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {

    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard', [
            'totalMenus'       => \App\Models\Menu::count(),
            'totalSubmenus'    => \App\Models\Submenu::count(),
            'totalCards'       => \App\Models\Card::count(),
            'totalCustomPages' => \App\Models\CustomPage::count(),
        ]);
    })->name('dashboard');

    // Menu
    Route::prefix('menu')->name('menu.')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('index');
        Route::post('/', [MenuController::class, 'store'])->name('store');
        Route::put('/{menu}', [MenuController::class, 'update'])->name('update');
        Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('destroy');
    });

    // Submenu
    Route::prefix('submenu')->name('submenu.')->group(function () {
        Route::get('/', [SubmenuController::class, 'index'])->name('index');
        Route::post('/', [SubmenuController::class, 'store'])->name('store');
        Route::put('/{submenu}', [SubmenuController::class, 'update'])->name('update');
        Route::delete('/{submenu}', [SubmenuController::class, 'destroy'])->name('destroy');
    });

    // Cards per Submenu
    Route::prefix('submenu/{submenu}/card')->name('card.')->group(function () {
        Route::get('/', [CardController::class, 'index'])->name('index');
        Route::post('/', [CardController::class, 'store'])->name('store');
        Route::put('/{card}', [CardController::class, 'update'])->name('update');
        Route::delete('/{card}', [CardController::class, 'destroy'])->name('destroy');
    });

    // Custom Pages
    Route::prefix('custom-page')->name('custom-page.')->group(function () {
        Route::get('/', [CustomPageController::class, 'index'])->name('index');
        Route::post('/', [CustomPageController::class, 'store'])->name('store');
        Route::put('/{customPage}', [CustomPageController::class, 'update'])->name('update');
        Route::delete('/{customPage}', [CustomPageController::class, 'destroy'])->name('destroy');
    });

    // Custom Cards per Custom Page
    Route::prefix('custom-page/{customPage}/card')->name('custom-card.')->group(function () {
        Route::get('/', [CustomCardController::class, 'index'])->name('index');
        Route::post('/', [CustomCardController::class, 'store'])->name('store');
        Route::put('/{customCard}', [CustomCardController::class, 'update'])->name('update');
        Route::delete('/{customCard}', [CustomCardController::class, 'destroy'])->name('destroy');
    });
});

// ─── Dynamic User Pages (last — agar tidak konflik) ──────────────────────────
Route::get('/{menuSlug}/{subSlug}', [DynamicPageController::class, 'showSubmenu'])
    ->where(['menuSlug' => '[a-z0-9\-]+', 'subSlug' => '[a-z0-9\-]+'])
    ->name('page.submenu');

Route::get('/{slug}', [DynamicPageController::class, 'showCustomPage'])
    ->where('slug', '[a-z0-9\-]+')
    ->name('page.custom');
