<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 5;
        $b = 4;
        $c = $a* $b;
        return "<h1>Hasilnya ituuu ".$c."</h1>";
    }
    public function identity(){
        $nama = "momo";
        $umur = 42;
        $alamat = "chernobyl";
        return view("validasi",['nama'=>$nama,'umur'=>$umur,'alamat'=>$alamat]);
    }
}
