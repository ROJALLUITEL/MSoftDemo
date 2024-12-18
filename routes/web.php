<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BillController;
use  App\Http\Controllers\DiscountController;
use  App\Models\Bill;
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

// Route::get('/bill', [BillController::class, 'index'])->name('bill.index');
// Route::get('/bill/create', [BillController::class, 'create'])->name('bill.create');
// Route::post('/bill/store', [BillController::class, 'store'])->name('bill.store');
// Route::get('/bill/{bill}/edit', [BillController::class, 'edit'])->name('bill.edit');
// Route::put('/bill/{bill}/update', [BillController::class, 'update'])->name('bill.update');
// Route::delete('/bill/{bill}/destroy', [BillController::class, 'destroy'])->name('bill.destroy');

Route::resource('bill', BillController::class);