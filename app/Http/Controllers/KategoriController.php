<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Kategori;
>>>>>>> tokap21

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
    	return view('admin.pages.kategori.daftar');
=======
    	$data = kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
>>>>>>> tokap21
    }
}

