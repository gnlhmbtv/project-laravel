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


Route::get('/dbconn', function(){
    $urls = DB::table('Images')->get();
    $title = "hello madifaki";
    $rand = random_int(1, 3);
    $urlsLength = count($urls);
    return view('dbconn', ['urls' => $urls, "rand"=>$rand, "urlsLength"=>$urlsLength]);
});

