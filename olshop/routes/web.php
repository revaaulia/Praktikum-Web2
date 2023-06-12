<?php

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Halo Selamat Sore Teman-teman Semuaa..";
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "Halaman Profile",
        "nama" => "Reva Aulia Faradilah",
        "umur" => 20,
        "email" => "revaauliafaradilah@gmail.com",
    ]);
});

Route::get('/profilenf', function () {
    return view('profilenf');
});

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan', [
        "title" => "Form Pemeriksaan",
        "tekanandarah" => "120/80 mmhg",
        "asamurat" => "Pria : < 7 mg/dl | Wanita: < 6 mg/dl",
        "kolesterol" => "< 200 mg/dl",
        "guladarah1" => "Puasa : 70-110 mg/dl",
        "guladarah2" => "2 jam setelah makan : 100-150 mg/dl",
        "guladarah3" => "Sewaktu/acak : 70-125 mg/dl",
    ]);
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/inputform', [ForminputController::class, 'index']);
Route::post('/inputform', [ForminputController::class, 'output']);

// ini route untuk tampilan admin
Route::prefix('admin')-> group (function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
});

// ini route untuk tampilan frontend
Route::prefix('frontend')-> group (function (){
Route::get('/dashboard', [FrontendController::class, 'index_frontend']);
Route::get('/about', [AboutController::class, 'index']);
});

Route::prefix('admin')-> group (function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
});

