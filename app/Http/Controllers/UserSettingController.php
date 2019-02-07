<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\User;
use Auth;
>>>>>>> tokap7
=======
use App\User;
use Auth;
>>>>>>> tokap8

class UserSettingController extends Controller
{
	public function form()
	{
<<<<<<< HEAD
<<<<<<< HEAD
		return view('admin.pages.user.setting');
	}
   
=======
=======
>>>>>>> tokap8
		$data = User::where('id',Auth::id())->first();

		return view('admin.pages.user.setting',['dt'=>$data]);
	}
<<<<<<< HEAD
   public function update()
   {
   	return "Fungsi Update";
   }
>>>>>>> tokap7
=======
   public function update(Request $req)
   {
   		$id = Auth::id();
   		\Validator::make($req->all(), [
   			'name'=>'required|between:3,100',
   			'email'=>'required|email|unique:users,email,'.$id,
   			'password'=>'nullable|min:6',
   			'repassword'=>'same:password',

   		])->validate();
   	return "Fungsi Update";
   }
>>>>>>> tokap8
}
