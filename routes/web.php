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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','HomePageController@index')->name('index');
Route::get('/about-us/','HomePageController@aboutUs');
Route::get('/deals/','HomePageController@dealsAndOffers');
Route::get('/location/{id}','HomePageController@location');
//copntact us 
Route::get('/contact-us/','HomePageController@contactUs');
Route::POST('/contact-april-travels/','ContactUsController@contactUs');
Route::get('/faq/','HomePageController@faq');

//add bookings 
Route::POST('/add-bookings/', 'BookingController@addBooking');
Route::get('/booking/step-2/','BookingController@bookingStepTwo');
Route::POST('/post-booking/','BookingController@postBooking');

//add multiple bookings 
Route::POST('/add-multiplebookings/', 'MultipleBookingController@addmultiBooking');
Route::get('/multiplebooking/step-2/','MultipleBookingController@bookingStepTwo');
Route::POST('/post-multiplebooking/','MultipleBookingController@postBooking');

Route::get('search',array('as'=>'search','uses'=>'HomePageController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'HomePageController@autocomplete'));


	
//automcomplete admin searc 
Route::get('search',array('as'=>'search','uses'=>'HomePageController@search'));
Route::get('autocomplete-search',array('as'=>'autocomplete-search','uses'=>'DashboardController@autocomplete'));

Route::middleware(['auth' ,'admin'])->group(function () {

    //dashboard
Route::get('/admin','DashboardController@dashboard');
//service areas
Route::get('/service-area','DashboardController@services');
//admin search section
Route::get('search-admin','DashboardController@searchAdmin');
// pages update
Route::get('/pages','DashboardController@pages');

//airports routes
Route::get('/all-airports/','AirportController@allAirport');
Route::POST('/update-airport/{id}', 'AirportController@updateAirport');
Route::get('/import/','AirportController@importAirport');
Route::get('/edit-airport/{id}','AirportController@editAirport');
Route::post('/import-data/','AirportController@importAirportData');
Route::get('/add-airport/','AirportController@addAirport');
Route::post('/store-airport/','AirportController@storeAirport');
Route::get('/downloadExcel/{type}','AirportController@exportAirportData');

// Route::POST('/autocomplete/fetch/','HomePageController@fetch')->name('autocomplete.fetch');


//deals 
Route::get('/all-deals/','DealController@allDeals');
Route::get('/new-deal/','DealController@newDeal');
Route::POST('/create-deal/','DealController@createDeals');
Route::get('/edit-deals/{id}','DealController@editDeals');
Route::post('/update-deals/{id}','DealController@updateDeal');
//unpub;lish 
Route::get('/publish-deals/{id}','DealController@publishDeal');
Route::get('/unpublish-deals/{id}', 'DealController@unpublishDeal');

//use destroy rouyte only when directed to do so 
Route::delete('/destroy-deals/{id}','DealController@destroyDeal');

//adminmgt 
Route::get('/all-admin/', 'AdminMgtController@allAdmin')->middleware('can:super-only');
Route::get('/edit-admin/{id}','AdminMgtController@editAdmin')->middleware('can:super-only');
Route::post('/update-admin/{id}','AdminMgtController@updateAdmin')->middleware('can:super-only');
Route::get('/create-admin/','AdminMgtController@getUser')->middleware('can:super-only');
Route::post('/post-admin/','AdminMgtController@postAdmin')->middleware('can:super-only');
Route::get('/suspend-admin/{id}','AdminMgtController@suspendAdmin')->middleware('can:super-only');
Route::get('/approve-admin/{id}','AdminMgtController@approveAdmin')->middleware('can:super-only');
Route::delete('/delete-user/{id}','AdminMgtController@destroyUser')->middleware('can:super-only');

//chnage password
Route::get('/upadte-password/{id}','AdminMgtController@getUserInfo');
Route::post('/change-password/{id}','AdminMgtController@changePassword');


//all bookings 
Route::get('/all-bookings/','BookingController@allBookings');
Route::get('/downloadPDF/{id}','BookingController@downloadPDF');
Route::get('/show/{id}','BookingController@viewBooking');
Route::get('/approve/{id}','BookingController@approveBooking');
Route::get('/unapprove/{id}','BookingController@unapproveBooking');
Route::delete('/delete-booking/{id}','BookingController@destroyBooking');

//add passenegr class 
Route::get('/all-passenger-class/', 'BookingController@allPassengerClass');
Route::get('/create-passeneger-class/', 'BookingController@addPassengerClass');
Route::post('/post-passenger-class/' , 'BookingController@postPassengerClass');
Route::get('/edit-passenger-class/{id}', 'BookingController@editPassengerClass');
Route::Post('/update-passenger-class/{id}', 'BookingController@updatePassengerClass');
Route::get('/publish/{id}', 'BookingController@publishPassengerClass');
Route::get('/unpublish/{id}','BookingController@unpublishPassengerClass');


//ticket class 

Route::get('/all-ticket-class/', 'BookingController@allTicketClass');
Route::get('/create-ticket-class/', 'BookingController@addTicketClass');
Route::post('/post-ticket-class/' , 'BookingController@postTicketClass');
Route::get('/edit-ticket-class/{id}', 'BookingController@editTicketClass');
Route::Post('/update-ticket-class/{id}', 'BookingController@updateTicketClass');
Route::get('/publish/ticket/{id}', 'BookingController@publishTicketClass');
Route::get('/unpublish/ticket/{id}','BookingController@unpublishTicketClass');
Route::delete('/delete-ticket/{id}','BookingController@destroyTicket');

//contact KJK 
Route::get('/contact-developer/', 'ContactDeveloperController@contactDeveloper');
Route::POST('/sendmail/', 'ContactDeveloperController@sendMail');




});