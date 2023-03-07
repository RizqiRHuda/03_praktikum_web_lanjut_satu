@extends('layouts.app')
@section('electronic')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electronic</title>
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
            background: #2F58CD;
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
        <h1>My</h1>
        <h1>Electronic</h1>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
            <img src="{{asset('/')}}img/resistor.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Resistor</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
            <img src="{{asset('/')}}img/kondensator.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">kondensator</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
            <img src="{{asset('/')}}img/LED.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Lampu LED</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="{{asset('/')}}img/rawon.jpg">
            <img src="{{asset('/')}}img/transistor.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Transistor</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="{{asset('/')}}img/dioda.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Dioda</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img_mountains.jpg">
            <img src="{{asset('/')}}img/kabel.jpg" class="gambar" width="800" height="600">
        </a>
        <div class="desc">Kabel</div>
    </div>

</body>

</html>
@endsection()