@extends('layouts.app')
@section('magang')

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

    .header {
  padding: 20px;
  text-align: center;
  background: #85CDFD;
  color: white;
  font-size: 25px;
}
  </style>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <nav>
      <div class="header">
  <h1>Program</h1>
  <p>Magang</p>
</div>
      </nav>
    </div>
    <main class="content">
      <section class="hero">
        <div class="hero-content">
          <br><h1>Magang</h1><br><br>
          <p>Magang adalah program pendidikan atau pelatihan kerja di mana seseorang bekerja untuk sementara waktu di perusahaan atau organisasi 
            untuk mendapatkan pengalaman kerja dan keterampilan yang dibutuhkan untuk karir mereka di masa depan. Biasanya, magang dilakukan oleh 
            siswa atau lulusan baru yang ingin mempelajari keterampilan praktis dan mengembangkan pemahaman tentang industri atau bidang tertentu. 
            Magang dapat dilakukan pada waktu paruh waktu atau penuh waktu, dan berlangsung selama beberapa minggu hingga beberapa bulan.</p><br>
        </div>
      </section>
  </div>
  <div class="footer">
    <footer>
      <footer class="bg-light text-center text-lg-start">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         <b></b>
        </div>

      </footer>
    </footer>
  </div>
  </div>
</body>

</html>
@endsection()