<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::middleware('auth')->group(function () {
    // Route::get('index', [PostController::class, 'index'])->name('post.index');
    // Route::get('create', [PostController::class, 'create'])->name('post.create');
    // Route::get('edit/{post}', [PostController::class, 'edit'])->name('post.edit');
    // Route::post('destroy/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    // Route::post('store', [PostController::class, 'store'])->name('post.store');
    Route::resource('post', PostController::class, ['except' => ['show']]);
});

require __DIR__ . '/auth.php';
