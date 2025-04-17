<?php

use Illuminate\Support\Facades\Route;
// 作成したコントローラを宣言する
use  App\Http\Controllers\Controller;
// 作成したコントローラを宣　　メソッドを使用できるようにする
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('posts.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [Controller::class, 'index']);