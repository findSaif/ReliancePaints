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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['middleware' =>'admin'], function(){
	Route::get('/admin', function(){
		return view('admin.index');
	});
	Route::resource('admin/users','AdminUsersController');

	Route::resource('admin/pages', 'PagesController');	

	Route::resource('admin/roles', 'RolesController');

	Route::resource('admin/sales/customers', 'CustomersController');

	Route::get('admin/sales/customers/search', [
			'uses' => 'CustomersController@search',
			'as' => 'customers.index'
		]);

	Route::resource('admin/sales/invoice', 'SalesInvoiceController');

	Route::resource('admin/sales/salesmen', 'SalesmenController');

	Route::resource('admin/sales/returns', 'SalesReturnController');	

	Route::resource('admin/products','ProductsController');
});



// Route::get('/search', 'SearchController@index');







// Route::group(['as' => 'admin.users', 'prefix' => 'admin.users'], function() {
//       Route::resource('admin.users', 'AdminUsersController');
// }); 
