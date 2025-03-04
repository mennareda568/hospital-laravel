<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');


Route::middleware('auth:api')->group(function () {

    //admins
    Route::get("/admins/alldata", "API\admincontroller@index");
    Route::get("/admins/showone/{id}", "API\admincontroller@show");
    Route::post("/admins/store", "API\admincontroller@store");
    Route::post("/admins/delete", "API\admincontroller@delete");
    Route::post("/admins/update", "API\admincontroller@update");


    //departments
    Route::get("/departments/alldata", "API\departmentcontroller@index");
    Route::get("/departments/showone/{id}", "API\departmentcontroller@show");
    Route::post("/departments/store", "API\departmentcontroller@store");
    Route::post("/departments/delete", "API\departmentcontroller@delete");
    Route::post("/departments/update", "API\departmentcontroller@update");


    //doctors
    Route::get("/doctors/alldata", "API\doctorcontroller@index");
    Route::get("/doctors/showone/{id}", "API\doctorcontroller@show");
    Route::post("/doctors/store", "API\doctorcontroller@store");
    Route::post("/doctors/delete", "API\doctorcontroller@delete");
    Route::post("/doctors/update", "API\doctorcontroller@update");


    //messages
    Route::get("/messages/alldata", "API\messagecontroller@index");
    Route::get("/messages/showone/{id}", "API\messagecontroller@show");
    Route::post("/messages/store", "API\messagecontroller@store");
    Route::post("/messages/delete", "API\messagecontroller@delete");
    Route::post("/messages/update", "API\messagecontroller@update");
});
