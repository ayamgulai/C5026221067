<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>@yield('judulhalaman','Data Pegawai')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Samuel 067</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Database</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pegawai">Pegawai</a></li>
                  <li><a class="dropdown-item" href="/nilaikuliah">Lat 1: Nilai Kuliah</a></li>
                  <li><a class="dropdown-item" href="/keranjangbelanja">Lat 2: Keranjang Belanja</a></li>
                  <li><a class="dropdown-item" href="/tas">Pra EAS: Tas</a></li>
                  <li><a class="dropdown-item" href="/mahasiswa">EAS: Mahasiswa</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('konten')
        @include('footer')
    </div>
</body>
</html>
