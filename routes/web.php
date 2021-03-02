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
    Route::get('/', function () {
        return view('pages.homepage');
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
    Route::get('field-data', 'FieldController@addFieldDataLog');
    Route::get('field-receivable', function () {
        return view('pages.field_receivable');
    });


    Route::get('create-report', function () {
        return view('pages.create_report');
    });
    Route::get('all-reports', function () {
        return view('pages.all_reports');
    });
    
   
    Route::get('block-create', function () {
        return view('pages.create_block');
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
    Route::get('disease-identify', 'DiseaseController@get_diseases');
    Route::post('disease-save', 'DiseaseController@save')->name('disease.save');
    Route::post('disease-get', 'DiseaseController@retrieve')->name('disease.get');
    Route::post('disease-delete', 'DiseaseController@delete')->name('disease.delete');

    //Register 
    Route::get('register-requests', 'UserController@index');
    Route::post('register-approveuser', 'UserController@approveuser')->name('user.approveuser');
    Route::post('register-rejectuser', 'UserController@rejectuser')->name('user.rejectuser');
    Route::post('register-getuser', 'UserController@getuser')->name('user.getuser');
    Route::get('users', 'UserController@getregistedusers')->name('user.getregistedusers');

        
  
    Route::post('field-data-log-add', 'FieldController@addToTemp')->name('field.log.add');
    Route::post('field-data-log-save', 'FieldController@saveFieldData')->name('field.log.save');
    Route::get('get-field-labour-data', 'FieldController@getFieldLabourData')->name('get.field.labour.data');
    Route::get('delete-field-labour-data', 'FieldController@deleteTmpLabourData')->name('delete.field.labour.data');

    Route::group(['as' => 'admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('nursery-dashboard', function () {
            return view('pages.nursery_dashboard');
        });
    });

    Route::group(['as' => 'director', 'middleware' => ['auth', 'director']], function () {

    });

    Route::group(['as' => 'estate_office', 'middleware' => ['auth', 'estate_office']], function () {

    });

    Route::group(['as' => 'factory_officer', 'middleware' => ['auth', 'factory_officer']], function () {

    });

    Route::group(['as' => 'field_officer', 'middleware' => ['auth', 'field_officer']], function () {

    });

    Route::group(['as' => 'labour', 'middleware' => ['auth', 'labour']], function () {

    });

    Route::group(['as' => 'manager', 'middleware' => ['auth', 'manager']], function () {

    });

});

