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
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Kategori;
>>>>>>> tokap21
=======
use App\Kategori;
>>>>>>> tokap22
=======
use App\Kategori;
>>>>>>> tokap23
=======
use App\Kategori;
>>>>>>> tokap24
=======
use App\Kategori;
>>>>>>> tokap25
=======
use App\Kategori;
>>>>>>> tokap26
=======
use App\Kategori;
>>>>>>> tokap27
=======
use App\Kategori;
>>>>>>> tokap 28-29
=======
use App\Kategori;
>>>>>>> tokap 30-31
=======
use App\Kategori;
>>>>>>> tokap 32

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
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
    	return view('admin.pages.kategori.daftar');
=======
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
>>>>>>> tokap21
=======
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
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);
=======
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);
>>>>>>> tokap 28-29
=======
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);
>>>>>>> tokap 30-31
=======
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);
>>>>>>> tokap 32

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }
    public function add()
    {
    	return view('admin.pages.kategori.add');
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
>>>>>>> tokap22
=======
    	\Validator::make($req->all(),['kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
    	])->validate();
    	return 'Fungsi Save';
>>>>>>> tokap23
=======
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
    	\Validator::make($req->all(),['kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
=======
    	\Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
>>>>>>> tokap 28-29
=======
    	\Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
>>>>>>> tokap 30-31
=======
    	\Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
>>>>>>> tokap 32
    	])->validate();
    	

    	$result = new Kategori;
    	$result->nama_kategori = $req->kategori;

    	if( $result->save() ){
    		return redirect()->route('admin.kategori')
    		->with('result','success');
    	} else {
    		return back()->with('result','fail')->withInput();
    	}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap24
=======
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
    }

    public function edit($id)
    {
        $data = Kategori::where('id',$id)->first();
        return view('admin.pages.kategori.edit',['rc'=>$data]);
    }

    public function update(Request $req)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Fungsi Update';
>>>>>>> tokap25
=======
        \Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori,'.$req->id,
        ])->validate();
        return 'Fungsi Update';
>>>>>>> tokap26
=======
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
        \Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori,'.$req->id,
        ])->validate();
        

        $result = Kategori::where('id',$req->id)
                ->update([
                        'nama_kategori'=>$req->kategori,
                    ]);
        if( $result ){
            return redirect()->route('admin.kategori')->with('result','update');
        } else {
            return back()->with('result','fail');
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap27
    }
}

=======
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
    }

    public function delete(Request $req)
{
    $result = Kategori::find($req->id);

    if ( $result->delete() ) {
        return back()->with('result','delete');
    } else {
        return back()->with('result','fail-delete');
    }
}
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
