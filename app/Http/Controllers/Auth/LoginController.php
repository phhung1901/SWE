<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginClient(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // dd($email." ".$password);

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            # code...
            return redirect()->route('all');
        } else {
            return redirect()->route('login')->with('noti', 'Thông tin đăng nhập không chính xác !');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
