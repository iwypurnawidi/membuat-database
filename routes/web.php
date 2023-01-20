<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelanggancontroller;
 use App\Http\Controllers\pakettransaksi2Controller;
use App\Http\Controllers\paket1controller;


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
Route::get('/create',[pelanggancontroller::class, 'create'])->name('pelanggan.create');
Route::post('/createpelanggan', [Pelanggancontroller::class, 'store'])->name('pelanggan.store');
Route::get('/edit/{id}', [Pelanggancontroller::class, 'edit'])->name('pelanggan.edit');
Route::post('/update/{id}', [Pelanggancontroller::class, 'update'])->name('pelanggan.update');
Route::get('/delete/{id}', [Pelanggancontroller::class, 'delete'])->name('pelanggan.delete');

//status data laundry
 Route::get('/pakettransaksi2',[pakettransaksi2Controller::class, 'indexy'])->name('pakettransaksi2.indexy');
Route::get('/createy',[pakettransaksi2Controller::class, 'createy'])->name('pakettransaksi2.createy');
Route::post('/createypakettransaksi2', [pakettransaksi2Controller::class, 'storey'])->name('pakettransaksi2.storey');
Route::get('/edity/{id}', [pakettransaksi2Controller::class, 'edity'])->name('pakettransaksi2.edity');
Route::post('/update{id}', [pakettransaksi2Controller::class, 'update'])->name('pakettransaksi2.update');
Route::get('/elete/{id}', [pakettransaksi2Controller::class, 'Delete'])->name('pakettransaksi2.Delete');
 
