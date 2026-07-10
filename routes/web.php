<?php

use App\Models\Menu;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Owner\MenuController;
use App\Http\Controllers\Owner\EmployeeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // Ambil 4 produk terlaris
    $bestSellers = Menu::where('is_best_seller', true)
                        ->whereNotNull('best_seller_order')
                        ->orderBy('best_seller_order')
                        ->take(4)
                        ->get();

    return Inertia::render('Beranda', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'bestSellers' => $bestSellers // Kirim data ke Vue
    ]);
});

Route::get('/menu', function () {
    // Hanya ambil menu yang berstatus 'Aktif' saja untuk halaman publik
    $allMenus = Menu::where('status', 'Aktif')->get(); 
    return Inertia::render('MenuPage', [
        'menus' => $allMenus 
    ]);
})->name('menu');

Route::get('/lokasi', function () {
    return Inertia::render('Lokasi');
})->name('lokasi');

Route::get('/tentang', function () {
    return Inertia::render('Tentang');
})->name('tentang');

Route::get('/dashboard', function () {
    return Inertia::render('Owner/DashboardCRUD');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- ROUTE UNTUK ADMIN / OWNER CRUD ---
Route::middleware(['auth', 'verified'])->prefix('owner')->name('owner.')->group(function () {
    Route::resource('menu', MenuController::class);
    Route::resource('employees', EmployeeController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';