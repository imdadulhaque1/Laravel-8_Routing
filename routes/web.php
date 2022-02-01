<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DataPassController;
use App\Http\Controllers\ConditionalController;

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
    // return redirect("site");
    return redirect()->route("mySite");
});

// --------> Routing with Regular Expression as parameter of ID and Name
Route::get('/accounts/{id}/{name}', function($id, $name){
    echo "ID: ".$id, " Name: ".$name;
})->where([
    "id" => "[0-9]+",
    "name" => "[a-zA-Z]+"
]);


// --------> Data Passing via routing
Route::get('/data-pass', function () {
    $data=[
        "name" => "Imdadul Haque",
        "email" => "imdadul15-1440@diu.edu.bd",
        "designation" => "Software Engineer",
    ];
    return view("DataPass", $data);   // DataPass.blade.php
});

// --------> Data Passing via Compact Function | Data Passing Via Array is better than Campact() function
// Route::get('/data-pass', function () {
 
//     $name = "Imdadul Haque";
//     $email = "imdadul15-1440@diu.edu.bd";
//     $designation = "Software Engineer";

    
//     return view("DataPass", compact("name", "email", "designation"));   // DataPass.blade.php
// });


//--------> Data Passing Via Controller | Just make route in web.php
Route::get('/data-pass-controller', [DataPassController::class, "DataPassingController"])->name("DataPassingViaController");

//--------> Conditional Statements in Laravel
Route::get('/condition', [ConditionalController::class, "conditionStatements"])->name("ConditionalState");







// Route::get("/show-message", [ContollerSite::class, "showMessage"]);
// Route::get("/blog-status", [BlogController::class, "BlogStatus"])->name('blogStatus');