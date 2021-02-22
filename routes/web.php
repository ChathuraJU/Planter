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

//Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/homepage', function () {
        return view('pages.homepage');
    });
    Route::get('nursery-dashboard', function () {
        return view('pages.nursery_dashboard');
    });
    Route::get('nursery-create', function () {
        return view('pages.nursery_create');
    });
    Route::get('field-dashboard', function () {
        return view('pages.field_dashboard');
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
   
    Route::get('disease-identify', function () {
        return view('pages.search_disease');
    });

    Route::get('create-report', function () {
        return view('pages.create_report');
    });
    Route::get('all-reports', function () {
        return view('pages.all_reports');
    });
    Route::get('register-requests', function () {
        return view('pages.register_requests');
    });
    Route::get('users', function () {
        return view('pages.registered_users');
    });

    //Field Routes
    Route::get('field-create', 'FieldController@index');
    Route::post('filed-save', 'FieldController@store')->name('field.save');
    Route::post('filed-get', 'FieldController@retrieve')->name('field.get');

    //Labour Routes
    Route::get('labour-chart', 'LabourController@index');
    Route::get('labour-register', 'LabourController@labour_register');
    Route::post('labour-save', 'LabourController@store')->name('labour.save');

    //Disease Routes
    Route::get('disease-create', 'DiseaseController@register_disease');
    Route::post('disease-save', 'DiseaseController@save')->name('disease.save');
    Route::post('disease-get', 'DiseaseController@retrieve')->name('disease.get');
    Route::post('disease-delete', 'DiseaseController@delete')->name('disease.delete');
});

