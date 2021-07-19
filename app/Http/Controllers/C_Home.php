<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function home_page()
    {
        $dr = ['page' => 'home'];
        return view('home.home_page', $dr);
    }
}
