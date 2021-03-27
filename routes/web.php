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


    Route::get('field-dashboard', function () {
        return view('pages.field_dashboard');
    });

    Route::get('create-report', function () {
        return view('pages.create_report');
    });

    Route::get('all-reports', function () {
        return view('pages.all_reports');
    });


    //Field Routes
    Route::get('field-create', 'FieldController@index');
    Route::post('filed-save', 'FieldController@store')->name('field.save');
    Route::post('filed-get', 'FieldController@retrieve')->name('field.get');
    Route::get('block-create', 'FieldController@block_view');
    Route::post('block-fieldblock', 'FieldController@fieldblocksave')->name('fieldblock.save');
    Route::post('field-receivable-save-temp', 'FieldController@fieldReceivableSaveTemp')->name('field.receivable.save.temp');
    Route::post('get-from-block-data', 'FieldController@getDataFromBlock')->name('get.field.data.from.block');

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

    //Register Routes
    Route::get('register-requests', 'UserController@index');
    Route::post('register-approveuser', 'UserController@approveuser')->name('user.approveuser');
    Route::post('register-rejectuser', 'UserController@rejectuser')->name('user.rejectuser');
    Route::post('register-getuser', 'UserController@getuser')->name('user.getuser');
    Route::get('users', 'UserController@getregistedusers')->name('user.getregistedusers');
    Route::post('register-userupdate', 'UserController@userupdate')->name('user.userupdate');

    //field Routes
    Route::post('field-data-log-add', 'FieldController@addToTemp')->name('field.log.add');
    Route::post('field-data-log-save', 'FieldController@saveFieldData')->name('field.log.save');
    Route::post('field-data-log-save-approval', 'FieldController@saveFieldDataApproval')->name('field.log.save.approval');
    Route::get('get-field-labour-data', 'FieldController@getFieldLabourData')->name('get.field.labour.data');
    Route::get('delete-field-labour-data', 'FieldController@deleteTmpLabourData')->name('delete.field.labour.data');
    Route::post('Field-data-block', 'FieldController@getBlockData')->name('field.block.data');
    Route::post('Field-person-epf', 'FieldController@getPersonEPF')->name('field.person.epf');

    Route::get('field-data-logs', 'FieldController@getFieldDataLogs')->name('get.field.data.logs');
    Route::get('field-data-log-summary', 'FieldController@getFieldLogSummary')->name('get.field.log.summary');
    Route::get('field-data', 'FieldController@addFieldDataLog');
    Route::get('field-receivable/{id}', 'FieldController@fieldReceivables');

    //Nersery Routes
    Route::get('nursery-create', 'NurseryController@index');
    Route::post('nursery-save', 'NurseryController@store')->name('nursery.save');
    Route::post('nursery-get', 'NurseryController@retrieve')->name('nursery.get');
    Route::post('nursery-update', 'NurseryController@update_nursery')->name('nursery.update');
    Route::post('nursery-delete', 'NurseryController@delete')->name('nursery.delete');
    Route::post('nursery-comment', 'NurseryController@comment')->name('nursery.comment');

    //Staff Approve Routes
    Route::get('staff-approve/{id}', 'StaffApproveController@index');
    Route::post('staff-approve-save', 'StaffApproveController@saveApprove')->name('save.staff.approve');


    Route::group(['as' => 'admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('nursery-dashboard', 'NurseryController@dashboard');
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

