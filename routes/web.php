<?php

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

Route::get('/', function () {

    $posts = App\Post::latest('published_at')->get();

    return view('welcome', compact('posts'));
});

// Route::get('posts', function(){
//     return App\Post::all();
// });

Route::get('home', function(){
    return view('admin.dashboard');
})->middleware('auth');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// if ($options['register'] ?? true) {
//     Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//     Route::post('register', 'Auth\RegisterController@register');
// }

// Password Reset Routes...
if ($options['reset'] ?? true) {
    Route::resetPassword();
}