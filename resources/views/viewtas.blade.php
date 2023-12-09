@extends('master2')
@section('judulhalaman', 'Data Tas')
@section('konten')
    <br>
    <br>
    <h3>Data Tas</h3>
    <a href="/tas" class="text-decoration-none"> << Kembali</a>

    <br />
    <br />
    @foreach ($tas as $p )

        <div class="row">
            <div class="col-4 border">
                <img src="" alt="gambar tas" height="auto">
            </div>
            <div class="col-8">
                <h5>Merk : </h5>
                <p>{{$p-> merktas }}</p>
                <h5>Stock : </h5>
                <p>{{$p->stocktas }}</p>
                <h5>Status Ketersediaan : </h5>
                <p>{{($p->tersedia == 'T')? 'Tersedia': 'Tidak Tersedia' }}</p>
            </div>
        </div>

    @endforeach




@endsection
