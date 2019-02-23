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
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
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
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
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
<<<<<<< HEAD
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
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD




    }

>>>>>>> tokap14
}
=======
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
}
public function edit($id)
    {
    $data = User::where('id',$id)->first();
    return view('admin.pages.user.edit',['rc'=>$data]);
}

public function update(Request $req)
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    return 'Fungsi Update';
}
}
>>>>>>> tokap15
=======
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
     \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email,'.$req->id,
                'password'=>'nullable|min:6',
                'repassword'=>'same:password',
                'akses'=>'required',

        ])->validate();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    return 'Fungsi Update';
}
}
>>>>>>> tokap16
=======
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
    if(!empty($req->password)){
        $field = [
            'name'=>$req->name,
            'email'=>$req->email,
            'akses'=>$req->akses,
            'password'=>bcrypt($req->password),


        ];
    }else {
         $field = [
            'name'=>$req->name,
            'email'=>$req->email,
            'akses'=>$req->akses,
            


        ];

    }

    $result = User::where('id',$req->id)->update($field);
    if($result){
        return redirect()->route('admin.user')->with('result','update');
    } else {
        return back()->with('result','fail');
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> tokap17
=======
}
>>>>>>> tokap18
=======
=======
>>>>>>> tokap20

public function delete(Request $req)
{
    $result = User::find($req->id);

    if ( $result->delete() ) {
        return back()->with('result','delete');
    } else {
        return back()->with('result','fail-delete');
    }
}
<<<<<<< HEAD
}
>>>>>>> tokap19
=======
}
>>>>>>> tokap20
