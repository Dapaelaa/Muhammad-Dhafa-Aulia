<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Welcome to my laravel</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('mahasiswa') }}">Mahasiswa </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="page" href="{{ url('profile') }}">Profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="page" href="{{ url('about') }}">About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="page" href="{{ url('tabel') }}">Tabel </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


    {{-- <div class="container" style="margin-left: 40px"> --}}
<div class="container d flex justify-content-center">
  <form action="" method="post"style="width:50vw;min-width:300px;">
      <br>
        <h1> Halaman Mahasiswa </h1>
          <p> Input data mahasiswa </p>
      <div class="row">
          <div class="col">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" name="id"
                placeholder="Isi dengan angka">
              <br>
                <label class="form-label">NAMA</label>
                <input type="text" class="form-control" name="nama"
                placeholder="Nama anda">
              <br>
                <label class="form-label">NPM</label>
                <input type="number" class="form-control" name="npm"
                placeholder="Isi dengan angka">
              <br>
                <label class="form-label">EMAIL</label>
                <input type="email" class="form-control" name="email"
                placeholder="nama@gmail.com">
              <br>
                <label class="form-label">JURUSAN</label>
                <input type="text" class="form-control" name="jurusan"
                placeholder="Jurusan anda">
              <br>
          </div>
      </div>
  </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
