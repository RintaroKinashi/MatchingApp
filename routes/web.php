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

【開発手順】

VScode x git ：https://qiita.com/y-tsutsu/items/2ba96b16b220fb5913be

laravel 初期セットアップ：https://qiita.com/schrosis/items/cce304870fcb27498a5e

Laravel 日本語化 : https://qiita.com/manbolila/items/498aae00f3574c72f031

*/

Route::get('/', function () {
    return view('welcome');
});
