<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontendController;
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


Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/servicos', [FrontendController::class, 'services'])->name('services');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/products/{subcat}', [FrontendController::class, 'productsSubCategory'])->name('products_sub_category');
Route::get('/product/{slug}', [FrontendController::class, 'product'])->name('product');
Route::get('/pecas', [FrontendController::class, 'pecas'])->name('pecas');
Route::get('/contacto', [FrontendController::class, 'contacto'])->name('contacto');

// forms
Route::post('/process/contacto', [FormsController::class, 'contact'])->name('contact');
Route::post('/process/pecas', [FormsController::class, 'pecas'])->name('contact');