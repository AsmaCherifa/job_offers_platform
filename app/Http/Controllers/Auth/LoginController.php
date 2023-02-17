<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'status' => 'active')))
        {
            if (auth()->user()->role == 'admin') 
            {
              return view ('admin.dashboard');
            }
            else if (auth()->user()->role == 'company') 
            {
              return view ('company.dashboard');
            }
            else
            {
              return view ('user.dashboard');
            }
        }
        else
        {
            return redirect()
            ->route('login')
            ->withErrors(['msg' => 'Verify your mail/password!']);
        }

        ///////////////////////////
                        //Undefined array key "password"
        ///////////////////
        if(auth()->attempt(array('status' => 'active')))
        {
          return redirect()
          ->route('login')
          ->withErrors(['msg' => 'Your account is not activated yet !']);
        }
    }
}