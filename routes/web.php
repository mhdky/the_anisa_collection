<?php

use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/dashboard/product', [DashboardProductController::class, 'index'])->middleware('admin');
// add product
Route::get('/dashboard/product/add', [DashboardProductController::class, 'create'])->middleware('admin');
Route::post('/dashboard/product/add', [DashboardProductController::class, 'store'])->middleware('admin');
// edit product
Route::get('/dashboard/product/{product:url}/edit', [DashboardProductController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/product/{product:id}/update', [DashboardProductController::class, 'update'])->middleware('admin');
// delete product
Route::delete('/dashboard/product/{product:id}/delete', [DashboardProductController::class, 'destroy'])->middleware('admin');
Route::get('/dashboard/product/{product:id}/delete', function() {
    return abort(404);
});

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
