<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($nama,$pesan){
        return "Saya ".$nama." Pesan dari Saya adalah ".$pesan;
    }
}
