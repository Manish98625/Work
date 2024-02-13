<?php

use App\Http\Controllers\Frontend\BillController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\frontend\DirectorController;
use App\Http\Controllers\Frontend\MasterController;
use App\Http\Controllers\Frontend\MessageController;
use App\Http\Controllers\Frontend\PlaceController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\WaterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('user', 'UserCrudController');
    Route::crud('permission', 'PermissionCrudController');
    Route::crud('role', 'RoleCrudController');
}); // this should be the absolute last line of this file

Route::group([

    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers',
], function () { // custom admin routes

    Route::crud('director', 'DirectorCrudController');
    Route::crud('purifier', 'PurifierCrudController');
    Route::crud('products', 'ProductsCrudController');
    Route::crud('bill', 'BillCrudController');

});

Route::group([
    'prefix' => '',
    'middleware' => ['web'],
    'namespace' => 'App\Http\Controllers\Frontend',
], function () {
    route::get('/profile', [MasterController::class, 'index'])->name('profile');
    route::get('/index', [HomeController::class, 'index'])->name('home');
    route::get('/add', [HomeController::class, 'home'])->name('add');
    route::post('/add', [HomeController::class, 'store'])->name('store');
    route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
    route::put('/update/{id}', [HomeController::class, 'update'])->name('update');
    route::post('delete/{id}', [HomeController::class, 'delete']);
    route::get('/place', [PlaceController::class, 'index'])->name('place.place');
    Route::get('/all', [ProductController::class, 'data'])->name('all');
    Route::get('right', [ProductsController::class, 'data'])->name('right');
    Route::get('aboutus', [DirectorController::class, 'data'])->name('aboutus');
    route::get('blog', [BlogController::class, 'data'])->name('blog');
    Route::get('contact', [MessageController::class, 'index'])->name('contact');
    Route::post('message', [MessageController::class, 'store'])->name('message');
    Route::get('water', [WaterController::class, 'index'])->name('water');
    Route::get('bill', [BillController::class, 'bill'])->name('bill');

});
