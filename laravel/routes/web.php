<?php

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
    return view('layout');
});

Route::post('/contactUs', "ControllerContactUs@ship");

Route::get('solutions/get/{for}/{name}', 'ControllerSolutionItem@index');
Route::get('solutionsHome/get', 'ControllerSolution@index');
Route::get('HomeSlider/get', 'ControllerHomeSlider@index');
Route::get('services/get', 'ControllerService@index');

Route::get('/{vue?}', function () {
    return view('layout');
})->where('vue', '[\/\w\.-]*');