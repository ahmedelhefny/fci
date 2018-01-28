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

Route::get('/','HomeController@GetAll');



//set complain
Route::post('/storecomplain','HomeController@storecomplain');
//delete slider imgs
Route::get('/DelImpImg/{id}','HomeController@DeleteImgs');
//delete Axes
Route::get('/deleteAxes/{id}','HomeController@DeleteAxes');
//delete partners
Route::get('/deletepart/{id}','HomeController@DeleteParts');
//directe to img of seminer
Route::get('/getAllImg/{id}','GallaryController@getAllImg');



Route::get('/meetings', function () {
    return view('meetings');
});

Route::get('/Gallery','GallaryController@getall');

Route::get('/informations', function () {
    return view('informations');
        });
        
     

/*Role*/

/*if admin*/

Route::group(['middleware'=>'roles','roles'=>['admin']],function()
{
    Route::get('/deleteMImg/{id}','GallaryController@deleteMImg');



});
        
