<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('provider')->user();

    //dd($users);

    return view('provider.home');
})->name('home');


Route::name('home.')->group(function () {
    Route::get('/change-multiple-status', 'ProviderSeller\HomeController@changeMultipleStatus')->name('change-multiple-status');
    Route::get('/chart/get-data', 'ProviderSeller\HomeController@chartgetdata')->name('getdata');
    Route::get('/delete-multiple', 'ProviderSeller\HomeController@deleteMultiple')->name('delete-multiple');
    Route::get('/discount-multiple', 'ProviderSeller\HomeController@discountMultiple')->name('discount-multiple');
    Route::get('/change-order', 'ProviderSeller\HomeController@changeOrder')->name('change-order');
});

//bookings

// Route::resource('bookings','ProviderSeller\BookingsController');
Route::group(['prefix' => 'bookings'], function () {
    Route::get('/index', 'ProviderSeller\BookingsController@index')->name('bookings.index');
    Route::get('/create/form', 'ProviderSeller\BookingsController@create')->name('bookings.create');
    Route::post('/store/form', 'ProviderSeller\BookingsController@store')->name('bookings.store');
    Route::get('/edit/{id}', 'ProviderSeller\BookingsController@edit')->name('bookings.edit');
    Route::put('/update/{id}', 'ProviderSeller\BookingsController@update')->name('bookings.update');
    Route::post('/destory/{id}', 'ProviderSeller\BookingsController@destroy')->name('bookings.destory');
    Route::any('/change/status','ProviderSeller\BookingsController@change_status')->name('bookings.change_status');
});

//review
// Route::resource('bookings','ProviderSeller\BookingsController');

Route::resource('review','ProviderSeller\ReviewController');

//customer

Route::any('/customer/{type}', 'ProviderSeller\VendorController@index')->name('vendors.index');
Route::any('/customer/create/form', 'ProviderSeller\VendorController@create')->name('vendors.create');
Route::post('/customer/store/form', 'ProviderSeller\VendorController@store')->name('vendors.store');
Route::get('/customer/edit/{id}/edit', 'ProviderSeller\VendorController@edit')->name('vendors.edit');
Route::post('/customer/update/form', 'ProviderSeller\VendorController@update')->name('vendors.update');
Route::delete('/customer/destory/{id}', 'ProviderSeller\VendorController@destroy')->name('vendors.destroy');
Route::any('/customer/change/status', 'ProviderSeller\VendorController@change_status')->name('vendors.change_status');

