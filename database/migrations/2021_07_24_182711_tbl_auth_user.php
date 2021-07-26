<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAuthUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auth_user', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 150);
            $table -> char('kata_sandi', 100);
            $table -> enum('tipe_user', ['super-admin', 'guru', 'siswa', 'tu']);
            $table -> timestamp('last_login', 0) -> nullable(); 
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
        Schema::dropIfExists('tbl_auth_user');
    }
}
