<?php

use Illuminate\Support\Facades\Route;

// middleware auth group
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
        Route::get('/homepage', [App\Http\Controllers\Backend\Settings\HomepageController::class, 'index']);
        // scripts
        Route::resource('/script', App\Http\Controllers\Backend\Settings\ScriptController::class)->only(['index', 'update', 'destroy', 'store']);
        Route::get('/script/get-all', [App\Http\Controllers\Backend\Settings\ScriptController::class, 'getAllScript']);
        // infos - policies - terms and condition aboutus
        Route::resource('/infos', App\Http\Controllers\Backend\Info\InfoController::class)->only(['index', 'destroy', 'store']);
        Route::post('/infos/update', [App\Http\Controllers\Backend\Info\InfoController::class, 'updateInfo']);
        Route::post('/get-all-infos', [App\Http\Controllers\Backend\Info\InfoController::class, 'getAll']);

        // logo
        Route::post('/logo', [App\Http\Controllers\Backend\Settings\HomepageController::class, 'uploadLogo']);
        Route::post('/logo/update', [App\Http\Controllers\Backend\Settings\HomepageController::class, 'updateLogo']);

        // Menu
        Route::post('/menu', [App\Http\Controllers\Backend\Settings\HomepageController::class, 'uploadMenu']);

        // map
        Route::post('/map', [App\Http\Controllers\Backend\Settings\ContactController::class, 'uploadMap']);
        Route::post('/map/update', [App\Http\Controllers\Backend\Settings\ContactController::class, 'updateMap']);
        //sliders-------------------------------------------------------------------------------------------
        Route::resource('/sliders', App\Http\Controllers\Backend\Settings\SlidersController::class)->only(['update', 'destroy', 'store']);
        // analytics
        Route::get('/analytics', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'index']);
        Route::get('/analytics/page-views/{days}', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'getPageViewsByDate']);
        Route::get('/analytics/user-types', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'getUserTypes']);
        Route::get('/analytics/top-browsers', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'getTopBrowsers']);
        Route::get('/analytics/most-visited-pages', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'getMostVisitedPages']);
        Route::get('/analytics/top-reffers', [App\Http\Controllers\Backend\Settings\AnalyticsController::class, 'getTopReffers']);
        // contacts---------------------------------------------------------------------------------------------
        Route::resource('/contact', App\Http\Controllers\Backend\Settings\ContactController::class)->only(['index', 'update', 'destroy']);
        Route::post('/get-all-contacts', [App\Http\Controllers\Backend\Settings\ContactController::class, 'getAllContacts']);
        Route::get('/set-seen/contact/{id}', [App\Http\Controllers\Backend\Settings\ContactController::class, 'setSeenContact']);


        //our team

        Route::resource('/team', App\Http\Controllers\Backend\Settings\TeamController::class)->only(['index', 'update', 'destroy', 'store']);
        Route::post('changeteamstatus/{id}', [App\Http\Controllers\Backend\Settings\TeamController::class, 'changeteamstatus']);


        // Users---------------------------------------------------------------------------------------------
        // Route::resource('/users', App\Http\Controllers\Backend\Users\UserController::class)->only(['index', 'update', 'destroy']);
        // Route::post('/get-all-users', [App\Http\Controllers\Backend\Users\UserController::class, 'getAllUsers']);

        // blogs----------------------------------------------------------------------------------------------
        Route::resource('/blogs', App\Http\Controllers\Backend\Pages\BlogController::class)->only(['index', 'store', 'destroy']);
        Route::post('/get-all-blogs', [App\Http\Controllers\Backend\Pages\BlogController::class, 'getAllBlogs']);
        Route::post('/blogs/update', [App\Http\Controllers\Backend\Pages\BlogController::class, 'updateBlog']);

        // category-----------------------------------------------------------------------------------------
        Route::resource('/category', App\Http\Controllers\Backend\Service\CategoryController::class)->only(['index', 'store', 'destroy']);
        Route::post('/category/get-all-category', [App\Http\Controllers\Backend\Service\CategoryController::class, 'getAllCategory']);
        Route::get('/category/get-all-category-name', [App\Http\Controllers\Backend\Service\CategoryController::class, 'getAllCategoryName']);
        Route::post('/category/update', [App\Http\Controllers\Backend\Service\CategoryController::class, 'updateCategory']);
        Route::get('/categories', [App\Http\Controllers\Backend\Service\CategoryController::class, 'getallcategories']);

        //services-------------------------------------------------------------------------------

        Route::resource('services', App\Http\Controllers\Backend\Settings\ServiceController::class)->only(['index', 'store',  'destroy']);
        Route::post('/get-all-services', [App\Http\Controllers\Backend\Settings\ServiceController::class, 'getAllServices']);
        Route::post('/service/update', [App\Http\Controllers\Backend\Settings\ServiceController::class, 'updateService']);

        // faqs-----------------------------------------------------------------------------------------
        Route::resource('faqs', App\Http\Controllers\Backend\Settings\FaqsController::class)->only(['index', 'store',  'destroy']);
        Route::post('/get-all-faqs', [App\Http\Controllers\Backend\Settings\FaqsController::class, 'getAllFaqs']);
        Route::post('/faqs/update', [App\Http\Controllers\Backend\Settings\FaqsController::class, 'updateFaqs']);
    });
});