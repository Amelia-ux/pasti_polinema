<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function tentang(){
        return view('home.tentang');
    }
    public function proker(){
        return view('home.proker');
    }
    public function struktur(){
        return view('home.struktur');
    }
    public function kontak(){
        return view('home.kontak');
    }
}
