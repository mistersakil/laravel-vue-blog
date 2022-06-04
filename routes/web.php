<?php

use Illuminate\Support\Facades\Route;

/*
|
| Web Routes
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/{any}', function () {
    return view('welcome');
});
