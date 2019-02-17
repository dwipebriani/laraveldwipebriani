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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> tokap13
=======
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
    public function add()
    {
    	return view('admin.pages.user.add');
    }
    public function save(Request $req)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    	return 'Fungsi Save';
    }
>>>>>>> tokap12
=======
=======
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
        \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:6',
                'repassword'=>'required|same:password',
                'akses'=>'required',

        ])->validate();
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    	return 'Fungsi Save';
    }
>>>>>>> tokap13
=======
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
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

<<<<<<< HEAD
<<<<<<< HEAD




    }

>>>>>>> tokap14
}
=======
=======
>>>>>>> tokap16
}
public function edit($id)
    {
    $data = User::where('id',$id)->first();
    return view('admin.pages.user.edit',['rc'=>$data]);
}

public function update(Request $req)
{
<<<<<<< HEAD
    return 'Fungsi Update';
}
}
>>>>>>> tokap15
=======
     \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email,'.$req->id,
                'password'=>'nullable|min:6',
                'repassword'=>'same:password',
                'akses'=>'required',

        ])->validate();
    return 'Fungsi Update';
}
}
>>>>>>> tokap16
