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
<<<<<<< HEAD
=======
=======
>>>>>>> tokap13
=======
>>>>>>> tokap14
    public function add()
    {
    	return view('admin.pages.user.add');
    }
    public function save(Request $req)
    {
<<<<<<< HEAD
<<<<<<< HEAD
    	return 'Fungsi Save';
    }
>>>>>>> tokap12
=======
=======
>>>>>>> tokap14
        \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:6',
                'repassword'=>'required|same:password',
                'akses'=>'required',

        ])->validate();
        
<<<<<<< HEAD
    	return 'Fungsi Save';
    }
>>>>>>> tokap13
=======
    	$result = new User;
        $result->name = $req->name;
        $result->email = $req->email;
         $result->password = bcrypt($req->password);
          $result->akses = $req->akses;

          if($result->save()){
            return redirect()->route('admin.user')->with('result','success');
          } else {
            return back()->with('result','fail')->withInput();
          }





    }

>>>>>>> tokap14
}
