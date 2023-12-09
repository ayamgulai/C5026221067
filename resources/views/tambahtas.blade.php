@extends('master2')
@section('judulhalaman', 'Data tas')
@section('konten')
    <br>
    <br>
    <h3>Tambah Data tas</h3>
    <a href="/tas" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />


    <form action="/tas/store" class="form-horizontal" method="post" >
        {{ csrf_field() }}

        <div class="form-group row">
            <label for = "merktas" class = "col-sm-2 col-form-label my-2 ">Merk</label>
            <div class="col-sm-8">
                <input type="text" name="merktas" class="form-control" placeholder = "Masukkan Merk Tas" required>
            </div>
        </div>
        <div class="form-group row">
            <label for = "stocktas" class = "col-sm-2 col-form-label my-2 ">Stock</label>
            <div class="col-sm-8">
                <input type="number" name="stocktas" class="form-control" placeholder = "Masukkan Stock Tas" required>
            </div>
        </div>


        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
