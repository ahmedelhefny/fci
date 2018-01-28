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



Route::get('/meetings', 'MeetingsController@GetAll');

Route::get('/Gallery','GallaryController@getall');

Route::get('/informations', function () {
    return view('informations');
        });
        
Route::get('/informations/{id}', 'MeetingsController@GetSeminar');

Route::post('/Registe/{id}','MeetingsController@StoreData');




/*Role*/

/*if admin*/

Route::group(['middleware'=>'roles','roles'=>['admin']],function()
{
    Route::get('/deleteMImg/{id}','GallaryController@deleteMImg');


    //delete slider imgs
    Route::get('/DelImpImg/{id}','HomeController@DeleteImgs');
    //delete Axes
    Route::get('/deleteAxes/{id}','HomeController@DeleteAxes');
    //delete partners
    Route::get('/deletepart/{id}','HomeController@DeleteParts');
    //delete seminar
    Route::get('/DeleSem/{id}','MeetingsController@DeleSem');
    //delete img logo
    Route::get('/DeleImgLo/{id}','HomeController@DelImgLogo');

});
        
