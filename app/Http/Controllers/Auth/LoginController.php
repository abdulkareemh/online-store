<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo =RouteServiceProvider::HOME;

    
   // protected function redirectTo(Request $request)
   // {
   //    $route = '/';
   //     if( \Illuminate\Support\Facades\Auth()::User->Admin==1){
   //       $route = '/dashboard';
   //     }
   //     return Redirect::route($route);
   // }

   //    public function redirectPath()
   // {
   //     if (\Illuminate\Support\Facades\Auth()::User->Admin==1) {
   //         return '/dashboard';
   //     }
   
   //     return  '/';
   // }
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
