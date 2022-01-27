<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SiteController;

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
// ---------> Simple Routing
// Route::get('/', function () {
//     return view('welcome');
// });

// ---------> Naming Route
Route::get('/', [BlogController::class, "BlogStatus"])->name('blogStatus');
Route::get('/site', [SiteController::class, "MySite"])->name('mySite');
Route::get('/about', [AboutController::class, 'About'])->name('myAbout');

// --> Routing with View | Not Connected with Controller and it's connected directly 'view to route'
Route::view('/test-view', "viewRoute")->name('viewAndRoute');

// ---------> Parameter in Routing
Route::get('/site/myposts/{id}', [SiteController::class, "MyPosts"])->name('sitePosts');

// Route::get("/show-message", [ContollerSite::class, "showMessage"]);
// Route::get("/blog-status", [BlogController::class, "BlogStatus"])->name('blogStatus');