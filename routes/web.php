<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\OpenComeController;
use App\Http\Controllers\Admin\DestinasiController;
use App\Http\Controllers\Admin\TailorMadeController;
use App\Http\Controllers\Admin\OpenSelesaiController;
use App\Http\Controllers\Admin\ReadyPackageController;
use App\Http\Controllers\Admin\TestimoniTeksController;
use App\Http\Controllers\Admin\KategoriGaleriController;
use App\Http\Controllers\Admin\TestimoniVideoController;

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

// Route::get('/', function () {
//     return view('Front.baseFront');
// });

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front.index');
    Route::get('/destinasi', 'destinasi')->name('front.destinasi');
    Route::get('/desc/destinasi/{id}', 'detailDestinasi')->name('front.detail.destinasi');
    Route::get('/kategori/{slug}', 'kategori')->name('front.kategori.galeri');
    Route::get('/hubungi/kami', 'hubungiKami')->name('front.hubungi.kami');
    Route::get('/tailor/made', 'tailorMade')->name('front.tailor.made');
    Route::get('/ready/package', 'readyPackage')->name('front.ready.package');
    Route::get('/open/trip', 'openTrip')->name('front.open.trip');
    Route::get('/agent/partner', 'agentPartner')->name('front.agent.partner');
    Route::get('/detail/itinerary/{id}', 'detailTrip')->name('front.detail.itinerary');
    Route::get('/detail/itinerary/ready/package/{id}', 'detailReady')->name('front.detail.itinerary.ready.package');


    // SEARCH DESTINASI
    Route::get('/ajax', 'ajax');
    Route::get('/read', 'read');
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/home', 'index')->name('index.home');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('index.user');
        Route::get('/form/user', 'formUser')->name('form.user');
        Route::post('/tambah/user', 'tambahUser')->name('tambah.user');
        Route::get('/edit/user/{id}', 'editUser')->name('edit.user');
        Route::put('/update/user/{id}', 'updateUser')->name('update.user');
        Route::delete('/delete/user/{id}', 'deleteUser')->name('delete.user');
    });

    Route::controller(DestinasiController::class)->group(function (){
        Route::get('/destinasi', 'index')->name('index.destinasi');
        Route::get('/form/destinasi', 'formDestinasi')->name('form.destinasi');
        Route::post('/tambah/destinasi', 'tambahDestinasi')->name('tambah.destinasi');
        Route::get('/edit/destinasi/{id}', 'editDestinasi')->name('edit.destinasi');
        Route::put('/update/destinasi/{id}', 'updateDestinasi')->name('update.destinasi');
        Route::delete('/delete/destinasi/{id}', 'deleteDestinasi')->name('delete.destinasi');
        Route::get('/desc/destinasi/{id}', 'descDestinasi')->name('desc.destinasi');

        // upload image from ckeditor
        // Route::post('upload', 'uploadImage')->name('ckeditor.upload');

        Route::post('/upload', 'upload')->name('ckeditor.upload');
    });
    Route::controller(TestimoniTeksController::class)->group(function (){
        Route::get('/testimoni/teks', 'index')->name('index.testimoni.teks');
        Route::get('/form/testimoni/teks', 'formTestimoniTeks')->name('form.testimoni.teks');
        Route::post('/tambah/testimoni/teks', 'tambahTestimoniTeks')->name('tambah.testimoni.teks');
        Route::get('/edit/testimoni/teks/{id}', 'editTestimoniTeks')->name('edit.testimoni.teks');
        Route::put('/update/testimoni/teks/{id}', 'updateTestimoniTeks')->name('update.testimoni.teks');
        Route::delete('/delete/testimoni/teks/{id}', 'deleteTestimoniTeks')->name('delete.testimoni.teks');
        Route::get('/desc/testimoni/teks{id}', 'descTestimoniTeks')->name('desc.testimoni.teks');
    });
    Route::controller(TestimoniVideoController::class)->group(function (){
        Route::get('/testimoni/video', 'index')->name('index.testimoni.video');
        Route::get('/form/testimoni/video', 'formTestimoni')->name('form.testimoni.video');
        Route::post('/tambah/testimoni/video', 'tambahTestimoni')->name('tambah.testimoni.video');
        Route::get('/edit/testimoni/video/{id}', 'editTestimoni')->name('edit.testimoni.video');
        Route::put('/update/testimoni/video/{id}', 'updateTestimoni')->name('update.testimoni.video');
        Route::delete('/delete/testimoni/video/{id}', 'deleteTestimoniVideo')->name('delete.testimoni.video');
    });
    Route::controller(KategoriGaleriController::class)->group(function () {
        Route::get('/kategori/galeri', 'index')->name('index.kategori.galeri');
        Route::post('/tambah/kategori/galeri', 'tambahKategori')->name('tambah.kategori.galeri');
        Route::put('/update/kategori/galeri/{id}', 'updateKategoriGaleri')->name('update.kategori.galeri');
        Route::delete('/delete/kategori/galeri/{id}', 'deleteKategoriGaleri')->name('delete.kategori.galeri');
    });
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/galeri', 'index')->name('index.galeri');
        Route::get('/form/galeri', 'formGaleri')->name('form.galeri');
        Route::post('/tambah/galeri', 'tambahGaleri')->name('tambah.galeri');
        Route::get('/edit/galeri/{id}', 'editGaleri')->name('edit.galeri');
        Route::put('/update/galeri/{id}', 'updateGaleri')->name('update.galeri');
        Route::delete('/delete/galeri/{id}', 'deleteGaleri')->name('delete.galeri');
        Route::get('/desc/galeri/{id}', 'descGaleri')->name('desc.galeri');
    });
    Route::controller(TailorMadeController::class)->group(function () {
        Route::get('/tailor/made', 'index')->name('index.tailor.made');
        Route::get('/form/tailor/made', 'formTailorMade')->name('form.tailor.made');
        Route::post('/tambah/tailor/made', 'tambahTailorMade')->name('tambah.tailor.made');
        Route::get('/edit/tailor/made/{id}', 'editTailorMade')->name('edit.tailor.made');
        Route::put('/update/tailor/made/{id}', 'updateTailorMade')->name('update.tailor.made');
        Route::delete('/delete/tailor/made/{id}', 'deleteTailorMade')->name('delete.tailor.made');
        Route::get('/desc/tailor/made/{id}', 'descTailorMade')->name('desc.tailor.made');
    });
    Route::controller(ReadyPackageController::class)->group(function () {
        Route::get('/ready/package', 'index')->name('index.ready.package');
        Route::get('/form/ready/package', 'formReady')->name('form.ready.package');
        Route::post('/tambah/ready/package', 'tambahReady')->name('tambah.ready.package');
        Route::get('/edit/ready/package/{id}', 'editReady')->name('edit.ready.package');
        Route::put('/update/ready/package/{id}', 'updateReady')->name('update.ready.package');
        Route::delete('/delete/ready/package/{id}', 'deleteReady')->name('delete.ready.package');
        Route::get('/desc/ready/package/{id}', 'descReady')->name('desc.ready.package');
    });
    Route::controller(OpenComeController::class)->group(function () {
        Route::get('/trip/akan/datang', 'index')->name('index.trip.akan.datang');
        Route::get('/form/trip/akan/datang', 'formTrip')->name('form.trip.akan.datang');
        Route::post('/tambah/trip/akan/datang', 'tambahTrip')->name('tambah.trip.akan.datang');
        Route::get('/edit/trip/akan/datang/{id}', 'editTrip')->name('edit.trip.akan.datang');
        Route::put('/update/trip/akan/datang/{id}', 'updateTrip')->name('update.trip.akan.datang');
        Route::delete('/delete/trip/akan/datang/{id}', 'deleteTrip')->name('delete.trip.akan.datang');
        Route::get('/desc/trip/akan/datang/{id}', 'descTrip')->name('desc.trip.akan.datang');

        Route::get('/download/{link}', 'download')->name('download');
        // Route::get('/link/{id}', 'link')->name('link.pdf');
    });
    Route::controller(OpenSelesaiController::class)->group(function () {
        Route::get('/trip/selesai', 'index')->name('index.trip.selesai');
        Route::get('/form/trip/selesai', 'formTrip')->name('form.trip.selesai');
        Route::post('/tambah/trip/selesai', 'tambahTrip')->name('tambah.trip.selesai');
        Route::get('/edit/trip/selesai/{id}', 'editTrip')->name('edit.trip.selesai');
        Route::put('/update/trip/selesai/{id}', 'updateTrip')->name('update.trip.selesai');
        Route::delete('/delete/trip/selesai/{id}', 'deleteTrip')->name('delete.trip.selesai');
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
