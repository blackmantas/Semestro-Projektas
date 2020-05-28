<?php

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

//{} in get('post/{post}') - {post} can be any number or string
//Route::get('posts/{post}', function () {
//    return view('posts');
//});

//Route::get('posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, "sorry that post is not found");
//    }
//
//    return view('posts', [
//       'post' => $posts[$post] // ?? "nothing here yet" - we set a default value
//    ]);
//});

Route::get('/posts/{post}', 'PostsController@show');
