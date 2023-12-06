@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
    <br>
    <br>
    <h3>Data Pegawai</h3>
    <a href="/pegawai" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />
    @foreach ($pegawai as $p )

        <div class="row">
            <div class="col-4 border"></div>
            <div class="col-8">
                <h5>Nama : </h5>
                <p>{{$p->pegawai_nama }}</p>
                <h5>Jabatan : </h5>
                <p>{{$p->pegawai_jabatan }}</p>
                <h5>Umur : </h5>
                <p>{{$p->pegawai_umur }}</p>
                <h5>Alamat : </h5>
                <p>{{$p->pegawai_alamat }}</p>
            </div>
        </div>

    @endforeach




@endsection
