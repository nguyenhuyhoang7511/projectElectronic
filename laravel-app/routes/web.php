<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    return env('MY_NAME');
});


// ADMIN


// CUSTOMER


// PRODUCT
// Get all product
Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/product/{id}', [ProductController::class, 'show']);
// Get detail product
// Route::get('/product/{id}', [ProductController::class, 'getProduct']);
// Create product
Route::post('/add/product', [ProductController::class, 'store']);

// Route::get('/test', function () {
//     return "Hello everyone 12345";
// });

// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => "Nguyen Huy Hoang",
//         'email' => "Nguyenhoang080721@gmail.com"
//     ]);
// });
