<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

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
    	\Validator::make($req->all(),['kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
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
>>>>>>> tokap24
=======
=======
>>>>>>> tokap26
    }

    public function edit($id)
    {
        $data = Kategori::where('id',$id)->first();
        return view('admin.pages.kategori.edit',['rc'=>$data]);
    }

    public function update(Request $req)
    {
<<<<<<< HEAD
        return 'Fungsi Update';
>>>>>>> tokap25
=======
        \Validator::make($req->all(),[
            'kategori'=>'required|between:3,100|unique:kategori,nama_kategori,'.$req->id,
        ])->validate();
        return 'Fungsi Update';
>>>>>>> tokap26
    }
}
