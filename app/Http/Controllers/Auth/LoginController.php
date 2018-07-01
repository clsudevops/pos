<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        return '/admin/home';
    }

    public function login(Request $request) 
    {
        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
 
        $request->merge([
            $login_type => $request->input('login')
        ]);

        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials)) 
        {
            return response()->json(['status' => true,'redirect_uri' => env('APP_URL') . '/admin/home'], 200);
        }
        else {
            return response()->json(
                [
                    "message" => "Invalid credentials"
                ]
                ,401
            );
        }
    }

    public function logout() 
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm() 
    {
        return view('auth.login');
    }
}
