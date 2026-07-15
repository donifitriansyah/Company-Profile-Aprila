<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GaleriBeritaController;
use App\Http\Controllers\Admin\JasaController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\ProgramPelatihanController;
use App\Http\Controllers\Admin\ProgramPelatihanDetailController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\ValidasiSertifikat;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\CourseDetailController;
use App\Http\Controllers\Frontend\FrontendBeritaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorController;
use App\Http\Controllers\Frontend\KomentarBeritaController;
use App\Http\Controllers\ProfileController;
use App\Models\Berita;
use App\Models\Client;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/sitemap.xml', function () {

    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/tentang-kami'))
        ->add(Url::create('/kontak-kami'))
        ->add(Url::create('/layanan-kami/pkbm-aprila'))
        ->add(Url::create('/layanan-kami/lembaga-kursus'))
        ->add(Url::create('/layanan-kami/lembaga-pelatihan-kerja'))
        ->add(Url::create('/layanan-kami/production-house'))
        ->add(Url::create('/berita'));

    foreach (Course::all() as $course) {
        $sitemap->add(
            Url::create('/course/' . $course->id)
        );
    }

    foreach (Berita::all() as $berita) {
        $sitemap->add(
            Url::create('/berita/' . $berita->slug)
        );
    }

    return $sitemap->toResponse(request());
});

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

Route::get('/layanan-kami/lembaga-kursus', function () {
    return view('pages.frontend.lembaga-kursus');
})->name('lembaga-kursus');

Route::get('/layanan-kami/lembaga-pelatihan-kerja', function () {
    return view('pages.frontend.lembaga-pelatihan-kerja');
})->name('lembaga-pelatihan-kerja');

Route::get('/layanan-kami/production-house', function () {
    return view('pages.frontend.production-house');
})->name('production-house');

Route::get('/kontak-kami', function () {
    return view('pages.frontend.kontak-kami');
})->name('kontak-kami');

Route::get('/detail-kursus', function () {
    return view('pages.frontend.detail-kursus');
})->name('detail-kursus');

Route::get('/detail-paket-a', function () {
    return view('pages.frontend.course.detail-paket-a');
})->name('detail-paket-a');

Route::get('/detail-paket-b', function () {
    return view('pages.frontend.course.detail-paket-b');
})->name('detail-paket-b');

Route::get('/detail-paket-c', function () {
    return view('pages.frontend.course.detail-paket-c');
})->name('detail-paket-c');

Route::get('/detail-aplikasi-perkantoran', function () {
    return view('pages.frontend.course.detail-aplikasi-perkantoran');
})->name('detail-aplikasi-perkantoran');

Route::get('/detail-desain-grafis', function () {
    return view('pages.frontend.course.detail-desain-grafis');
})->name('detail-desain-grafis');

Route::get('/detail-video-editing', function () {
    return view('pages.frontend.course.detail-video-editing');
})->name('detail-video-editing');

Route::get('/detail-public-speaking', function () {
    return view('pages.frontend.course.detail-public-speaking');
})->name('detail-public-speaking');

Route::get('/detail-digital-marketing', function () {
    return view('pages.frontend.course.detail-digital-marketing');
})->name('detail-digital-marketing');

Route::get('/detail-public-speaking-kids', function () {
    return view('pages.frontend.course.detail-public-speaking-kids');
})->name('detail-public-speaking-kids');

Route::get('/detail-kids-academy', function () {
    return view('pages.frontend.course.detail-kids-academy');
})->name('detail-kids-academy');

Route::get('/detail-computer-kids', function () {
    return view('pages.frontend.course.detail-computer-kids');
})->name('detail-computer-kids');

Route::get('/detail-english-kids', function () {
    return view('pages.frontend.course.detail-english-kids');
})->name('detail-english-kids');

Route::get('/detail-bimbingan-belajar', function () {
    return view('pages.frontend.course.detail-bimbingan-belajar');
})->name('detail-bimbingan-belajar');

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
    $testimonialCount = Testimoni::count();
    $instructorCount  = Instructor::count();
    $clientCount      = Client::count();
    $beritaCount      = Berita::count();
    return view('pages.backend.dashboard', compact(
        'testimonialCount',
        'instructorCount',
        'clientCount',
        'beritaCount'
    ));
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

    Route::resource('admin-klien', ClientController::class);

    Route::resource('admin-course', CourseController::class);

    Route::resource('admin-instructor', InstructorController::class);

    Route::resource('admin-testimoni', TestimoniController::class);

    Route::resource('admin-jasa', JasaController::class);

    Route::resource('peserta', PesertaController::class);

    Route::resource('program-pelatihan', ProgramPelatihanController::class);

    Route::prefix('program-pelatihan')->group(function () {

        Route::get(
            '{program_pelatihan_id}/detail',
            [ProgramPelatihanDetailController::class, 'index']
        )
            ->name('program-detail.index');


        Route::post(
            'detail',
            [ProgramPelatihanDetailController::class, 'store']
        )
            ->name('program-detail.store');


        Route::put(
            'detail/{id}',
            [ProgramPelatihanDetailController::class, 'update']
        )
            ->name('program-detail.update');


        Route::delete(
            'detail/{id}',
            [ProgramPelatihanDetailController::class, 'destroy']
        )
            ->name('program-detail.destroy');
    });

    Route::resource('sertifikat', SertifikatController::class)
        ->only([
            'index',
            'store',
            'update',
            'destroy'
        ]);


    Route::get(
        '/sertifikat/{id}/generate',
        [SertifikatController::class, 'generatePDF']
    )
        ->name('sertifikat.generate');


    Route::get(
        '/validasi-sertifikat/{uuid}',
        [SertifikatController::class, 'validasi']
    )
        ->name('sertifikat.validasi');

    Route::get(
    '/sertifikat/{id}/view',
    [SertifikatController::class, 'viewSertifikat']
)->name('sertifikat.view');


});

Route::get(
    '/validasi-sertifikat',
    [ValidasiSertifikat::class,'validasi']
)
->name('cek-sertifikat.validasi');


Route::post(
    '/validasi-sertifikat',
    [ValidasiSertifikat::class,'searchValidasi']
)
->name('cek-sertifikat.validasi.search');

require __DIR__ . '/auth.php';
