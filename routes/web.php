<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    //return view('pizza');
    $type = [
    ['name' => 'hawaii','flavor' => 'saldy','price' => 15],
    ['name' => 'chicken', 'flavor' => 'saldy', 'price' => 26],
    ['name' => 'other', 'flavor' => 'saldy', 'price' => 20]];
    return view('pizza', ['types' => $type]);
});