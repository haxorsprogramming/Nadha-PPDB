<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbPeriode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ppdb_periode', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_periode', 20);
            $table -> char('nama_periode', 200);
            $table -> text('deksripsi');
            $table -> char('kd_tahun_ajaran', 20);
            $table -> date('tanggal_mulai');
            $table -> date('tanggal_selesai');
            $table -> integer('biaya_pendaftaran');
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
        Schema::dropIfExists('tbl_ppdb_periode');
    }
}
