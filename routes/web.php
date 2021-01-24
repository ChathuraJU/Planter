<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('nursery-dashboard', function () {
    return view('pages.nursery_dashboard');
});
Route::get('field-dashboard', function () {
    return view('pages.field_dashboard');
});
Route::get('field-create', function () {
    return view('pages.create_field');
});
Route::get('field-data-logs', function () {
    return view('pages.all_field_data_logs');
});
Route::get('field-data', function () {
    return view('pages.field_data');
});
Route::get('field-receivable', function () {
    return view('pages.field_receivable');
});
Route::get('disease-create', function () {
    return view('pages.create_disease');
});
Route::get('disease-identify', function () {
    return view('pages.search_disease');
});
Route::get('labour-register', function () {
    return view('pages.register_labour');
});
Route::get('labour-chart', function () {
    return view('pages.labour_chart');
});
Route::get('create-report', function () {
    return view('pages.create_report');
});
Route::get('all-report', function () {
    return view('pages.all_report');
});
Route::get('organization', function () {
    return view('pages.organization');
});
Route::get('register-requests', function () {
    return view('pages.register_requests');
});
Route::get('users', function () {
    return view('pages.registered-users');
});

