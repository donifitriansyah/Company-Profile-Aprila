<?php
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tentang-kami', function () {
    return view('pages.frontend.tentang-kami');
})->name('tentang-kami');

Route::get('/layanan-kami/pkbm-aprila', function () {
    return view('pages.frontend.pkbm-aprila');
})->name('pkbm-aprila');
Route::get('/layanan-kami/kelas-kursus-dan-jasa', function () {
    return view('pages.frontend.kelas-kursus-dan-jasa');
})->name('kelas-kursus-dan-jasa');

Route::get('/kontak-kami', function () {
    return view('pages.frontend.kontak-kami');
})->name('kontak-kami');

Route::get('/berita', function () {
    return view('pages.frontend.berita');
})->name('berita');

Route::get('/detail-berita', function () {
    return view('pages.frontend.detail-berita');
})->name('detail-berita');

Route::get('/dashboard', function () {
    return view('pages.backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('admin-kategori-berita', KategoriBeritaController::class);
});





require __DIR__ . '/auth.php';
