<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ProductController;
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
    return view('pages.landing.home');
});

Route::get('/home', [HomeController::class, 'index'])->name('landing-home');
Route::get('/products', [ProductController::class, 'index'])->name('landing-product');
Route::get('{id}/detail', [ProductController::class, 'detail'])->name('detail');
Route::get('/about-us', [AboutController::class, 'index'])->name('landing-about');
Route::get('/join-us', [JoinController::class, 'index'])->name('landing-join-us');

Route::get('new-home', function(){
    return view('e-commerce.index');
});

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin'])->name('login.store');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware('auth')->group(function(){
        Route::get('dashboard', function(){
            return view('admin.pages.dashboard');
        })->name('dashboard');

        Route::get('list', [AssetController::class, 'index'])->name('index');

        Route::get('create', [AssetController::class, 'create'])->name('create');
        Route::post('create', [AssetController::class, 'store'])->name('store');

        Route::get('{id}/edit', [AssetController::class, 'edit'])->name('edit');
        Route::put('{id}/edit', [AssetController::class, 'update'])->name('update');

        Route::delete('{id}/delete', [AssetController::class, 'delete'])->name('delete');
    });
});
