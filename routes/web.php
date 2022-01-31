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

// ---------> Parameter in Routing | Optional Parameter in Route
Route::get('/site/myposts/{id?}', [SiteController::class, "MyPosts"])->name('sitePosts');


// --------> Normal Redirect (Undefined url redirect to site url)
// Route::redirect('undefined', 'site');

// --------> Another way to Redirect one to another page (Undefined url redirect to site url)
Route::get("/add-form", function () {
    echo "<h2>Add Forms</h2>";
    return redirect("site");
});












// Route::get("/show-message", [ContollerSite::class, "showMessage"]);
// Route::get("/blog-status", [BlogController::class, "BlogStatus"])->name('blogStatus');