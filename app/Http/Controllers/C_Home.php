<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class C_Home extends Controller
{
    public function home_page()
    {
        $dr = ['page' => 'home'];
        return view('home.home_page', $dr);
    }
    public function tes_uuid()
    {
        $id = Str::uuid();
        echo $id;
    }
}
