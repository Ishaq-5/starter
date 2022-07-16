<?php

use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    $data = [];
    $data['id']= 29;
    $data['name']= 'Ishaq Mohammed';

    return view('welcome', $data);
});

Route::get('index', 'Front\UserController@getIndex');

Route::get('/test1', function () {
    return 'Welcome';
});

Route::get('/landing', function () {

    return view('landing');

});

Route::get('/about', function () {

    return view('about');

});

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) ->name('a');


Route::get('/show-string/{id?}', function () {
    return 'welcome';
}) ->name('b');


/*Route::namespace('Front')->group(function (){
    // all route only access controller or methods in folder name front

      Route::get('users','UserController@showUserName');
});*/

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function (){

    Route::get('/', function (){
       return 'work';
    });
/*
    //set of routes
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
*/

});

Route::group(['namespace'=>'Admin'], function () {
    Route::get('second', 'SecondController@showString')->middleware('auth');
    Route::get('second1', 'SecondController@showString1');
    Route::get('second2', 'SecondController@showString2');
});

  //Route::get('second', 'Admin\SecondController@showString');

 // Route::get('users', 'UserController@index');

Route::get('Login', function(){
    return 'Must Be login this route first';

})-> name('login');
/*
Route::group(['Middleware'=> 'auth'], function (){
    Route::get('users', 'UserController@index');
});
*/
Route::resource('news', 'NewsController');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/', function (){
    return 'Home';
 });
