<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginIndex(){
        return view('auth.login');
    }

    public function registerIndex(){
        return view('auth.register');
    }

    // public function loginClient(Request $request){
    //     $email = $request->input('email');
	// 	$password = $request->input('password');

    //     // dd($email." ".$password);

    //     if (Auth::attempt(['email' => $email, 'password' =>$password])) {
    //         # code...
    //         dd("Oke");
    //     }else{
    //         dd("No");
    //     }

    // }

    public function registerClient(){

    }
}
