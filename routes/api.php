<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) { 
    $api->group(['namespace' => 'App\Http\Controllers\Api\V1', 'prefix' => 'v1'], function ($api) {
        $api->post('login', 'AuthController@login');
        $api->post('register', 'AuthController@register');

        $api->post('provider-login','LoginController@login');
        // $api->post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        // $api->post('password/reset', 'ResetPasswordController@reset');
        $api->post('password/forgot', 'ForgotPasswordController@autoGeneratePassword');

        
        $api->get('get-category', 'CatrgoryController@index');
        $api->get('get-service-by-category/{id}', 'CatrgoryController@getServiceByCategory');
        $api->get('get-service', 'ServiceController@getService');
        $api->post('contact-us', 'HomeController@get');

        $api->group(['middleware' => 'jwt.verify'], function ($api_child) {

            //Review
            $api_child->post('createreview','ReviewController@createreview');
            $api_child->get('viewreview','ReviewController@viewreview');
            $api_child->post('editreview','ReviewController@editreview');
            $api_child->post('updatereview','ReviewController@updatereview');
            $api_child->post('deletereview','ReviewController@deletereview');

            //Bookings
            $api_child->post('create-bookings','BookingsController@createbookings');
            $api_child->post('edit-bookings','BookingsController@editbookings');
            $api_child->post('update-bookings','BookingsController@updatebookings');
            $api_child->post('delete-bookings','BookingsController@deletebookings');


            $api_child->get('get-home', 'HomeController@index');
            $api_child->post('update-profile-detail', 'AuthController@updateProfileDetail');

            $api_child->post('change-password', 'AuthController@changepassword');
            $api_child->post('update-user-details', 'AuthController@update_user');
            $api_child->get('get-user-details', 'AuthController@getUser');

        });
    });
});
