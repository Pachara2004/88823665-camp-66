<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    function error404(){
        return view('errors.404');
    }

    function error500(){
        return view('errors.500');
    }
}
