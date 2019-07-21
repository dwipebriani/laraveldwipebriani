<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

class ProdukController extends Controller
{
    public function daftar(Request $req)
    {
    	return view('admin.pages.produk.daftar');
=======
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
use App\Produk;

class ProdukController extends Controller
{

    public function daftar(Request $req)
    {
    	/*Menghubungkan Table Produk dengan Kategori*/
    	$data = Produk::join('kategori','kategori.id','produk.id_kategori')
    	->where('nama_produk','like',"%{$req->keyword}%")
    	->select('produk.*','nama_kategori')
    	->orderBy('updated_at','desc')
    	->paginate(10);
    	return view('admin.pages.produk.daftar',['data'=>$data]);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap 32
    }
}
=======
=======
>>>>>>> tokap 35
    }

    /*Fungsi add/Tambah */
    public function add()
{
return view('admin.pages.produk.add');

}

    /*Fungsi Simpan/Save */
    public function save(Request $req)
    {
<<<<<<< HEAD
        return 'Fungsi Save';
    }

}
>>>>>>> tokap 33
=======

        \Validator::make($req->all(),[
            'kode'=>'required|between:3,100|unique:produk,kode_produk',
            'nama_produk'=>'required|between:3,100',
            'kategori'=>'required|numeric',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
            'gambar'=>'required|image',

        ])->validate();



        return 'Fungsi Save';
    }

}
>>>>>>> tokap 35
