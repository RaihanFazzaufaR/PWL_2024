<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return "Nama saya <b>Raihan Fazzaufa Rasendriya</b>
                <br>NIM saya <b>2241720201</b>";
    }
}
