<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// home
Route::get('/', [HomeController::class, 'index']);

// product
Route::get('/product', [ProductController::class, 'show']);
Route::get('product/{product:url}', [ProductController::class, 'detailProduct']);

// dashboad product
Route::get('/dashboard/product', function(){
    return view('admin-dashboard.product.index', [
        'title' => 'Anisa Collection - Admin Dashboard - Product',
    ]);
})->middleware('admin');

// product for collection
Route::get('/collection/{category:slug}', [ProductController::class, 'productCategory']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
