<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    // public function authenticated()

    // {
    //    if(Auth::user()->role_as=='1')
    //    {
    //     return redirect('admin/dashboard')->with('status','welcome to dashboard');
    //    }
    //    elseif(Auth::user()->role_as=='0')
    //    {
    //     return redirect('/login')->with('status','login successfully');
    //    }
    //    else{
    //     return redirect('/');
    //    }
    // }
public function authenticated()
{
    $role = Auth::user()->role_as;

    if ($role == '1' || $role == '2') {
        return redirect('admin/dashboard')->with('status', 'Welcome to dashboard');
    } elseif ($role == '0') {
        return redirect('/login')->with('status', 'Login successfully');
    } else {
        return redirect('/');
    }
}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
