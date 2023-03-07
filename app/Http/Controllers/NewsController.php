<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function berita($id = ''){
        if($id == ''){
            return view('news'); 
        }else{
            echo "Halaman tidak ada";
        }
       
    }
}
