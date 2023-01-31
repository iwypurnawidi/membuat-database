<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelanggancontroller;
use App\Http\Controllers\paket1Controller;
use App\Http\Controllers\transaksi1Controller;
use App\Http\Controllers\loginController;



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
})->middleware('auth');
//paket transaksi
Route::get('/paket1',[Paket1controller::class, 'index1'])->name('paket1.index1')->middleware('auth');
Route::get('/add',[Paket1controller::class, 'add'])->name('paket1.add');
Route::post('/addpaket1',[Paket1controller::class, 'store2'])->name('paket1.store2');
Route::get('/edd/{id}', [Paket1controller::class, 'edd'])->name('paket1.edd');
Route::post('/update1/{id}', [Paket1controller::class, 'update1'])->name('paket1.update1');
Route::get('/Delete/{id}', [paket1controller::class, 'Delete'])->name('paket1.Delete');

//data pelanggan
Route::get('/pelanggan',[Pelanggancontroller::class, 'index'])->name('pelanggan.index')->middleware('auth');
Route::get('/createy',[pelanggancontroller::class, 'createy'])->name('pelanggan.createy');
Route::post('/createypelanggan', [Pelanggancontroller::class, 'store'])->name('pelanggan.store');
Route::get('/edity/{id}', [Pelanggancontroller::class, 'edity'])->name('pelanggan.edity');
Route::post('/update/{id}', [Pelanggancontroller::class, 'update'])->name('pelanggan.update');
Route::get('/delete/{id}', [Pelanggancontroller::class, 'delete'])->name('pelanggan.delete');

//status data laundry
Route::get('/transaksi1',[transaksi1Controller::class, 'index'])->name('transaksi1.index')->middleware('auth');
Route::get('/create',[transaksi1Controller::class, 'create'])->name('transaksi1.create');
Route::post('/createtransaksi1', [transaksi1Controller::class, 'store'])->name('transaksi1.store');
Route::get('/edit/{id}', [transaksi1Controller::class, 'edit'])->name('transaksi1.edit');
Route::post('/update{id}', [transaksi1Controller::class, 'update'])->name('transaksi1.update');
Route::get('/elete/{id}', [transaksi1Controller::class, 'Delete'])->name('transaksi1.Delete');
 
Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/loginproses',[loginController::class, 'loginproses'])->name('loginproses');

Route::get('/register',[loginController::class, 'register'])->name('register');
Route::post('/registeruser',[loginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[loginController::class, 'logout'])->name('logout');