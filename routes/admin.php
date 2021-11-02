 <?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::resource('option-value','AdminSeller\OptionValueController');
Route::resource('currency','AdminSeller\CurrencyController');
Route::resource('discount','AdminSeller\DiscountController');
Route::resource('category','AdminSeller\CategoryController');
Route::resource('commision','AdminSeller\CommisionController');
Route::resource('bookingstatus','AdminSeller\BookingStatusController');
Route::resource('service','AdminSeller\ServiceController');
Route::resource('review','AdminSeller\ReviewController');
Route::resource('bookings','AdminSeller\BookingsController');
Route::resource('provider','AdminSeller\ProviderController');
Route::resource('image_optimize','AdminSeller\ImageOptimizeController');

// Route::post('category-destory','AdminSeller\CategoryController@destory')->name('category.destory');
Route::any('import-category', 'AdminSeller\CategoryController@importCategory')->name('category.import');

Route::name('home.')->group(function () {
    Route::get('/change-multiple-status', 'AdminSeller\HomeController@changeMultipleStatus')->name('change-multiple-status');
    Route::get('/chart/get-data', 'AdminSeller\HomeController@chartgetdata')->name('getdata');
    Route::get('/delete-multiple', 'AdminSeller\HomeController@deleteMultiple')->name('delete-multiple');
    Route::get('/discount-multiple', 'AdminSeller\HomeController@discountMultiple')->name('discount-multiple');
    Route::get('/change-order', 'AdminSeller\HomeController@changeOrder')->name('change-order');
});


Route::any('/user/{type}', 'AdminSeller\UserController@index')->name('user.index');
Route::any('/user/change/status', 'AdminSeller\UserController@change_status')->name('user.change_status');


//customer
Route::any('/customer/{type}', 'AdminSeller\VendorController@index')->name('vendors.index');
Route::any('/customer/create/form', 'AdminSeller\VendorController@create')->name('vendors.create');
Route::post('/customer/store/form', 'AdminSeller\VendorController@store')->name('vendors.store');
Route::get('/customer/edit/{id}/edit', 'AdminSeller\VendorController@edit')->name('vendors.edit');
Route::post('/customer/update/form', 'AdminSeller\VendorController@update')->name('vendors.update');
Route::delete('/customer/destory/{id}', 'AdminSeller\VendorController@destroy')->name('vendors.destroy');
Route::any('/customer/change/status', 'AdminSeller\VendorController@change_status')->name('vendors.change_status');


//General Settings
Route::get('general-setting','AdminSeller\GeneralSettingController@index')->name('general.setting');
Route::post('/general/setting/update', 'AdminSeller\GeneralSettingController@update')->name('general.update');
Route::get('/general/setting/cacheclear', 'AdminSeller\GeneralSettingController@CacheClear')->name('general.cacheclear');


