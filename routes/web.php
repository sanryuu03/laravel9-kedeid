<?php

use App\Http\Controllers\AdminKedeController;
use App\Http\Controllers\AplikasiKedeController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KedeIdController;
use App\Http\Controllers\LandingPageHeaderController;
use App\Http\Controllers\LandingPageStatsDetailController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TutorialBelanjaController;
use App\Http\Controllers\TutorialMendaftarController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', [AdminKedeController::class, 'index']);
Route::get('/admin/register', [AdminKedeController::class, 'register'])->name('register');
Route::post('/admin/register', [AdminKedeController::class, 'register_action'])->name('register.action');
Route::get('/admin/login', [AdminKedeController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminKedeController::class, 'login_action'])->name('login.action');
Route::get('/admin/logout', [AdminKedeController::class, 'logout'])->name('logout');

Route::get('/admin/landingpageheader', [LandingPageHeaderController::class, 'index'])->name('header');
Route::post('/admin/upload/proses', [LandingPageHeaderController::class, 'proses_upload'])->name('upload.header');
Route::post('/admin/upload/hapus/{id}', [LandingPageHeaderController::class, 'hapus'])->name('header.destroy');

Route::get('/admin/landingpagestatsdetail', [LandingPageStatsDetailController::class, 'index'])->name('stats.detail');
Route::post('/admin/landingpagestatsdetail', [LandingPageStatsDetailController::class, 'store'])->name('stats.post');
Route::post('/admin/landingpagestatsdetail/hapus/{id}', [LandingPageStatsDetailController::class, 'delete'])->name('stats.delete');

Route::get('/admin/landingpagejenisproduk', [JenisProdukController::class, 'index']);
Route::post('/admin/landingpagejenisproduk', [JenisProdukController::class, 'store'])->name('jenisproduk.post');
Route::post('/admin/landingpagejenisproduk/hapus/{id}', [JenisProdukController::class, 'destroy'])->name('jenisproduk.destroy');

Route::get('/admin/landingpageaplikasikede', [AplikasiKedeController::class, 'index'])->name('aplikasikede.index');
Route::post('/admin/landingpageaplikasikede/hapus/{id}', [AplikasiKedeController::class, 'destroy'])->name('aplikasikede.destroy');

Route::get('/admin/formlandingpageaplikasikede', [AplikasiKedeController::class, 'formCreate']);
Route::post('/admin/formlandingpageaplikasikede', [AplikasiKedeController::class, 'store'])->name('aplikasikede.post');

Route::get('/admin/tutorialbelanja', [TutorialBelanjaController::class, 'index'] )->name('tutorialbelanja');
Route::post('/admin/tutorialbelanja', [TutorialBelanjaController::class, 'store'])->name('tutorialbelanja.post');
Route::post('/admin/tutorialbelanja/hapus/{id}', [TutorialBelanjaController::class, 'destroy'])->name('tutorialbelanja.destroy');

Route::get('/admin/tutorialwallet', [WalletController::class, 'index'])->name('tutorialwallet');
Route::post('/admin/tutorialwallet', [WalletController::class, 'store'])->name('tutorialwallet.post');
Route::post('/admin/tutorialwallet/hapus/{id}', [WalletController::class, 'destroy'])->name('tutorialwallet.destroy');

Route::get('/admin/tutorialmendaftar', [TutorialMendaftarController::class, 'index'])->name('tutorialmendaftar');
Route::post('/admin/tutorialmendaftar', [TutorialMendaftarController::class, 'store'])->name('tutorialmendaftar.post');
Route::post('/admin/tutorialmendaftar/hapus/{id}', [TutorialMendaftarController::class, 'destroy'])->name('tutorialmendaftar.destroy');

Route::get('/admin/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::post('/admin/testimoni', [TestimoniController::class, 'store'])->name('testimoni.post');
Route::post('/admin/testimoni/hapus/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

Route::get('/admin/faqs', [FaqsController::class, 'index'])->name('faq');
Route::post('/admin/faqs/hapus/{id}', [FaqsController::class, 'destroy'])->name('faq.destroy');

Route::get('/admin/formfaqs', [FaqsController::class, 'formCreate']);
Route::post('/admin/formfaqs', [FaqsController::class, 'store'])->name('faq.post');

Route::get('/admin/kedeid', [KedeIdController::class, 'index'])->name('kedeid');
Route::post('/admin/kedeid/hapus/{id}', [KedeIdController::class, 'destroy'])->name('kedeid.destroy');

Route::get('/admin/formkedeid', [KedeIdController::class, 'formCreate']);
Route::post('/admin/formkedeid', [KedeIdController::class, 'store'])->name('kedeid.post');

