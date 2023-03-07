<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function beasiswa(){
        return view('beasiswa');
    }

    public function magang(){
        return view('magang');
    }
}
