<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
    return view('product');
   }
   public function electronic(){
   return view('electronic');
   }

   public function food(){
   return view('food');
   }
}
