<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAuthLogLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auth_log_login', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 150);
            $table -> timestamp('waktu_login', 0) -> nullable();
            $table -> char('ip_address', 30);
            $table -> text('user_agent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_auth_log_login');
    }
}
