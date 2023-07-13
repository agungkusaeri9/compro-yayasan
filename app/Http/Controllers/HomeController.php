<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.home', [
            'title' => 'Selamat datang di website resmi yayasan.'
        ]);
    }
}
