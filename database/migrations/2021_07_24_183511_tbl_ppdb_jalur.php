<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbJalur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ppdb_jalur', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_jalur', 20);
            $table -> char('nama_jalur', 200);
            $table -> text('deksripsi');
            $table -> char('kd_periode', 20);
            $table -> smallInteger('kuota');
            $table -> char('metode_seleksi', 20);
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
        Schema::dropIfExists('tbl_ppdb_jalur');
    }
}
