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
Route::get('/new',function (){
    return view('ne');
});

Route::get('/','HomeController@GetAll');


//set complain
Route::post('/storecomplain','HomeController@storecomplain');

//directe to img of seminer

Route::get('/getAllImg/{id}','GallaryController@getAllImg');

Route::get('/meetings', 'MeetingsController@GetAll');

Route::get('/Gallery','GallaryController@getall');

Route::get('/survey/{id}', 'MeetingsController@PassId');
        
Route::get('/informations/{id}', 'MeetingsController@GetSeminar');

Route::post('/Registe/{id}','MeetingsController@StoreData');
//login
Route::post('/login','SessionController@A');
//logout
Route::get('/logout','SessionController@destroy');




//archive

Route::get('/Seminers/{date}','HomeController@gatArchive');


//set survey
Route::post('/StorSur/{id}','MeetingsController@StorSur');


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



    Route::post('/addmeeting','AdminController@addmeeting');

    Route::post('/addseminar','AdminController@addseminars');

    Route::post('/storeImpImg','AdminController@storeImpIMg');

    Route::post('/storesemImg','AdminController@storeSemImg');

    Route::post('/addpart','AdminController@addPart');

    Route::post('/addlogo','AdminController@addLogo');

    Route::get('/admin','AdminController@getall');

    Route::post('/getrollers','AdminController@Reg');
    Route::post('/getfeed','AdminController@getfeed');
    Route::post('/adduser','AdminController@adduser');
    Route::post('/changeRole','AdminController@changeRole');
    Route::get('/removeUser/{id}',"AdminController@removeUser");

    Route::post('/uEdit','HomeController@uEdit');
    Route::post('/cEdit','HomeController@cEdit');










});

