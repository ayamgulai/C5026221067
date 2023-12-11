@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')
@section('konten')
    <br>
    <br>
    <h3>Edit Data Mahasiswa</h3>
    <a href="/mahasiswa" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />
@foreach($mahasiswa as $p)
    <form action="/mahasiswa/update" class="form-horizontal" method="post" >
        {{ csrf_field() }}
        <div class="form-group row">
            <label for = "NRP" class = "col-sm-2 col-form-label my-2 ">NRP</label>
            <div class="col-sm-8">
                <input type="text" name="NRP" class="form-control" placeholder = "Masukkan NRP" required value="{{ $p->NRP }}">
            </div>
        </div>
        <div class="form-group row">
            <label for = "Nama" class = "col-sm-2 col-form-label my-2 " >Nama</label>
            <div class="col-sm-8">
                <input type="text" name="Nama" class="form-control" placeholder = "Masukkan Nama" required value="{{ $p->Nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for = "Jurusan" class = "col-sm-2 col-form-label my-2 " >Jurusan</label>
            <div class="col-sm-8">
                <input type="text" name="Jurusan" class="form-control" placeholder = "Masukkan Jurusan" required value="{{ $p->Jurusan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for = "IPK" class = "col-sm-2 col-form-label my-2 " >IPK</label>
            <div class="col-sm-8">
                <input type="number" name="IPK" class="form-control" placeholder = "Masukkan IPK" step="0.01" min="0" max="4" value="{{ $p->IPK }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endforeach

@endsection
