<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $req){
        //return redirect('/');
        //echo "<pre>";
        //print_r($req->emil);
        //print_r($req->password);

        $user = USer::where('email', $req->email)->first();
        if(Hash::check($req->password, $user->password)){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
}
