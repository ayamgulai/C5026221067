@extends('master2')
@section('judulhalaman', 'Data Tas')
@section('konten')
    <br>
    <br>
    <h3>Edit Data Tas</h3>
    <a href="/tas" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />
{{--
        <form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

--}}
@foreach($tas as $p)
    <form action="/tas/update" class="form-horizontal" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodetas }}">
        <div class="form-group row">
            <label for = "merktas" class = "col-sm-2 col-form-label my-2 " >Merk</label>
            <div class="col-sm-8">
                <input type="text" name="merktas" class="form-control" placeholder = "Masukkan Merk Tas" required value="{{ $p->merktas }}">
            </div>
        </div>
        <div class="form-group row">
            <label for = "stocktas" class = "col-sm-2 col-form-label my-2 " >Stock</label>
            <div class="col-sm-8">
                <input type="number" name="stocktas" class="form-control" placeholder = "Masukkan Stock Tas" required value="{{ $p->stocktas }}">
            </div>
        </div>


        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endforeach

@endsection
