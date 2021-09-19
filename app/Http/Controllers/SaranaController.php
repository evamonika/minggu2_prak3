<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor() {
        return view('sarana.perkantoran');
    }

    public function lab(){
        return view('sarana.laboratorium');
    }

    public function kelas(){
        return view('sarana.kelas');
    }

    public function lainnya(){
        return view('sarana.lainnya');
    }
}
