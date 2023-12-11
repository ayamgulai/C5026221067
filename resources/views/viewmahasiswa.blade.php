@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')
@section('konten')
    <br>
    <br>
    <h3>Data Mahasiswa</h3>
    <a href="/pegawai" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />
    <div class='row'>
        <div class='col-4 border'>
        </div>
	    @foreach($mahasiswa as $p)
	    <form method="get" class='col-8'>
            <div class="form-group">
                <label for="NRP" class="col-sm-2 control-label">NRP</label>
                <div class="col">
                    <input name="NRP" type="text" class="form-control w-100" id="NRP" value="{{ $p->NRP }}" required="required" disabled>
                </div>
            </div>
        <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label">Nama</label>
            <div class="col">
                <input name="Nama" type="text" class="form-control w-100" id="Nama" value="{{ $p->Nama }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="Jurusan" class="col-sm-2 control-label">Jurusan</label>
            <div class="col">
                <input name="jabatan" type="text" class="form-control w-100" id="Jurusan" value="{{ $p->Jurusan }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="IPK" class="col-sm-2 control-label">IPK</label>
            <div class="col">
                <input name="IPK" type="number" class="form-control w-100" id="IPK" value="{{ $p->IPK }}" required="required" disabled>
            </div>
        </div>


        <div class="form-group">
            <div class="col">
                <a href="/mahasiswa" class='form-control btn btn-primary'>Ok</a>
            </div>
        </div>

	    </form>

	    @endforeach
    </div>




@endsection
