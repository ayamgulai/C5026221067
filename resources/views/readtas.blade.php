@extends("master2")
@section('judulhalaman','Data Tas')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Tas</h3>

	<a class="btn btn-primary" href="/tas/tambah"> + Tambah Tas Baru</a>

	<br/>
	<br/>
    <p>Cari Data Tas</p>
    <form action="/tas/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Nama Tas..." value="{{ old('cari')}}">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Tas</th>
			<th>Merk Tas</th>
			<th>Stok</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($tas as $p)
		<tr>
            <td>{{ $p->kodetas }}</td>
			<td>{{ $p->merktas }}</td>
			<td>{{ $p->stocktas }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a class="btn btn-success" href="/tas/view/{{ $p->kodetas }}">Lihat</a> |
				<a class="btn btn-warning" href="/tas/edit/{{ $p->kodetas }}">Edit</a> |
				<a class="btn btn-danger" href="/tas/hapus/{{ $p->kodetas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$tas -> links()}}
    @endsection

