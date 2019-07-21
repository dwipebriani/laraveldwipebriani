<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
   
=======
>>>>>>> tokap5
=======
>>>>>>> tokap6
=======
>>>>>>> tokap7
=======
>>>>>>> tokap8
=======
>>>>>>> tokap9
=======
>>>>>>> tokap10
=======
>>>>>>> tokap11
=======
>>>>>>> tokap12
=======
>>>>>>> tokap13
=======
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
    }
    protected function redirectTo()
    {
       return route('admin.home'); 
    }
}
