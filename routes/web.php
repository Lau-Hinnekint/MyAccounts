<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('trans/list', [TransactionController::class, 'index'])->name('transactionList');
Route::get('trans/add', [TransactionController::class, 'create'])->name('transactionAdd');
Route::post('trans/add', [TransactionController::class, 'store'])->name('transactionStore');
Route::get('trans/edit/{id}', [TransactionController::class, 'edit'])->name('transactionEdit');
Route::put('trans/update/{id}', [TransactionController::class, 'update'])->name('transactionUpdate');
Route::delete('trans/delete/{id}', [TransactionController::class, 'destroy'])->name('transactionDestroy');
Route::get('cat/list', [CategoryController::class, 'index'])->name('categoryList');
Route::post('cat/add', [CategoryController::class, 'store'])->name('categoryStore');