<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
	public function index()
	{
    	// mengambil data dari table tas
        //$tas = DB::table('tas')->get();
		$tas = DB::table('tas')->paginate(10);

    	// mengirim data tas ke view index
		return view('readtas',['tas' => $tas]);

	}

	// method untuk menampilkan view form tambah tas
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahtas');

	}

	// method untuk insert data ke table tas
	public function store(Request $request)
	{
		// insert data ke table tas
		DB::table('tas')->insert([
			'merktas' => $request->merktas,
			'stocktas' => $request->stocktas,
			'tersedia' => ($request->stocktas> 0) ? 'T' : '-'
		]);
		// alihkan halaman ke halaman tas
		return redirect('/tas');

	}

	// method untuk edit data tas
	public function edit($id)
	{
		// mengambil data tas berdasarkan id yang dipilih
		$tas = DB::table('tas')->where('kodetas',$id)->get();
		// passing data tas yang didapat ke view edit.blade.php
		return view('edittas',['tas' => $tas]);

	}

    public function view($id)
	{
		// mengambil data tas berdasarkan id yang dipilih
		$tas = DB::table('tas')->where('kodetas',$id)->get();
		// passing data tas yang didapat ke view edit.blade.php
		return view('viewtas',['tas' => $tas]);

	}

	// update data tas
	public function update(Request $request)
	{
		// update data tas
		DB::table('tas')->where('kodetas',$request->id)->update([
			'merktas' => $request->merktas,
			'stocktas' => $request->stocktas,
			'tersedia' => ($request->stocktas> 0) ? 'T' : '-'
		]);
		// alihkan halaman ke halaman tas
		return redirect('/tas');
	}

	// method untuk hapus data tas
	public function hapus($id)
	{
		// menghapus data tas berdasarkan id yang dipilih
		DB::table('tas')->where('kodetas',$id)->delete();

		// alihkan halaman ke halaman tas
		return redirect('/tas');
	}


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tas sesuai pencarian data
		$tas = DB::table('tas')
		->where('mertktas','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data tas ke view index
		return view('readtas',['tas' => $tas]);

	}
}
