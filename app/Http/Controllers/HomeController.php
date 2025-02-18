<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class HomeController extends Controller
{
    public function __invoke()
    {
     Return 'selamat datang';   
    }
}
