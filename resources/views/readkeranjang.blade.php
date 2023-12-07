@extends("master2")
@section('judulhalaman','Keranjang Belanja')

@section('konten')
	<h3>Keranjang Belanja</h3>
{{-- tambahin buat yang keranjang --}}
	<a class="btn btn-info" href="/keranjangbelanja/tambah"> + Beli Barang Baru</a>

	<br/>
	<br/>
    <p></p>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah </th>
			<th>Harga per Item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
            <td>{{ $p->ID}}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ $p->Harga }}</td>
            <td>
                {{ $p->Jumlah  * $p->Harga}}
            <td>
                <a class="btn btn-danger" href="/keranjangbelanja/hapus/{{ $p->ID }}">BATAL</a>
            </td>

		</tr>
		@endforeach
	</table>
    @endsection

