<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use Symfony\Component\Routing\Route as RoutingRoute;

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
Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('blog/index');
});

Route::get('/blogs', function(){
    return view('moctc/pages/index');
});

Route::get('/moctc2', function(){
    return view('moctc/layouts/appmaster');
});

Route::get('/dashboard', function () {
   return view('template.dashboard')	;
});
Route::get('student','App\Http\Controllers\StudentController@index');
Route::post('student','App\Http\Controllers\StudentController@store')->name('student.store');
Route::get('student/{id}/edit', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
Route::post('student/update', 'App\Http\Controllers\StudentController@update')->name('student.update');
Route::get('student/{id}/delete', 'App\Http\Controllers\StudentController@destroy')->name('student.delete');


Route::get('/blog', function () {
    return view('blog/index');
});