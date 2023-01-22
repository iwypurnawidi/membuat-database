<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelanggancontroller;
use App\Http\Controllers\paket1Controller;
use App\Http\Controllers\transaksi1Controller;


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
});
//paket transaksi
Route::get('/paket1',[Paket1controller::class, 'index1'])->name('paket1.index1');
Route::get('/add',[Paket1controller::class, 'add'])->name('paket1.add');
Route::post('/addpaket1',[Paket1controller::class, 'store1'])->name('paket1.store1');
Route::get('/Delete/{id}', [paket1controller::class, 'Delete'])->name('paket1.Delete');

//data pelanggan
Route::get('/pelanggan',[Pelanggancontroller::class, 'index'])->name('pelanggan.index');
Route::get('/createy',[pelanggancontroller::class, 'createy'])->name('pelanggan.createy');
Route::post('/createypelanggan', [Pelanggancontroller::class, 'store'])->name('pelanggan.store');
Route::get('/edity/{id}', [Pelanggancontroller::class, 'edity'])->name('pelanggan.edity');
Route::post('/update/{id}', [Pelanggancontroller::class, 'update'])->name('pelanggan.update');
Route::get('/delete/{id}', [Pelanggancontroller::class, 'delete'])->name('pelanggan.delete');

//status data laundry
Route::get('/transaksi1',[transaksi1Controller::class, 'index'])->name('transaksi1.index');
Route::get('/create',[transaksi1Controller::class, 'create'])->name('transaksi1.create');
Route::post('/createtransaksi1', [transaksi1Controller::class, 'store'])->name('transaksi1.store');
Route::get('/edit/{id}', [transaksi1Controller::class, 'edit'])->name('transaksi1.edit');
Route::post('/update{id}', [transaksi1Controller::class, 'update'])->name('transaksi1.update');
Route::get('/elete/{id}', [transaksi1Controller::class, 'Delete'])->name('transaksi1.Delete');
 
