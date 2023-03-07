@extends('layouts.app')
@section('beasiswa')

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
  background: #1abc9c;
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
  <p>Beasiswa</p>
</div>
      </nav>
    </div>
    <main class="content">
      <section class="hero">
        <div class="hero-content"><br>
          <h1>Beasiswa</h1><br>
          <p>Beasiswa adalah bantuan finansial atau dana yang diberikan kepada seseorang untuk membantu biaya studi atau kegiatan akademik lainnya. 
            Beasiswa dapat diberikan oleh lembaga pendidikan, pemerintah, organisasi non-profit, atau perusahaan swasta. Tujuannya adalah untuk membantu 
            individu yang memiliki kemampuan akademik atau potensi untuk mencapai prestasi akademik, namun mungkin kesulitan untuk membiayai pendidikan mereka sendiri.
             Beasiswa biasanya diberikan dalam bentuk tunai atau potongan biaya studi, dan biasanya terkait dengan persyaratan akademik atau prestasi tertentu.</p><br><br>
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