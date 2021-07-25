<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbHasilSeleksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ppdb_hasil_seleksi', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_registrasi', 30);
            $table -> char('status_seleksi', 20);
            $table -> char('ranking', 3);
            $table -> timestamp('waktu_ranking');
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
        Schema::dropIfExists('tbl_ppdb_hasil_seleksi');
    }
}
