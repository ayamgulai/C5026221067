@extends('master2')
@section('judulhalaman', 'Data Nilai')
@section('konten')
    <br>
    <br>
    <h3>Tambah Data Nilai</h3>
    <a href="/nilaikuliah" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />


    <form action="/nilaikuliah/store" class="form-horizontal" method="post" >
        {{ csrf_field() }}

        <div class="form-group row">
            <label for = "nrp" class = "col-sm-2 col-form-label my-2 ">NRP</label>
            <div class="col-sm-8">
                <input type="text" name="NRP" class="form-control" placeholder = "Masukkan NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for = "nilai" class = "col-sm-2 col-form-label my-2 ">Nilai</label>
            <div class="col-sm-8">
                <input type="number" name="NilaiAngka" class="form-control" placeholder = "Masukkan Nilai">
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label my-2">SKS</label>
            <div class="col-sm-8">
                <input type="number" name="SKS" class="form-control" placeholder = "Masukkan SKS">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
