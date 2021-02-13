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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contract');
});

Route::get('/หวัดดีเบล', function () {
    return "แกรีบกลับมาได้แล้วนะโว้ย";

});
Route::get('/hello/{name}', function ($name) {
    return "hello hello เฮ้ดอีหยังอยู่น้อ อี $name";
});
