@extends('master2')
@section('judulhalaman', 'Data Keranjang Belanja')
@section('konten')
    <br>
    <br>
    <h3>Tambah Pembelian</h3>
    <a href="/keranjangbelanja" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />


    <form action="/keranjangbelanja/store" class="form-horizontal" method="post" >
        {{ csrf_field() }}

        <div class="form-group row">
            <label for = "KodeBarang" class = "col-sm-2 col-form-label my-2 ">Kode Barang</label>
            <div class="col-sm-8">
                <input type="number" name="KodeBarang" class="form-control" placeholder = "Masukkan Kode Barang">
            </div>
        </div>

        <div class="form-group row">
            <label for = "Harga" class = "col-sm-2 col-form-label my-2 ">Harga Barang</label>
            <div class="col-sm-8">
                <input type="number" name="Harga" class="form-control" placeholder = "Masukkan Harga Barang">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label my-2">Jumlah</label>
            <div class="col-sm-8">
                <input type="number" name="Jumlah" class="form-control" placeholder = "Masukkan Jumlah">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
