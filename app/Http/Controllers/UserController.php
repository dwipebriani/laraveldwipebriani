<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function daftar(Request $req)
    {
    	$data = User::where('name','like',"%{$req->keyword}%")->paginate(10);
    	return view('admin.pages.user.daftar',['data'=>$data]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> tokap13
    public function add()
    {
    	return view('admin.pages.user.add');
    }
    public function save(Request $req)
    {
<<<<<<< HEAD
    	return 'Fungsi Save';
    }
>>>>>>> tokap12
=======
        \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:6',
                'repassword'=>'required|same:password',
                'akses'=>'required',

        ])->validate();
        
    	return 'Fungsi Save';
    }
>>>>>>> tokap13
}
