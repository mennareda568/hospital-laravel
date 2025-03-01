<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            return view('welcome');
        })->name("welcome");
        Route::post('/message', 'MessageController@store')->name('storemsg');

        Auth::routes();

        //(home route)  
        Route::group(
            ['middleware' => 'CheckUser'],
            function () {
                Route::get('/home', 'HomeController@index')->name('home');
            }
        );

        //(admins routes)
        Route::group(
            ['middleware' => 'CheckAdmin'],
            function () {
                //show allbooking table 
                Route::get('/allbooking', 'AllbookingController@index')->name('allbooking');

                //admins table 
                Route::get('/admin', 'AdminController@index')->name('admin');
                Route::get('/admin/show/{id}', 'AdminController@show')->name('showadmin');
                Route::get('/admin/edit/{id}', 'AdminController@edit')->name('editadmin');
                Route::post('/admin/update', 'AdminController@saveedit')->name('updateadmin');
                Route::get('/admin/delete/{id}', 'AdminController@delete')->name('deleteadmin');
                Route::get('/admin/changepass', 'AdminController@password')->name('pass');
                Route::post('/admin/passchanged', 'AdminController@pass')->name('passadmin');

                //users table  
                Route::get('/create/user', 'HomeController@create')->name('createuser');
                Route::post('/save/user', 'HomeController@save')->name('saveuser');


                //departments table  
                Route::get('/department', 'DepartmentController@index')->name('department');
                Route::get('/department/edit/{id}', 'DepartmentController@edit')->name('editdepart');
                Route::post('/department/update', 'DepartmentController@saveedit')->name('updatedepart');
                Route::get('/department/delete/{id}', 'DepartmentController@delete')->name('deletedepart');
                Route::get('/department/create', 'DepartmentController@create')->name('createdepart');
                Route::post('/department/save', 'DepartmentController@savenew')->name('savedepart');

                //doctors table  
                Route::get('/doctor', 'DoctorController@index')->name('doctor');
                Route::get('/doctor/show/{id}', 'DoctorController@show')->name('showdoctor');
                Route::get('/doctor/delete/{id}', 'DoctorController@delete')->name('deletedoctor');
                Route::get('/searchdoctor', 'DoctorController@search')->name('searchdoc');


                // messages table  
                Route::get('/messages', 'MessageController@index')->name('message');
                Route::get('/msg/delete/{id}', 'MessageController@delete')->name('deletemsg');
            }
        );

        //(doctors routes)  
        Route::group(
            ['middleware' => 'CheckDoctor'],
            function () {

                //profile update  
                Route::get('/doctor/edit/{id}', 'DoctorController@edit')->name('editdoctor');
                Route::post('/doctor/update', 'DoctorController@saveedit')->name('updatedoctor');
                Route::get('/doctordays/edit/{id}', 'DoctorController@editdays')->name('editdays');
                Route::post('/doctordays/update', 'DoctorController@update')->name('updatedays');
                Route::get('/doctor/changepass', 'DoctorController@password')->name('password');
                Route::post('/doctor/passchanged', 'DoctorController@pass')->name('changepass');


                //appointment table  
                Route::get('/myappointment', 'HomeController@myapp')->name('myapp');

                //patients table  
                Route::get('/mypatients', 'PatientController@index')->name('patient');
                Route::get('/patients/delete/{id}', 'PatientController@delete')->name('deletepatient');
                Route::get('/patients/create', 'PatientController@create')->name('createpatient');
                Route::post('/patients/save', 'PatientController@savenew')->name('savepatient');
                Route::get('/patients/edit/{id}', 'PatientController@edit')->name('editpatient');
                Route::post('/patients/update', 'PatientController@saveedit')->name('updatepatients');
                
                // perscription route
                Route::get('/perscription/{id}', 'PrescriptionController@generatePdf')->name('perscription');
            }
        );

        //(patients routes) 
        Route::group(
            ['middleware' => 'CheckPatient'],
            function () {

                //patient profile routes  
                Route::get('/myprofile/{id}', 'ProfileController@index')->name('myprofile');
                Route::get('/myprofile/edit/{id}', 'ProfileController@edit')->name('profedit');
                Route::post('/myprofile/edited', 'ProfileController@saveedit')->name('profupdate');
                Route::get('/mypassord', 'ProfileController@password')->name('passpatient');
                Route::post('/mypass/changed', 'ProfileController@pass')->name('passchange');

                //doctors table   
                Route::get('/doctorlist', 'DoctorController@showlist')->name('doctorlist');
                Route::get('/searchlist', 'DoctorController@searchlist')->name('searchlist');

                //patientbooking 
                Route::get('/mybooking', 'PatientbookingController@index')->name('relation');
                Route::get('/doctor/book/{id}', 'PatientbookingController@book')->name('bookappoint');
                Route::post('/doctor/savebook', 'PatientbookingController@savebook')->name('savebooking');
                Route::get('/booking/delete/{id}', 'PatientbookingController@delete')->name('deletebook');
            }
        );
    }
);
