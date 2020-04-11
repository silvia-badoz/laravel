<?php

use App\Http\Controllers\HomeController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Auth::routes();

Route::get('/', 'HomeController@index');

/* Route::get('Articles', 'PostsController@index' ) ;
 */
Route::get('Contact','ContactController@index');

Route::post('Contact', 'ContactController@traitement');

/* Route::get('/Articles/{id}', 'PostsController@show');
 */
/* Route::post('/Articles/{id}', 'CommentController@traitement');
 */
Route::get('/Login', 'HomeController@index');


//Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Route::resource('/Admin', 'Admin\UsersController');
 */
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', 'UsersController');

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('posts', 'PostsController');

});

Route::namespace('User')->prefix('user')->name('user.')->group(function(){
    Route::resource('users', 'UserController');

});

Route::namespace('Posts')->group(function(){
    Route::resource('posts', 'PostsController');

});


Route::namespace('Comments')->group(function(){
    Route::resource('comments', 'CommentController');

});
