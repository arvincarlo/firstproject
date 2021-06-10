<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CarsController;

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

// Route that sends back a view
// Route::get('/', function () {
//     return view('welcome');
// });

// Main routes
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/about/{name}', [PagesController::class, 'about_us']);


// Posts endpoint
Route::get('/posts', [PostsController::class, 'index']);

// Laravel 8 (new) examples
Route::get('/products', 
    [ProductsController::class, 'index'])->name('products');

// Cars
Route::resource('/cars', CarsController::class);


// Route::get('/products/about', [ProductsController::class, 'about']);

// Pattern is integer
// Route::get('/products/{id}', 
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is string + array
// Route::get('/products/{name}/{id}',
//     [ProductsController::class, 'show'])->where([
//         'name' => '[a-zA-Z0-9]+',
//         'id' => '[0-9]+'
//     ]);

// Laravel 8 (also new)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Before Laravel 8
// Route::get('/products', 'ProductsController@index');

