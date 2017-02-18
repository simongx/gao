<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::auth();

});
Route ::get('basic1', function(){
    return 'Hello world';
});
Route ::post('basic2', function(){
    return 'Hello world';
});
Route ::get('user/{id}',function($id){
    return 'User-' .$id;
});
Route ::get('member/info','MemberController@info');
Route::any('test1',['uses'=>'StudentController@test1']);
Route::any('query1',['uses'=>'StudentController@query1']);
Route::any('query2',['uses'=>'StudentController@query2']);
Route::any('query3',['uses'=>'StudentController@query3']);
Route::any('query4',['uses'=>'StudentController@query4']);
Route::any('query5',['uses'=>'StudentController@query5']);
Route::any('orm1',['uses'=>'StudentController@orm1']);
Route::any('section1',['uses'=>'StudentController@section1']);
