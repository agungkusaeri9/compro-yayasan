<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Auth::routes();

// admin
Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // berita
    Route::resource('posts', PostController::class);

    // setting
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('setting.update');
});


// visi misi
Route::get('visi-misi', [PageController::class, 'visi_misi'])->name('visi-misi');
Route::get('tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('berita/komentar/{berita_id}', [BeritaController::class, 'komentar'])->name('berita.komentar');
Route::get('berita/search', [BeritaController::class, 'index'])->name('berita.cari');

Route::get('berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
