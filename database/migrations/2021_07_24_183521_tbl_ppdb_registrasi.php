<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbRegistrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbl_ppdb_verifikasi_dokumen', function (Blueprint $table) {
        //     $table -> id();
        //     $table -> char('kd_registrasi', 30);
        //     $table -> char('kd_dokumen', 20);
        //     $table -> char('tipe_dokumen', 30);
        //     $table -> char('status_verifikasi', 20);
        //     $table -> text('alasan_tolak');
        //     $table -> timestamp('waktu_verifikasi');
        //     $table -> char('username_verifikator', 150);
        //     $table -> char('aktif', 1);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ppdb_verifikasi_dokumen');
    }
}
