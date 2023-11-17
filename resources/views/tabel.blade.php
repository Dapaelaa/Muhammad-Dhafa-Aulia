<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tabel</title>
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

      <div class="container text-center">
    <h1> Halaman tabel </h1>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Fakultas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">12345</th>
            <td>Dhafa</td>
            <td>Medan</td>
            <td>FIKTI</td>
          </tr>
          <tr>
            <th scope="row">12346</th>
            <td>Aulia</td>
            <td>Medan</td>
            <td>FIKTI</td>
          </tr>
          <tr>
            <th scope="row">12347</th>
            <td colspan="1">Budiono siregar</td>
            <td colspan="2">FIKTI </td>
          </tr>
        </tbody>
      </table>
    </div>

    
<form action="mahasiswa/simpan" method="post">
  <div class="container">
    <div class="form-group">
      <div class="row text-center">
        <div class="col-sm-6">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama">
      </div>
      <div class="col-sm-6">
        <label>NPM</label>
        <input type="number" class="form-control " name="npm">
      </div>
    </div>
      <div class="row text-center">
        <div class="col-sm-6">
          <label>Kelas</label>
          <select class="form-select" name="kelas">
          <option value="1">A1 TI</option>  
          <option value="2">B1 TI</option>
          <option value="3">C1 TI</option>
          <option value="4">D1 TI</option>
          </select> 
        </div>
        <div class="col-sm-2">
          <Label>Tanggal Lahir</Label>
          <input type="date" name="TL">
        </div> 
      </div>
    </div>
  </div>


</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>