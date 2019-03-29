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

Route::get('/', 'PagesController@home');

// Route::get('posts', function(){
//     return App\Post::all();
// });




Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){
    //Rutas de Administración


    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
    Route::post('posts', 'PostsController@store')->name('admin.posts.store');

});


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
