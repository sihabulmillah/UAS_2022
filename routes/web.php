<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\DiamondController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
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


Route::get('/masuk',function(){
    return view('masuk');
})->name('masuk');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'ceklogin'])->name('cekLogin');

Route::group(['middleware' => ['auth:pengguna', 'level:a,s']], function () {
Route::resource("/game",GameController::class);
Route::resource("/pesanan",PesananController::class);
Route::resource("/pembayaran",PembayaranController::class);
Route::resource("/diamond",DiamondController::class);
Route::resource("/user",UserController::class);
});


Route::get('/', [FrontendController::class, 'landing'])->name('landing');
Route::get('/games', [FrontendController::class, 'game'])->name('games');
Route::get('/topup/{id}', [FrontendController::class, 'topup'])->name('topup');
Route::post('/save', [FrontendController::class, 'store'])->name('save');
Route::get('/checkout/{id}', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/bayar', [FrontendController::class, 'bayar'])->name('bayar');




// {{ $data['jumlah_diamond'] * $data->diamond->harga_diamond }};