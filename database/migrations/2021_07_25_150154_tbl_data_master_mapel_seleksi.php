<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataMasterMapelSeleksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_master_mapel_seleksi', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_mapel', 20);
            $table -> char('nama_mapel', 200);
            $table -> text('deksripsi');
            $table -> char('aktif', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_master_mapel_seleksi');
    }
}
