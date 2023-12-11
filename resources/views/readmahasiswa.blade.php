@extends("master2")
@section('judulhalaman','Data Mahasiwa')

@section('konten')
<br>
<br>
	<h3>Data Mahasiswa</h3>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Jurusan }}</td>
			<td>{{ $p->IPK }}</td>
			<td>
                <a class="btn btn-success" href="/mahasiswa/view/{{ $p->NRP }}">Lihat</a> |
				 <a class="btn btn-warning" href="/mahasiswa/edit/{{ $p->NRP }}">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection

