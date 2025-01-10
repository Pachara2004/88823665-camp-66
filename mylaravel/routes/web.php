<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LaravelForm;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get(
    "/mycontroller/{id?}",
    [MyController::class, 'myfunction']
);

Route::post(
    "/mycontroller/{id?}",
    [MyController::class, 'myfunction']
);

Route::get(
    "/Laravel-form",
    [LaravelForm::class, 'myfunction']
);

Route::post(
    "/Laravel-form",
    [LaravelForm::class, 'myfunction']
);
