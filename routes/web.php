<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    // 'verify' => false, // Email Verification Routes...
]);

// logo
Route::get('/get-logo', [App\Http\Controllers\Backend\Settings\HomepageController::class, 'getLogo']);
// contact page
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about']);
Route::post('/save-contact', [App\Http\Controllers\Frontend\FrontendController::class, 'saveContact']);

// info pages like(about us - terms and condition)
Route::get('/infos/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'infos']);

//  frontend controllers
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);
Route::get('/reservation', [App\Http\Controllers\Frontend\FrontendController::class, 'reservation']);
Route::get('/get-logged-user', [App\Http\Controllers\Frontend\FrontendController::class, 'getLoggedUser']);
Route::post('/reservation/save', [App\Http\Controllers\Frontend\FrontendController::class, 'saveReservation']);

// blogs
Route::get('/blog', [App\Http\Controllers\Frontend\FrontendController::class, 'Blog']);
Route::get('/blog/{slug}', [])->name('blog.view');
Route::post('/get-blog-category', [App\Http\Controllers\Frontend\FrontendController::class, 'getBlogByCategory']);
Route::get('/blog/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'BlogDetail'])->name('blog.view');
Route::get('/blogs/{category}', [App\Http\Controllers\Frontend\FrontendController::class, 'getblogsbycategory']);

Route::get('/category/{blogcategory}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogCategory']);
Route::post('/get-blog-category', [App\Http\Controllers\Frontend\FrontendController::class, 'getBlogByCategory']);

//menu
Route::get('/menu', [App\Http\Controllers\Frontend\FrontendController::class, 'Menu']);
Route::get('/menu/{cat_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'MenuCategoryView']);

Auth::routes();

//our team
Route::get('/our-team', [App\Http\Controllers\Frontend\FrontendController::class, 'ourteam']);

// portfolio
Route::get('/services', [App\Http\Controllers\Frontend\FrontendController::class, 'services']);
Route::get('/service/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'servicedetails']);


//faqs
Route::get('/faqs', [App\Http\Controllers\Frontend\FrontendController::class, 'faqs']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacypolicy']);
Route::get('/term-condition', [App\Http\Controllers\Frontend\FrontendController::class, 'termscondition']);
Route::get('/about-us', [App\Http\Controllers\Frontend\FrontendController::class, 'aboutus']);