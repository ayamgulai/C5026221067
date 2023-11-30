@extends("master2")
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a class="btn btn-info" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <p>Cari Data Pegawai</p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Nama Pegawai..." value="{{ old('cari')}}">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection

