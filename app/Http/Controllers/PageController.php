<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        return 'Halaman Home';
    }
    
    public function newsPage($id){
        return 'berita ke-' .$id;
    }

    public function commentPage($nama,$id){
        return $nama.' telah berkomentar: '.$id;
    }

}
