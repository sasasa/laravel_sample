<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;
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
    return view('welcome');
});
Route::get('hello', 'HelloController@index');
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list')->name('list');


Route::get('view/escape', 'ViewController@escape');
Route::get('view/if', 'ViewController@if');
Route::get('view/isset', 'ViewController@isset');
Route::get('view/switch', 'ViewController@switch');
Route::get('view/for', 'ViewController@for');
Route::get('view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('view/foreach_loop', 'ViewController@foreach_loop');
Route::get('view/forelse', 'ViewController@forelse');
Route::get('view/master', 'ViewController@master');
Route::get('view/compo', 'ViewController@compo');
Route::get('view/list', 'ViewController@list');


Route::get('route/param/{id?}', 'RouteController@param')->where(['id'=>'[0-9]{1,3}'])->name('param');
Route::get('route/search/{keywd?}', 'RouteController@search')->where(['keywd'=>'.*']);
Route::prefix('members')->group(function() {
    Route::get('info', 'RouteController@info');
    Route::get('article', 'RouteController@article');
});
Route::namespace('Main')->group(function() {
    Route::get('route/ns', 'HogeController@ns');
});
Route::view('/route', 'route.index', [
    'name' => 'Laravel',
]);
Route::redirect('/hoge', '/', 301);
Route::resource('articles', 'ArticleController')->except([ 'edit', 'update' ]);


Route::get('ctrl/plain', 'CtrlController@plain');
Route::get('ctrl/header', 'CtrlController@header');
Route::get('ctrl/outJson', 'CtrlController@outJson');
Route::get('ctrl/outFile', 'CtrlController@outFile');
Route::get('ctrl/outCSV', 'CtrlController@outCSV');
Route::get('ctrl/outImage', 'CtrlController@outImage');
Route::get('ctrl/redirectBasic', 'CtrlController@redirectBasic');
Route::get('ctrl/index', 'CtrlController@index');
Route::get('ctrl/form', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');
Route::get('ctrl/upload', 'CtrlController@upload');
Route::post('ctrl/uploadfile', 'CtrlController@uploadfile');
// Route::get('ctrl/middle', 'CtrlController@middle')->middleware(LogMiddleware::class);
Route::group(['middleware' => ['debug'] ], function () {
    Route::get('ctrl/middle', 'CtrlController@middle');
});


Route::get('state/recCookie', 'StateController@recCookie');
Route::get('state/readCookie', 'StateController@readCookie');
Route::get('state/session1', 'StateController@session1');
Route::get('state/session2', 'StateController@session2');


Route::get('record/find', 'RecordController@find');
Route::get('record/where', 'RecordController@where');
Route::get('record/hasmany', 'RecordController@hasmany');


// Route::get('save/create', 'SaveController@create');
// Route::post('save', 'SaveController@store');
// Route::get('save/{id}/edit', 'SaveController@edit');
// Route::patch('save/{id}', 'SaveController@update');
// Route::get('save/{id}', 'SaveController@show');
// Route::delete('save/{id}', 'SaveController@destroy');
Route::resource('save', 'SaveController');