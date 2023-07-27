<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
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

//Back End Routing
Route::get('/admin', [BackendController::class, 'dashboard'])->name('dashboard');
Route::get('/create-post', [BackendController::class, 'create'])->name('create-post');
Route::get('/view-post', [BackendController::class, 'view'])->name('view-post');

//Front End Routing

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about-us');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');