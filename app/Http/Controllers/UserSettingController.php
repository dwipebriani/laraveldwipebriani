<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use App\User;
use Auth;
>>>>>>> tokap9
=======
use App\User;
use Auth;
>>>>>>> tokap10
=======
use App\User;
use Auth;
>>>>>>> tokap11
=======
use App\User;
use Auth;
>>>>>>> tokap12
=======
use App\User;
use Auth;
>>>>>>> tokap13
=======
use App\User;
use Auth;
>>>>>>> tokap14

class UserSettingController extends Controller
{
	public function form()
	{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		return view('admin.pages.user.setting');
	}
   
=======
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
		$data = User::where('id',Auth::id())->first();

		return view('admin.pages.user.setting',['dt'=>$data]);
	}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   public function update()
   {
   	return "Fungsi Update";
   }
>>>>>>> tokap7
=======
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
   public function update(Request $req)
   {
   		$id = Auth::id();
   		\Validator::make($req->all(), [
   			'name'=>'required|between:3,100',
   			'email'=>'required|email|unique:users,email,'.$id,
   			'password'=>'nullable|min:6',
   			'repassword'=>'same:password',

   		])->validate();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   	return "Fungsi Update";
   }
>>>>>>> tokap8
}
=======
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

         if(!empty($req->password)){
            $field = [
               'name'=>$req->name,
               'email'=>$req->email,
               'password'=>bcrypt($req->password),
            ];
         }else{
             $field = [
               'name'=>$req->name,
               'email'=>$req->email,

            ];
         }
         $result = User::where('id',$id)->update($field);
         if($result){
            return back()->with('result','success');
         }else{

         
   	return back()->with('result','fail');
   }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> tokap9
=======
}
>>>>>>> tokap10
=======
}
>>>>>>> tokap11
=======
}
>>>>>>> tokap12
=======
}
>>>>>>> tokap13
=======
}
>>>>>>> tokap14
