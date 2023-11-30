<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DemoController;
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
//This is the route using callback function
// Route::get('/', function () {
//     return view('HomePage');
// });
// Route::get('/about', function(){
//     return view("AboutPage");
// });
// Route::get('/contact', function(){
//     return view("ContactPage");
// });
//Now we will try to make a route from controller

Route::get('/', [SiteController::class, 'Home']);
Route::get('/about', [SiteController::class, 'About']);
Route::get('/contact', [SiteController::class, 'Contact']);
Route::post('/contactPost', [SiteController::class, 'contactPost']);
// add parameter in route
Route::get('/name/{id}/{firstName}/{lastName}', [DemoController::class, 'GetName']);
// Route::get('/about', 'SiteController@About');
// Route::get('/contact', 'SiteController@Contact');
// To do this kind of group below we should create route group by the following way
// Route::get('account/index',);
// Route::get('account/home',);

//its working now
Route::group(['prefix' => 'account'], function(){
    Route::get('/index/{id}/{firstName}/{lastName}',[DemoController::class, 'GetName']);
    Route::get('/my', function(){
        return "hudai";
    });
});