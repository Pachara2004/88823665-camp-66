<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LaravelForm;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ErrorController;






// Route::get('/login', function () {
//     [LoginController::class, 'index'];
// });

//Route::get('/', function () {
//    return view('layouts.default');
//});


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

Route::get("/Laravel-form",
    [LaravelForm::class, 'myfunction']
);

Route::post("/Laravel-form",
    [LaravelForm::class, 'myfunction']
);

Route::get("/login",
    [LoginController::class, 'index']
);

Route::get("/register",
    [RegisterController::class, 'index']
);

Route::get("/home",
    [HomeController::class, 'index']
);

Route::get("/",
    [HomeController::class, 'index']
);

Route::get("/404",
    [ErrorController::class, 'error404']
);

Route::get("/500",
    [ErrorController::class, 'error500']
);

