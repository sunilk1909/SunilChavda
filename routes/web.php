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
    return view('sunilchavda');
});

Route::get('/download',function(){
    $file = public_path()."\SunilChavda.pdf";

    $header =array('Content-type: application/pdf',);

    return Response::download($file, "SunilChavda.pdf", $header);
});

Route::post('/contact', 'ProfileContactController@store');



