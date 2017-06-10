<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//ADMIN, LEVEL 0
Route::group(['middleware' => 'admin'], function(){
	//Dashboard
	Route::get('/dash', 'Admin\DashboardController@index');

	//CRUD Agent
	Route::get('/dash/agents', 'Admin\AgentsController@showAll');
	Route::get('/dash/agent/{id}','Admin\AgentsController@show');
	Route::get('/dash/agentcreate','Admin\AgentsController@createByAdmin');
	Route::post('/dash/agents','Admin\AgentsController@storeByAdmin');
	Route::post('/dash/agentupdate/{id}','Admin\AgentsController@edit');
	Route::get('/dash/agentdelete/{id}','Admin\AgentsController@destroy');

	//CRUD Customer
	Route::get('/dash/customers', 'Admin\CustomersController@showAll');
	Route::get('/dash/customer/{id}', 'Admin\CustomersController@show');
	Route::get('/dash/customercreate/', 'Admin\CustomersController@createByAdmin');
	Route::post('/dash/customers', 'Admin\CustomersController@storeByAdmin');
	Route::post('/dash/customerupdate/{id}', 'Admin\CustomersController@edit');
	Route::get('/dash/customerdelete/{id}', 'Admin\CustomersController@destroy');

	//CRUD Product
	Route::get('/product', 'PaketController@showAll');
});

//CUSTOMER, LEVEL 1
Route::group(['middleware' => 'customer'], function(){
	//lengkapiDataSetelahVerif
	Route::get('/{id}/customer/completing', 'Customer\LengkapiDataController@edit');
	Route::PUT('/{id}/customer', 'Customer\LengkapiDataController@update');

	// Manage Profile
	Route::get('/{id}/customer/showedit', 'Customer\EditProfilController@edit');
	Route::PUT('/{id}/update', 'Customer\EditProfilController@update');
});

//AGENT, LEVEL 2
Route::group(['middleware' => 'agent'], function(){
	//lengkapiDataSetelahVerif
	Route::get('/{id}/agent/completing', 'Agent\LengkapiDataController@edit');
	Route::PUT('/{id}/agent', 'Agent\LengkapiDataController@update');

	// Manage Profile
	// Route::get('/{id}/manageprofile', 'EditProfilController@edit');
	// Route::PUT('/{id}/update', 'EditProfilController@update');
});

Route::get('/', 'WelcomeController@index');
Route::post('/mail/{pakets}', 'BookingController@mail');
Route::get('/listing', 'WelcomeController@show');
Route::get('/detail/{id}', 'ListingController@detail');

Route::get('/booking/{id}/{query2}', 'BookingController@show');
Route::post('/booking', 'BookingController@mail');

Route::get('/verify/{ver_token}/{id}','Auth\RegisterController@verify_register');

Auth::routes();

// Booking Form
// Route::get('/booking', function () {
//     return view('bookingform');
// });
