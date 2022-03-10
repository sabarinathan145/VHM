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
Route::get('insert','SampleController@insert')->name('insert'); 
Route::get('','SampleController@noti')->name('noti'); 
Route::get('barcode','SampleController@barcode')->name('barcode'); 

Route::get('disp_so','SampleController@disp_so')->name('disp_so'); 
Route::get('unique/{UHID}','SampleController@unique')->name('unique'); 
Route::get('deletefun/{UHID}','SampleController@deletefun')->name('deletefun');
Route::get('edit/{UHID}','SampleController@edit')->name('edit');
Route::get('check/{UHID}','SampleController@check')->name('check');
Route::get('update/{UHID}','SampleController@update')->name('update');
Route::get('updatefun/{UHID}','SampleController@updatefun')->name('updatefun');

Route::get('newpage/{UHID}','SampleController@newpage')->name('newpage');

Route::get('editfun/{UHID}','SampleController@editfun')->name('editfun');
Route::get('updatefun/{UHID}','SampleController@updatefun')->name('updatefun');
