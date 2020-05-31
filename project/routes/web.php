<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/SemestroProjektas', function () {
    return view('welcome');
});

Route::get('/Test', function () {
    return "HelloWorld";
});

Route::get('/Any', function () {
    return ['foo'=> 'bar'];
});

Route::get('/test', function () {
    return view('welcome');
});

// http://kambariokas.lt/testName/?name=Paulius
Route::get('/testName', function () {
    return view('test', [
       'name' => request('name')
    ]);
});

//Route::get('/crud', function (){
//    return view('inc/home');
//});

Route::get('/crud/create', function (){
    return view('inc/create');
});

Route::get('/crud', 'UsersController@getUser');


Route::get('/SemPro/locations', 'LocationsController@home');

Route::post('/insert', 'UsersController@add');

//home
Route::get('/SemPro', 'SearchObjectsController@AllObjects')->name("sem.pro.home");

//filtered Objects
Route::get('/SemPro/Filtered', function (){
    $filtered = Session::get("filteredObjects");

    return view('SemPro/FilteredObjects', ['filtered' => $filtered]);
})->name("sem.pro.filtered");

Route::post('/SemPro', 'SearchObjectsController@filteredSearch')->name('filtered.search');

Route::get('/SemPro/Testing', function (){
    return view('SemPro/Testing');
});


Route::get('/posts/{post}', 'PostsController@show');
