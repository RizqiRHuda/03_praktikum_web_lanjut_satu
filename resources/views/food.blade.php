@extends('layouts.app')
@section('food')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #E9F8F9;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .header {
            padding: 60px;
            text-align: center;
            background: #FBC252;
            color: white;
        }

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .gambar{
            width: 100px;
            height: 80px;
        }

        
    </style>
</head>

<body>
    <div class="header">
        <h1>My Food</h1>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
            <img src="{{asset('/')}}img/sate.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Sate</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
            <img src="{{asset('/')}}img/opor.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Opor</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
            <img src="{{asset('/')}}img/soto.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Soto</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="{{asset('/')}}img/rawon.jpg">
            <img src="{{asset('/')}}img/rawon.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Rawon</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="{{asset('/')}}img/pecel.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Pecel</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="{{asset('/')}}img/gudeg.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Gudeg</div>
    </div>

</body>

</html>
@endsection()