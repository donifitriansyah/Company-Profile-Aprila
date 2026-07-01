<?php

use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriBeritaController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\CourseDetailController;
use App\Http\Controllers\Frontend\FrontendBeritaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use App\Http\Controllers\Frontend\KomentarBeritaController;
use App\Http\Controllers\ProfileController;
use App\Models\Instructor;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('welcome');



Route::get('/tentang-kami', function () {
    return view('pages.frontend.tentang-kami');
})->name('tentang-kami');

Route::get('/course/{id}', [CourseDetailController::class, 'show'])
    ->name('detail-courses.show');

Route::get('/layanan-kami/pkbm-aprila', function () {
    $instructors = Instructor::where('category', 'instruktur')
        ->latest()
        ->get();
    return view('pages.frontend.pkbm-aprila', compact('instructors'));
})->name('pkbm-aprila');
Route::get('/layanan-kami/kelas-kursus-dan-jasa', function () {
    return view('pages.frontend.kelas-kursus-dan-jasa');
})->name('kelas-kursus-dan-jasa');

Route::get('/kontak-kami', function () {
    return view('pages.frontend.kontak-kami');
})->name('kontak-kami');

Route::get('/detail-kursus', function () {
    return view('pages.frontend.detail-kursus');
})->name('detail-kursus');

Route::get('/berita', [FrontendBeritaController::class, 'index'])
    ->name('berita');

Route::get('/berita/{slug}', [FrontendBeritaController::class, 'show'])
    ->name('detail-berita');

Route::get('/berita/{slug}', [FrontendBeritaController::class, 'detailBerita'])
    ->name('detail-berita');

Route::post(
    '/berita/{slug}/komentar',
    [KomentarBeritaController::class, 'store']
)->name('komentar-berita.store')->middleware('throttle:5,1');

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
    Route::resource('admin-berita', BeritaController::class);

    Route::get('admin-galeri-berita/{berita}', [GaleriBeritaController::class, 'index'])
        ->name('admin-galeri-berita.index');

    Route::post('admin-galeri-berita', [GaleriBeritaController::class, 'store'])
        ->name('admin-galeri-berita.store');

    Route::put('admin-galeri-berita/{id}', [GaleriBeritaController::class, 'update'])
        ->name('admin-galeri-berita.update');

    Route::delete('admin-galeri-berita/{id}', [GaleriBeritaController::class, 'destroy'])
        ->name('admin-galeri-berita.destroy');

    Route::get(
        'admin-galeri-berita/{berita}/create',
        [GaleriBeritaController::class, 'create']
    )->name('admin-galeri-berita.create');

    Route::get(
        'admin-galeri-berita/{id}/edit',
        [GaleriBeritaController::class, 'edit']
    )->name('admin-galeri-berita.edit');

    Route::prefix('admin-komentar-berita')->name('admin-komentar-berita.')->group(function () {

        Route::get('/', [KomentarBeritaController::class, 'index'])
            ->name('index');

        Route::put('/{id}/approve', [KomentarBeritaController::class, 'approve'])
            ->name('approve');

        Route::put('/{id}/reject', [KomentarBeritaController::class, 'reject'])
            ->name('reject');

        Route::delete('/{id}', [KomentarBeritaController::class, 'destroy'])
            ->name('destroy');
    });

    Route::resource('award', PrestasiController::class);

    Route::resource('admin-course', CourseController::class);

    Route::resource('admin-instructor', InstructorController::class);
});


require __DIR__ . '/auth.php';
