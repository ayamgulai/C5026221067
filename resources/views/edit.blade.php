@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
    <br>
    <br>
    <h3>Edit Data Pegawai</h3>
    <a href="/pegawai" class="text-decoration-none"> << Kembali</a>

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
@foreach($pegawai as $p)
    <form action="/pegawai/update" class="form-horizontal" method="post" >
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group row">
            <label for = "nama" class = "col-sm-2 col-form-label my-2 ">Nama</label>
            <div class="col-sm-8">
                <input type="text" required="required" name="nama" class="form-control"  value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label for = "jabatan" class = "col-sm-2 col-form-label my-2 ">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" required="required" name="jabatan" class="form-control"  value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label my-2">Umur</label>
            <div class="col-sm-8">
                <input type="number" required="required" name="umur" class="form-control"  value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label my-2">Alamat</label>
            <div class="col-sm-8">
                <input type="textarea" required="required" name="alamat" class="form-control"  value="{{ $p->pegawai_alamat }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endforeach

@endsection
