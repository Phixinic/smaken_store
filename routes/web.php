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
Route::get('/product/{product:slug}', [DashboardController::class, 'show'])->name('detail-barang');

Route::get('/getReccomendation', [DashboardController::class, 'getReccomendation'])->name('getReccomendation');
Route::get('/getDataProduct', [DashboardController::class, 'getDataProduct'])->name('getDataProduct');
Route::get('/getDetailProduct/{any}', [DashboardController::class, 'getDetailProduct'])->name('getDetailProduct');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::middleware('onlyGuest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProccess']);
});


// Route::get('/dummy', function(){
//     return view('dummy');
// });

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/about', [AboutController::class, 'index'])->name('about');

// admin

Route::prefix('admin')->middleware('onlyAdmin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin-users');

    Route::get('/category', [AdminController::class, 'category'])->name('admin-category');
    Route::get('/category/add', [AdminController::class, 'createCateg'])->name('add-category');
    Route::post('/category/add', [AdminController::class, 'storeCateg']);
    Route::get('/category/edit/{id}', [AdminController::class, 'editCateg'])->name('edit-category');
    Route::post('/category/edit/{id}', [AdminController::class, 'updateCateg']);
    Route::delete('/category/{id}', [AdminController::class, 'deleteCateg'])->name('delete-category');

    Route::get('/product', [AdminController::class, 'product'])->name('admin-product');
    Route::get('/product/create', [AdminController::class, 'create'])->name('create-product');
    Route::get('/product/{slug}', [AdminController::class, 'showProduct'])->name('show-product');
    Route::post('/product/{id}', [AdminController::class, 'changeStatProduct'])->name('status-product');
    // Route::post('/product/create', [AdminController::class, 'store'])->name('store-product');
    
    Route::get('/users/edit/{id}', [AdminController::class, 'show'])->name('user-show');
    Route::post('/users/{id}', [AdminController::class, 'changeStatus'])->name('change-status');

}); 
//seller
Route::prefix('seller')->middleware('onlySeller')->group(function(){
    Route::get('/', [SellerController::class, 'index'])->name('seller-dashboard');
    Route::get('/product', [SellerController::class, 'product'])->name('product-user');
    Route::get('/product/create', [SellerController::class, 'create'])->name('add-product');
    Route::post('/product/create', [SellerController::class, 'store']);
    Route::delete('/product/destroyProduct/{product:slug}', [SellerController::class, 'destroyProduct'])->name('product-delete');
   
}); 
