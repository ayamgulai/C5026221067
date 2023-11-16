@extends('master')
@section('judulhalaman', 'Kontak')

@section('judul')
    <div class="jumbotron">
        ini halaman Kontak
    </div>
@endsection

@section('konten')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>jd@e.com</td>
            </tr>
            @for ($i = 1; $i < 6; $i++)
                <tr>
                    <td>uus</td>
                    <td>usu</td>
                    <td>jd@e.com</td>
                </tr>
            @endfor

        </tbody>
    </table>


@endsection
