<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Data_Master_Tahun_Ajaran;

class C_P_Tahun_Ajaran extends Controller
{
    public function data_tahun_ajaran()
    {
        $data_tahun_ajaran = M_Data_Master_Tahun_Ajaran::all();
        $dr = ['data_tahun_ajaran' => $data_tahun_ajaran];
        return view('admin_panel.tahun_ajaran.data_tahun_ajaran', $dr);
    }
    public function proses_tambah(Request $request)
    {
        $nama = $request -> nama;
        $dr = ['status' => $nama];
        return \Response::json($dr);
    }
}
