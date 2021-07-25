<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbVerifikasiNilaiRapor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ppdb_verifikasi_nilai_rapor', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_registrasi', 30);
            $table -> char('kd_mapel', 25);
            $table -> integer('semester');
            $table -> integer('nilai');
            $table -> char('status_verifikasi', 20);
            $table -> timestamp('waktu_verifikasi');
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
        Schema::dropIfExists('tbl_ppdb_verifikasi_nilai_rapor');
    }
}
