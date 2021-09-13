<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function ti(){
        return "SELAMAT DATANG DI PRODI TEKNIK INFORMATIKA";
    }

    public function mi(){
        return "SELAMAT DATANG DI PRODI MANAJEMEN INFORMATIKA";
    }
}
