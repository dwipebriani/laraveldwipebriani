<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Kategori;
>>>>>>> tokap21
=======
use App\Kategori;
>>>>>>> tokap22

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
<<<<<<< HEAD
    	return view('admin.pages.kategori.daftar');
=======
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
>>>>>>> tokap21
=======
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }
    public function add()
    {
    	return view('admin.pages.kategori.add');
    }
    public function save(Request $req)
    {
    	return 'Fungsi Save';
>>>>>>> tokap22
    }
}

