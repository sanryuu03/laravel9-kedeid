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

Route::get('/admin', [AdminKedeController::class, 'index'] );
Route::get('/admin/register', [AdminKedeController::class, 'register'])->name('register');
Route::post('/admin/register', [AdminKedeController::class, 'register_action'])->name('register.action');
Route::get('/admin/login', [AdminKedeController::class, 'login'] )->name('admin.login');
Route::post('/admin/login', [AdminKedeController::class, 'login_action'] )->name('login.action');
Route::get('/admin/logout', [AdminKedeController::class, 'logout'])->name('logout');

Route::get('/admin/landingpageheader', [LandingPageHeaderController::class, 'index'] );
Route::get('/admin/landingpagestatsdetail', [LandingPageStatsDetailController::class, 'index'] );
Route::get('/admin/landingpagejenisproduk', [JenisProdukController::class, 'index'] );
Route::get('/admin/landingpageaplikasikede', [AplikasiKedeController::class, 'index'] );
Route::get('/admin/formlandingpageaplikasikede', [AplikasiKedeController::class, 'formCreate'] );
Route::get('/admin/tutorialbelanja', [TutorialBelanjaController::class, 'index'] );
Route::get('/admin/tutorialwallet', [WalletController::class, 'index'] );
Route::get('/admin/tutorialmendaftar', [TutorialMendaftarController::class, 'index'] );
Route::get('/admin/testimoni', [TestimoniController::class, 'index'] );
Route::get('/admin/faqs', [FaqsController::class, 'index'] );
Route::get('/admin/formfaqs', [FaqsController::class, 'formCreate'] );
Route::get('/admin/kedeid', [KedeIdController::class, 'index'] );
Route::get('/admin/formkedeid', [KedeIdController::class, 'formCreate'] );

