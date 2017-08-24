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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {

    return view('welcome');
});

/*Route::get('/login','UserController@getFrontLogin');
Route::post('/login','UserController@postFrontLogin');
Route::get('/register','UserController@getRegister');
Route::post('/register','UserController@postRegister');
*/
Route::get('userprofile/{filename}', function ($filename)
{
    $path = storage_path() . '/app/userprofile/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('blogimage/{filename}', function ($filename)
{
    $path = storage_path() . '/app/blogimage/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/admin','UserController@checkUserLogin');
Route::get('/admin/login','UserController@getLogin');
Route::post('/admin/login','UserController@postLogin');

Route::get('/admin/signout',"UserController@adminSignOut");
Route::get('/signout',"UserController@frontSignOut");

Route::get('/blog',"BlogController@index");
Route::get('/blog/{slug}',"BlogController@show");

Route::group(['prefix'=>'admin','middleware'=>'adminauth'],function(){

    Route::get("dashboard","AdminController@index");
    Route::get("user/add","UserController@getUserAdd");
    Route::post("user/add","UserController@postUserAdd");
    Route::get("profile/{id}/edit","UserController@getUserProfile");
    Route::post("profile/{id}/edit","UserController@editUserProfile");
    Route::get("users","UserController@getUserList");
    Route::get("users/{id}/delete","UserController@deleteUserProfile");
    Route::get("blog/","PostController@index");
    Route::get("blog/add","PostController@create");
    Route::post("blog/add","PostController@store");
    Route::get("blog/{id}/edit","PostController@edit");
});


