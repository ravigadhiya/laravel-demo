<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::group(['middleware'=>'cors'],function(){

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

Route::post('/login','ApiContoller@ApiLogin');
Route::get('/post','ApiContoller@GetBlogList');

Route::get('/blog/{slug}',"ApiContoller@GetBlogDetail");
//});

/*Route::post('/login', function(){
    return 'returned string from test route';
})->middleware('auth:api');*/
