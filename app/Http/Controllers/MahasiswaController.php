<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
		$mahasiswa = DB::table('mahasiswa')->get();

    	// mengirim data pegawai ke view index
		return view('readmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mahasiswa')->insert([
			'NRP' => $request->NRP,
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->IPK
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
			'NRP' => $request->NRP,
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->IPK
		]);
		return redirect('/mahasiswa');
	}




}
