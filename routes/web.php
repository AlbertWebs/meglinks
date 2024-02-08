<?php

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




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('homes');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/center-of-excellence/{slung}', [App\Http\Controllers\HomeController::class, 'excellence'])->name('excellence');
Route::get('/solutions/{slung}', [App\Http\Controllers\HomeController::class, 'solutions'])->name('solutions');
Route::get('/our-portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/our-portfolio/slung', [App\Http\Controllers\HomeController::class, 'portfolio_slung'])->name('portfolio_slung');
Route::get('/latest-news/{slung}', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/project-details', [App\Http\Controllers\HomeController::class, 'project_details'])->name('project-details');
Route::get('/our-team', [App\Http\Controllers\HomeController::class, 'our_team'])->name('our-team');
Route::get('/latest-news', [App\Http\Controllers\HomeController::class, 'latest_news'])->name('latest-news');
Route::get('/meglink-homes', [App\Http\Controllers\HomeController::class, 'meglink_homes'])->name('meglink-homes');
Route::get('/meglink-homes/{slung}', [App\Http\Controllers\HomeController::class, 'meglink_home'])->name('meglink-home');

Auth::routes();
