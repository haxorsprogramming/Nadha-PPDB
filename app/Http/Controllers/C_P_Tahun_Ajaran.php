<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $mulai = $request -> mulai;
        $selesai = $request -> selesai;
        
        $status_duplikasi = $this -> cek_duplikasi_tahun_ajaran($mulai, $selesai);

        if(strtotime($mulai) > strtotime($selesai)){
            $status = 'invalid_date';
        }else{
            if($status_duplikasi == true){
                $status = 'invalid_date';
            }else{
                $total_tahun_ajaran = $this -> cek_tahun_ajaran();
                if($total_tahun_ajaran < 1){
                    $status_aktif = 'aktif';
                }else{
                    $status_aktif = 'non-aktif';
                }
                $tahun_ajaran = new M_Data_Master_Tahun_Ajaran;
                $tahun_ajaran -> kd_tahun_ajaran = Str::random(20);
                $tahun_ajaran -> nama = $nama;
                $tahun_ajaran -> mulai = $mulai;
                $tahun_ajaran -> selesai = $selesai;
                $tahun_ajaran -> status = $status_aktif;
                $tahun_ajaran -> aktif = '1';
                $tahun_ajaran -> save();
                $status = 'success';
            } 
        }
        
        $dr = ['status' => $status];
        return \Response::json($dr);
    }

    function cek_tahun_ajaran()
    {
        $total_tahun_ajaran = M_Data_Master_Tahun_Ajaran::count();
        return $total_tahun_ajaran;
    }

    function cek_duplikasi_tahun_ajaran($mulai, $selesai)
    {
        $status_duplikasi = false;
        $data_tahun_ajaran = M_Data_Master_Tahun_Ajaran::select('mulai','selesai')->get();
        foreach($data_tahun_ajaran as $dt){
            $mulai_db = $dt -> mulai;
            $selesai_db = $dt -> selesai;
            if($mulai == $mulai_db && $selesai == $selesai_db){
                $status_duplikasi = true;
                break;
            }
        }
        return $status_duplikasi;
    }

}
