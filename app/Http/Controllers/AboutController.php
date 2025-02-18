<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AboutController extends Controller
{
    public function __invoke()
    {
        return 'Nama: [fajrul santoso], Nim: [1010010]';
    }
}
