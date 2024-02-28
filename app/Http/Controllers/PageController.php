<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Nama saya <b>Raihan Fazzaufa Rasendriya</b>
                <br>NIM saya <b>2241720201</b>";
    }
    
    public function articles($id) {
        return "Halaman artikel dengan ID " .$id;
    }
}
