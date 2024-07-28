<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DirectionController;
use App\Http\Controllers\Admin\HighWayController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main-page')->middleware('locale');

Route::get('/services', [ServicesController::class, 'index'])->name('services')->middleware('locale');

Route::get('/analitick', [AnalitickController::class, 'index'])->name('analitick')->middleware('locale');
Route::get('/analitick-single', [AnalitickController::class, 'show'])->name('analitick-single')->middleware('locale');
Route::get('/analitic-overview', [AnaliticOverviewController::class, 'index'])->name('analitic-overview')->middleware('locale');

Route::get('/company', [CompanyController::class, 'index'])->name('company')->middleware('locale');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts')->middleware('locale');

Route::get('/guide', [GuideController::class, 'index'])->name('guide')->middleware('locale');
Route::get('/guide-single', [GuideController::class, 'show'])->name('guide-single')->middleware('locale');

Route::get('/news-single/{news:id}', [NewsSingleController::class, 'show'])->name('news-single')->middleware('locale');
Route::get('/news', [NewsSingleController::class, 'index'])->name('news')->middleware('locale');

Route::get('/object-single', [ObjectSingleController::class, 'index'])->name('object-single')->middleware('locale');
Route::get('/objects', [ObjectsController::class, 'index'])->name('objects')->middleware('locale');
Route::get('/objects/{object:id}/{id}', [ObjectsController::class, 'show'])->name('objects.show')->middleware('locale');
Route::get('/object-list', [ObjectsController::class, 'list'])->name('object-list')->middleware('locale');

Route::get('/partners', [PartnersController::class, 'index'])->name('partners')->middleware('locale');
Route::get('/search', [SearchController::class, 'index'])->name('search')->middleware('locale');

Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews')->middleware('locale');
Route::get('/reviews-single/{reviews:id}', [ReviewsController::class, 'show'])->name('reviews.single')->middleware('locale');

Route::post('/feedback', [\App\Http\Controllers\FeedBackController::class, 'store'])->name('feedback')->middleware('locale');
Route::post('/mailling', [\App\Http\Controllers\MaillingUserController::class, 'store'])->name('mailling')->middleware('locale');

Route::post('/language', [LanguageController::class, 'switchLang'])->name('language.switch');

Route::middleware(['auth', 'admin.email'])->group(function () {
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
            Route::get('show/{news:id}', [NewsController::class, 'show'])->name('admin.news.show');
            Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
            Route::post('/update/{news:id}', [NewsController::class, 'update'])->name('admin.news.update');
            Route::delete('/destroy/{news:id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        });

        Route::group(['prefix' => 'reviews'], function (){
            Route::get('/', [\App\Http\Controllers\Admin\ReviewsController::class, 'index'])->name('admin.reviews');
            Route::get('show/{reviews:id}', [\App\Http\Controllers\Admin\ReviewsController::class, 'show'])->name('admin.reviews.show');
            Route::post('/store', [\App\Http\Controllers\Admin\ReviewsController::class, 'store'])->name('admin.reviews.store');
            Route::post('/update/{reviews:id}', [\App\Http\Controllers\Admin\ReviewsController::class, 'update'])->name('admin.reviews.update');
            Route::delete('/destroy/{reviews:id}', [\App\Http\Controllers\Admin\ReviewsController::class, 'destroy'])->name('admin.reviews.destroy');
        });

        Route::group(['prefix' => 'objects'], function (){
            Route::get('/', [\App\Http\Controllers\Admin\ObjectsController::class, 'index'])->name('admin.objects');
            Route::get('show/{object:id}', [\App\Http\Controllers\Admin\ObjectsController::class, 'show'])->name('admin.objects.show');
            Route::post('/store', [\App\Http\Controllers\Admin\ObjectsController::class, 'store'])->name('admin.objects.store');
            Route::post('/update/{object:id}', [\App\Http\Controllers\Admin\ObjectsController::class, 'update'])->name('admin.objects.update');
            Route::delete('/destroy/{object:id}', [\App\Http\Controllers\Admin\ObjectsController::class, 'destroy'])->name('admin.objects.destroy');
        });

        Route::group(['prefix' => 'feedbacks'], function (){
            Route::get('/', [\App\Http\Controllers\Admin\FeedBackController::class, 'index'])->name('admin.feedbacks');
            Route::get('show/{feed_backs:id}', [\App\Http\Controllers\Admin\FeedBackController::class, 'show'])->name('admin.feedbacks.show');
        });

        Route::group(['prefix' => 'maillings'], function (){
            Route::get('/', [\App\Http\Controllers\Admin\MaillingUserController::class, 'index'])->name('admin.maillings');
//            Route::get('show/{mailling_users:id}', [\App\Http\Controllers\Admin\MaillingUserController::class, 'show'])->name('admin.maillings.show');
        });

        Route::delete('/images/delete/{image:id}', [ImagesController::class, 'delete'])->name('admin.objects-images.destroy');
    });
});


require __DIR__.'/auth.php';
