<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"BlogController@index")->name('index');
Route::get('/detail/{slug}',"BlogController@detail")->name('detail');
Route::get('/category/{id}',"BlogController@baseOnCategory")->name('baseOnCategory');
Route::get('/user/{id}',"BlogController@baseOnUser")->name('baseOnUser');
Route::get('/date/{date}',"BlogController@baseOnDate")->name('baseOnDate');

Route::view("/about","blog/about")->name('about');

Auth::routes();

Route::prefix("dashboard")->middleware("auth")->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("category","CategoryController");
    Route::resource("article","ArticleController");


    Route::prefix('profile')->group(function(){
        // Main Frame Route
        Route::get('/','ProfileController@profile')->name('profile');
        Route::get('/edit-photo','ProfileController@editPhoto')->name('profile.edit.photo');
        Route::get('/edit-password','ProfileController@editPassword')->name('profile.edit.password');
        Route::get('/edit-name-and-email','ProfileController@editNameEmail')->name('profile.edit.name.email');
        Route::post('/change-password','ProfileController@changePassword')->name('profile.changePassword');
        Route::post('/change-name','ProfileController@changeName')->name('profile.changeName');
        Route::post('/change-email','ProfileController@changeEmail')->name('profile.changeEmail');
        Route::post('/change-photo','ProfileController@changePhoto')->name('profile.changePhoto');
    });

});
