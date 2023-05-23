<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\City;
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

// my account
Route::get('/account', [AccountController::class, 'index'])->middleware('auth');

// product
Route::get('/product', [ProductController::class, 'show']);
Route::get('/product/{product:url}', [ProductController::class, 'detailProduct']);

// dashboad product
Route::get('/dashboard/product', [DashboardProductController::class, 'index'])->middleware('admin');
// add product
Route::get('/dashboard/product/add', [DashboardProductController::class, 'create'])->middleware('admin');
Route::post('/dashboard/product/add', [DashboardProductController::class, 'store'])->middleware('admin');
// edit product
Route::get('/dashboard/product/{product:url}/edit', [DashboardProductController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/product/{product:id}/update', [DashboardProductController::class, 'update'])->middleware('admin');
Route::get('/dashboard/product/{product:id}/update', function() {
    return abort('404');
});
// delete product
Route::delete('/dashboard/product/{product:id}/delete', [DashboardProductController::class, 'destroy'])->middleware('admin');
Route::get('/dashboard/product/{product:id}/delete', function() {
    return abort(404);
});

// product for collection
Route::get('/collection/{category:slug}', [ProductController::class, 'productCategory']);

// dashboard order
Route::get('/dashboard/order', [DashboardOrderController::class, 'index'])->middleware('admin');
// nomor resi
Route::patch('/dashboard/order/{order:id}', [DashboardOrderController::class, 'store'])->middleware('admin');
Route::get('/dashboard/order/{order:id}', function() {
    return abort('404');
});

// orders
Route::post('/order/{product:id}', [OrderController::class, 'order'])->middleware('auth');
Route::get('/order/{product:id}', function() {
    return abort('404');
});
// all order
Route::get('/order', [OrderController::class, 'index'])->middleware('auth');
// pay order
Route::get('/pay/{url_pembayaran}', [OrderController::class, 'pay'])->middleware('auth');
Route::patch('/pay/{order:id}', [OrderController::class, 'payStore'])->middleware('auth');
Route::patch('/paysecond/{order:id}', [OrderController::class, 'payStoreSecond'])->middleware('auth');
Route::get('/paysecond/{order:id}', function() {
    return abort('404');
});
Route::get('/ok', function() {
    return back()->with('ok', 'Successfully added to shopping bag');
});

//bag
Route::get('/bag', [BagController::class, 'index'])->middleware('auth');
// delete product in bag
Route::delete('/bag/{order_detail:id}/delete', [BagController::class, 'destroy'])->middleware('auth');
Route::get('/bag/{order_detail:id}/delete', function() {
    return abort('404');
});

// checkout
Route::get('/checkout/{order:url}', [CheckoutController::class, 'index'])->middleware('auth');
// checkout data detail
Route::post('/checkout/{order:id}', [CheckoutController::class, 'store'])->middleware('auth');

// setting
Route::get('/dashboard/setting', [DashboardSettingController::class, 'index'])->middleware('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// cant
Route::get('/dashboard', function() {
    return abort('404');
});
Route::get('/user/profile', function() {
    return abort('404');
});
Route::get('/404', function() {
    return abort('404');
});