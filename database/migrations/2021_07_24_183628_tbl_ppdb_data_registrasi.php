<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPpdbDataRegistrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ppdb_data_registrasi', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 150);
            $table -> char('nis', 30);
            $table -> char('nisn', 30);
            $table -> char('nama_lengkap', 200);
            $table -> char('jenis_kelamin', 1);
            $table -> date('tanggal_lahir');
            $table -> text('tempat_lahir');
            $table -> char('prov_lahir', 10);
            $table -> char('kab_lahir', 10);
            $table -> char('kec_lahir', 10);
            $table -> char('desa_lahir', 10);
            $table -> char('provinsi', 10);
            $table -> char('kabupaten', 10);
            $table -> char('kecamatan', 10);
            $table -> char('desa', 10);
            $table -> text('alamat');
            $table -> char('golongan_darah', 5);
            $table -> char('berkacamata', 1);
            $table -> char('disabilitas', 10);
            $table -> char('tinggi_badan', 5);
            $table -> char('berat_badan', 5);
            $table -> char('periode_masuk');
            $table -> char('asal_sekolah', 200);
            $table -> char('npsn_asal_sekolah', 20);
            $table -> char('no_ijazah', 40);
            $table -> date('tanggal_lulus');
            $table -> char('no_registrasi', 40);
            $table -> char('no_hp', 30);
            $table -> char('email', 130);
            $table -> char('status_orang_tua', 30);
            $table -> char('nama_ayah', 200);
            $table -> char('nama_ibu', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ppdb_data_registrasi');
    }
}
