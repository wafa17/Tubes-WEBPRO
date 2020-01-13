<!DOCTYPE html>
<html>
<head>
  <!-- Tag meta untuk menentukan karakter encoding yang digunakan, biasanya UTF-8 -->
  <meta charset="utf-8" />

  <!-- Tag meta agar kompatibel dengan Internet Explorer -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Judul Web -->
  <title>Open Library - Universitas Telkom</title>

  <!-- Tag meta untuk melakukan sekala secara responsif terhadap viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Menyisipkan Bootstrap sesuaikan sama tempat folder-->
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      padding: 0;
      margin: 0;
    }
    .nav-item, .dropdown-item {
      float: left;
      font-size: 14px;
      color: #2477cc;
      font-weight: bold;
    }
    .nav-item a:hover {
      background-color: #2477cc;
      color: white;
    }
    .dropdown:hover>.dropdown-menu {
      display:block;
    }
    .dropdown-menu a:hover {
      background-color: #2477cc;
      color: white;
    }
    .page-judul {
      padding-top: 10px;
      padding-bottom: 10px;
      color: #2477cc;
    }
    th {
      color: #2477cc;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm ">  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog & Koleksi</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url() ?>">Katalog</a>
              <a class="dropdown-item" href="#">Penelusuran Peminjaman</a>
              <a class="dropdown-item" href="#">Usulan Katalog</a>
              <a class="dropdown-item" href="#">Notifikasi Ketersediaan</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Keanggotaan</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Notifikasi Anggota</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dokumen</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog & Koleksi</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">SK Logo dan Sistem Open Library</a>
              <a class="dropdown-item" href="#">Ketentuan Bebas Pinjam Perpustakaan</a>
              <a class="dropdown-item" href="#">Formulir Pengajuan Bahan Pustaka</a>
              <a class="dropdown-item" href="#">Tool iThenticate untuk Pengecekan Referensi pada Karya Tulis Ilmiah</a>
              <a class="dropdown-item" href="#">Akses eJournal dan eBook</a>
              <a class="dropdown-item" href="#">Open Library Member Survival Guide</a>
              <a class="dropdown-item" href="#">Peraturan Tel-U Open Library</a>
            </div>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Tahun Terbit</a>
          </li>
        </ul>
      </div>
        <div class="btn-group ml-auto">
          <button type="button" class="btn btn-sm btn-primary dropdown-toggle" id="toggle-popover" data-toggle="modal" data-target="#modal-filter">
            Search<span class="caret"></span>
          </button>
          <a class="btn btn-danger btn-sm" href="">Keluar</a>
        </div>
    </nav>
  </div>