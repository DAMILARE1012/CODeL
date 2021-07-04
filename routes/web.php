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

Route::get('/', 'pagescontroller@home')->name('home');
Route::get('about', 'pagescontroller@about')->name('about');
Route::get('objectives', 'pagescontroller@objectives')->name('objectives');
Route::get('principles', 'pagescontroller@principles')->name('principles');
Route::get('justifications', 'pagescontroller@justifications')->name('justifications');
Route::get('programmes', 'pagescontroller@programmes')->name('programmes');
Route::get('contact', 'pagescontroller@contact')->name('contact_us');
Route::get('models', 'pagescontroller@models')->name('models');
Route::get('faqs', 'pagescontroller@faqs')->name('faqs');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//user Dashboard

// Route::get('/user', 'UserController@index')->name('user');


//Admin Middleware

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	//Olevel Subjects
	Route::get('subject', 'DashboardController@subject')->name('subject');
	Route::post('store-subject', 'DashboardController@storesubject')->name('store.subject');
	Route::get('delete-subject/{id}', 'DashboardController@deletesubject')->name('delete.subject');
	//registered
	Route::get('registered/sessions', 'RegisterController@registrations')->name('registrations');
	Route::get('registered/session/{id} ', 'RegisterController@registrationsbySessions')->name('registrationsbySessions');
	Route::get('registration/{id}', 'RegisterController@singleRegistration')->name('single.registration');
	//Offering Admission 
	Route::get('/offer-addmission/{id}', 'AdmissionController@offerAdmission')->name('offer.admission');
	//Revocking Admission
	Route::get('/decline-addmission/{id}', 'AdmissionController@declineAdmission')->name('decline.admission');

	//Academic sessions 
	Route::get('sessions', 'SessionController@index')->name('sessions');
	Route::post('sessions', 'SessionController@store')->name('sessions.store');
	Route::get('disable_session/{active}', 'SessionController@disableSession')->name('disable_session');
	Route::get('enable_session/{active}', 'SessionController@enableSession')->name('enable_session');
	//fees
	Route::get('registration_fees', 'PaymentListController@index')->name('registration_fees');
	// Route::post('registration_fees', 'PaymentListController@store')->name('registration_fees.store');
	Route::get('registration_fees/edit/{id} ', 'PaymentListController@edit')->name("registration_fees.edit");
	Route::post('registration_fees/update/{id}', 'PaymentListController@update')->name('registration_fees.update');
	// Route::get('registration_fees/{id}', 'PaymentListController@destroy')->name('registration_fees.destroy');

});


//User Middleware

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('o-level-subjects', 'RegistrationController@chooseSubjects')->name('choose.subjects');
	Route::post('subjects', 'RegistrationController@processSelectedSubjects')->name('process.subjects');
	Route::post('submit-result', 'RegistrationController@submitResults')->name('submit.results');
	Route::get('upload-my-files', 'RegistrationController@uploadFiles')->name('upload.files');
	Route::post('upload-my-files', 'RegistrationController@submitFiles')->name('submit.files');
	//Registration fee 
	Route::get('registration-fee', 'RegistrationFeeController@createOrder')->name('registration.order');
	Route::get('registration-fee-form/{regorder}', 'RegistrationFeeController@remitaRequestView')->name('registration.remita.request');
	Route::get('registration-callback', 'RegistrationFeeController@callback')->name('acceptance.callback');
	Route::get('registration-fee-history', 'RegistrationFeeController@paymentHistory')->name('registration.history');
	//Accept Admission
	Route::post('accept-admission', 'DashboardController@acceptAdmission')->name('accept.admission');
	//Acceptance fee 
	Route::get('acceptance-fee', 'AcceptanceFeeController@createOrder')->name('acceptance.order');
	Route::get('acceptance-fee-form/{order}', 'AcceptanceFeeController@remitaRequestView')->name('remita.request');
	Route::get('callback', 'AcceptanceFeeController@callback')->name('acceptance.callback');
	Route::get('acceptance-fee-history', 'AcceptanceFeeController@paymentHistory')->name('acceptance.history');
	//after acceptance fee
	Route::get('student', 'DashboardController@studentindex')->name('student');
});


//Manager Middleware
Route::group(['as'=>'manager.','prefix' => 'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
		Route::get('registered/sessions', 'DashboardController@registrations')->name('registrations');
		Route::get('registered/session/{id} ', 'DashboardController@registrationsbySessions')->name('registrationsbySessions');
		Route::get('fees-list ', 'DashboardController@fees_list')->name('fees.list');
		

});
