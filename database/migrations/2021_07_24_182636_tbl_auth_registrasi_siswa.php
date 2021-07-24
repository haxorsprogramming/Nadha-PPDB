<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAuthRegistrasiSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auth_registrasi_siswa', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 150);
            $table -> char('kata_sandi', 100);
            $table -> timestamp('waktu_registrasi', 0) -> nullable();
            $table -> char('token_registrasi', 20);
            $table -> char('status_aktivasi', 1);
            $table -> dateTime('waktu_aktivasi', 0) -> nullable();
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
        Schema::dropIfExists('tbl_auth_registrasi_siswa');
    }
}
