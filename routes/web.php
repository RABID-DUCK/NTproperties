<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DirectionController;
use App\Http\Controllers\Admin\HighWayController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::get('/news-single/{news:id}', [NewsSingleController::class, 'show'])->name('news-single');
Route::get('/object-single', [ObjectSingleController::class, 'index'])->name('object-single');
Route::get('/objects', [ObjectsController::class, 'index'])->name('objects');
Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
Route::get('/search', [SearchController::class, 'index'])->name('partners');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function (){
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::group(['prefix' => 'regions'], function (){
           Route::get('/', [RegionController::class, 'index'])->name('admin.regions');
           Route::post('/store', [RegionController::class, 'store'])->name('admin.regions.store');
           Route::post('/update/{region}', [RegionController::class, 'update'])->name('admin.regions.update');
           Route::delete('/destroy/{region}', [RegionController::class, 'destroy'])->name('admin.regions.destroy');
        });

        Route::group(['prefix' => 'directions'], function (){
            Route::get('/', [DirectionController::class, 'index'])->name('admin.directions');
            Route::post('/store', [DirectionController::class, 'store'])->name('admin.directions.store');
            Route::post('/update/{direction}', [DirectionController::class, 'update'])->name('admin.directions.update');
            Route::delete('/destroy/{direction}', [DirectionController::class, 'destroy'])->name('admin.directions.destroy');
        });

        Route::group(['prefix' => 'highways'], function (){
            Route::get('/', [HighWayController::class, 'index'])->name('admin.highways');
            Route::post('/store', [HighWayController::class, 'store'])->name('admin.highways.store');
            Route::post('/update/{highway}', [HighWayController::class, 'update'])->name('admin.highways.update');
            Route::delete('/destroy/{highway}', [HighWayController::class, 'destroy'])->name('admin.highways.destroy');
        });

        Route::group(['prefix' => 'news'], function (){
            Route::get('/', [NewsController::class, 'index'])->name('admin.news');
            Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
            Route::post('/update/{direction}', [NewsController::class, 'update'])->name('admin.news.update');
            Route::delete('/destroy/{direction}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        });
    });
});


require __DIR__.'/auth.php';
