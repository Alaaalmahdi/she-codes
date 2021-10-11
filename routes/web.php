<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticSiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are laded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});
/*
Route::get('/about', function () {
    return view ('pages.about');
});
Route::get('/contact', function () {
    return view ('pages.contact');
});
*/
/*
Route::get('/user/{name}/{id}', function ($name,$id) {
    return 'This is user '. $name .' with an ID ' .$id;
});
*/
Route::get('/about', [StaticSiteController::class,'about']);

