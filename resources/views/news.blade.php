@extends('layouts.app')
@section('news')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Berita</title>
  <style>
    .sidebar {
      background: fixed;
      background-color: #ECF2FF;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <nav>
        <ul>

          <li class="list-group-item">Berita Update</li>
          <li class="list-group-item">Lintas Berita</li>
          <li class="list-group-item">Kabar Terkini</li>

        </ul>
        </ul>
      </nav>
    </div>
    <main class="content">
      <section class="hero">
        <img src="online.png" alt="">
        <div class="hero-content">
          <h1>Berita</h1><br></h2>Kabar Politeknik Negeri Malang</h2><br><br>
          <p>07 Maret 2023</p>
          <a href="" class="action-btn">Profile</a>
          <p>Politeknik Negeri Malang adalah Perguruan Tinggi Negeri Vokasi
            yang berlokasi di Kota Malang, Provinsi Jawa Timur, Indonesia. Pendidikan Vokasi adalah pendidikan tinggi
            Program Diploma yang menyiapkan mahasiswa untuk pekerjaan dengan keahlian terapan tertentu.</p>
        </div>
      </section>
  </div>
  <div class="footer">
    <footer>
      <footer class="bg-light text-center text-lg-start">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          <b>Politeknik Negeri Malang</b>
          <p>Website : polinema.ac.id </p>
          <p> Telepon: (0341) 404424</p>
        </div>

      </footer>
    </footer>
  </div>
  </div>
</body>

</html>

@endsection