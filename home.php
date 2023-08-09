<?php
// PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();


var_dump($data);

// if($koneksi){
//  echo "koneksi berhasil";
// }else{
// echo "gagal koneksi";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs1/bs/css/bootstrap.min.css">
 </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan Pengaduan Masyrakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Buat Laporan</a>
        </li>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="Login">
       <a class="btn btn-primary" href="index3.html" role="button">Login</a>
      </form>
    </div>
  </div>
</nav>
  <div class="container">
  <div class="container">
  <div class="container">
  <div class="container">
  <div class="container">
  <div class="container">
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NIK</th>
      <th scope="col">nama</th>
      <th scope="col">USSERNAME</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>16</td>
      <td>irfan</td>
      <td>25</td>
      <td>32</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>35</td>
      <td>arya</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>32</td>
      <td>zamy</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<?php foreach($data as $pengaduan){ ?>
  <tr>
    <th scope="row">1</th>
    <td><?= $pengaduan['tgl_pengaduan'] ?></td>
    <td><?= $pengaduan['nik'] ?></td>
    <td><?= $pengaduan['isi_laporan'] ?></td>
  </tr>
<?php } ?>
</body>
</html>