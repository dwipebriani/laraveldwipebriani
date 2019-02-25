<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
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
    	return 'Fungsi Save';
>>>>>>> tokap22
=======
    	\Validator::make($req->all(),['kategori'=>'required|between:3,100|unique:kategori,nama_kategori',
    	])->validate();
    	return 'Fungsi Save';
>>>>>>> tokap23
    }
}

