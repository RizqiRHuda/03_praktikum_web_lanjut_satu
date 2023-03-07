@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial;
      margin: 0;
    }

    .header {
      padding: 60px;
      text-align: center;
      /* background: #1abc9c; */
      background: #2B3467;
      color: white;
      font-size: 30px;
    }

    .content {
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>POLITEKNIK NEGERI MALANG</h1>
    <p>Pemrograman Web Lanjut</p>
  </div>

  <div class="content">
    <h1>Rizqi Rohmatul Huda</h1>
    <h2>2G-TI</h2>
    <h2>26 / 2141720264</h2>
  </div>
</body>

</html>

@endsection