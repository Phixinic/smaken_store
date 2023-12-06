<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DashboardController;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail', [DashboardController::class, 'show'])->name('detail-barang');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::middleware('onlyGuest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProccess']);
});


Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/about', [AboutController::class, 'index'])->name('about');

// admin

Route::prefix('admin')->middleware('onlyAdmin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin-users');
    Route::get('/users/edit/{id}', [AdminController::class, 'show'])->name('user-show');
    Route::post('/users/{id}', [AdminController::class, 'changeStatus'])->name('change-status');

}); 
//seller
Route::prefix('seller')->middleware('onlySeller')->group(function(){
    Route::get('/', [SellerController::class, 'index'])->name('seller-dashboard');
   
}); 
