<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VariationTypeController;
use App\Http\Controllers\Admin\ProductvariationController;

use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/redirect',[AdminController::class,'redirect'])->name('redirect');
    
    Route::get('/category/add',[CategoryController::class,'addform'])->name('addform');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
// product routes
    Route::get('/product/add',[ProductController::class,'addform'])->name('productform');
    Route::post('/product/store',[ProductController::class,'store'])->name('productstore');
    Route::get('/product/list',[ProductController::class,'index'])->name('product.list');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/product/details/{id}',[ProductController::class,'details'])->name('product.details');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('product.update');
// variation type routes
    Route::get('/type',[VariationTypeController::class,'add'])->name('type.add');
    Route::post('/type',[VariationTypeController::class,'store'])->name('type.store');
    Route::post('/type/update',[VariationTypeController::class,'update'])->name('type.update');

// product variations routes

    Route::get('/variation/add',[ProductvariationController::class,'add'])->name('variation.add');
    Route::post('/variation/add',[ProductvariationController::class,'store'])->name('variation.store');






});
Route::get('/shop',function(){
    return view('frontend.shop');
})->name('shop');


// Home routes
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/logout',[AdminController::class,'logout'])->name('logging.out');


