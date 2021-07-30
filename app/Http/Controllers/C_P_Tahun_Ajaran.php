<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_P_Tahun_Ajaran extends Controller
{
    public function data_tahun_ajaran()
    {
        return view('admin_panel.tahun_ajaran.data_tahun_ajaran');
    }
}
