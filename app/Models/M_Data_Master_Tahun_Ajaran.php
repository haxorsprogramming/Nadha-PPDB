<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Data_Master_Tahun_Ajaran extends Model
{

    protected $table = 'tbl_data_master_tahun_ajaran';
    
    public $timestamps = false;
    
    protected $fillable = [
        'kd_tahun_ajaran',
        'nama',
        'mulai',
        'selesai',
        'status',
        'aktif'
    ];

}
