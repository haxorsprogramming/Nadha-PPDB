<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataMasterTahunAjaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_master_tahun_ajaran', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_tahun_ajaran', 20);
            $table -> char('nama', 50);
            $table -> date('mulai');
            $table -> date('selesai');
            $table -> char('status', 20);
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
        Schema::dropIfExists('tbl_data_master_tahun_ajaran');
    }
}
