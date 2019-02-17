<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
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
    protected function redirectTo()
    {
       return route('admin.home'); 
    }
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
   
>>>>>>> 3feb4755e00a71ed519f45f297a511300eb28101
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
}
