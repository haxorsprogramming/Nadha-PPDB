<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('tbl_auth_user') -> insert([
            'username' => 'admin',
            'kata_sandi' => password_hash('admin', PASSWORD_DEFAULT),
            'tipe_user' => 'super-admin',
            'last_login' => $now,
            'aktif' => '1'
        ]);
    }
}
