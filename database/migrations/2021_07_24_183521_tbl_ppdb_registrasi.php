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
        Schema::create('tbl_ppdb_registrasi', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_registrasi', 25);
            $table -> char('kd_periode', 30);
            $table -> char('kd_jalur', 20);
            $table -> char('kd_jurusan', 20);
            $table -> char('username', 150);
            $table -> timestamp('waktu_daftar');
            $table -> char('status_dokumen', 20);
            $table -> char('status_verifikasi', 20);
            $table -> char('status_pembayaran', 20);
            $table -> datetime('waktu_verifikasi');
            $table -> char('status_kelulusan', 20);
            $table -> char('username_verifikator', 150);
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
        Schema::dropIfExists('tbl_ppdb_registrasi');
    }
}
