<?php

use App\Http\Controllers\customercontroller;
use App\Models\customer;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('customers/create', [customercontroller::class,'create']);
Route::get('customers', [customercontroller::class,'index'])->name('customers.index');
Route::post('customers', [customercontroller::class,'store']);
Route::delete('customers/{customer}', [customercontroller::class,'destroy']);
Route::get('/customers/{customer}/edit',  [customercontroller::class,'edit']);
Route::put('/customers/{customer}',  [customercontroller::class,'update']);
