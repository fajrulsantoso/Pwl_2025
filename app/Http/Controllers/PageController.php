<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang ';
       }

     public function about(){
        return 'Nama: [Fajrul santoso], NIM: [244107023010]';
    }  

    public function articles(){
        return 'Halaman artikan dengan id';
    }  

}
