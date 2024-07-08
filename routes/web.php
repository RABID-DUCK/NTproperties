<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use \App\Http\Controllers\AnalitickController;
use \App\Http\Controllers\AnaliticOverviewController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\ContactsController;
use \App\Http\Controllers\GuideController;
use \App\Http\Controllers\NewsSingleController;
use \App\Http\Controllers\ObjectSingleController;
use \App\Http\Controllers\ObjectsController;
use \App\Http\Controllers\PartnersController;
use \App\Http\Controllers\SearchController;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main-page');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/analitick', [AnalitickController::class, 'index'])->name('analitick');
Route::get('/analitic-overview', [AnaliticOverviewController::class, 'index'])->name('analitic-overview');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/guide', [GuideController::class, 'index'])->name('guide');
Route::get('/news-single', [NewsSingleController::class, 'index'])->name('news-single');
Route::get('/object-single', [ObjectSingleController::class, 'index'])->name('object-single');
Route::get('/objects', [ObjectsController::class, 'index'])->name('objects');
Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
Route::get('/search', [SearchController::class, 'index'])->name('partners');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
