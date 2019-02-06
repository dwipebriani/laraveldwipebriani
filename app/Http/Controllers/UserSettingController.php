<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\User;
use Auth;
>>>>>>> tokap7

class UserSettingController extends Controller
{
	public function form()
	{
<<<<<<< HEAD
		return view('admin.pages.user.setting');
	}
   
=======
		$data = User::where('id',Auth::id())->first();

		return view('admin.pages.user.setting',['dt'=>$data]);
	}
   public function update()
   {
   	return "Fungsi Update";
   }
>>>>>>> tokap7
}
