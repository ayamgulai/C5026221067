@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
    <br>
    <br>
    <h3>Tambah Data Pegawai</h3>
    <a href="/pegawai" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />


    <form action="/pegawai/store" class="form-horizontal" method="post" >
        {{ csrf_field() }}

        <div class="form-group row">
            <label for = "nama" class = "col-sm-2 col-form-label my-2 ">Nama</label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for = "jabatan" class = "col-sm-2 col-form-label my-2 ">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" name="jabatan" class="form-control" placeholder = "Masukkan Jabatan Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label my-2">Umur</label>
            <div class="col-sm-8">
                <input type="number" name="umur" class="form-control" placeholder = "Masukkan Umur Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label my-2">Alamat</label>
            <div class="col-sm-8">
                <input type="textarea" name="alamat" class="form-control" placeholder = "Masukkan Alamat Pegawai">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
