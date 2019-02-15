<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// for active account .
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');


// dashboard pages routes.
Route::get('/guide','dashboardPagesController@guide');
Route::get('/apiKey','dashboardPagesController@apiKey');
Route::get('/currencyEncoding','dashboardPagesController@currencyEncoding');
Route::get('/currencyExchange','dashboardPagesController@currencyExchange');
Route::get('/followExchange','dashboardPagesController@followExchange');

//Currency Encoding (code)  table pagination routes.
Route::get('/page1','tablePagesController@pageOne');
Route::get('/page2','tablePagesController@pageTwo');
Route::get('/page3','tablePagesController@pageThree');
Route::get('/page4','tablePagesController@pageFour');
Route::get('/page5','tablePagesController@pageFive');


// set Api keys.
Route::post('/set_api','setApIKeyController@assigen');
