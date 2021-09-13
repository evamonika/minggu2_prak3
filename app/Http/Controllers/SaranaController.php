<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor() {
        return 'SARANA PRASARANA PERKANTORAN';
    }

    public function lab(){
        return 'SARANA PRASARANA LABORATORIUM';
    }

    public function kelas(){
        return 'SARANA PRASARANA KELAS';
    }

    public function lain(){
        return 'SARANA DAN PRASARANA LAINNYA';
    }
}
