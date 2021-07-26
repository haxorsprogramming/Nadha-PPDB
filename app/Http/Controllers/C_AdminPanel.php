<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Auth_User;

class C_AdminPanel extends Controller
{
    public function login_page()
    {
        return view('admin_panel.login_page');
    }
    public function login_proses(Request $request)
    {
        /**
         * Get data from POST
         * if development mode go add this route -> controller to CSRF whitelist
         */
        $username = $request -> username;
        $password = $request -> password;
        /**
         * Check total user
         */
        $jumlah_user = M_Auth_User::where('username', $username) -> count();
        /**
         * Check & give result if user total < 1
         */
        if($jumlah_user == 0){
            $dr = ['status' => 'no_user'];
        }else{
            /**
             * Get password from database with model
             */
            $data_user = M_Auth_User::where('username', $username) -> first();
            $passwordUserDb = $data_user -> kata_sandi;
            /**
             * Get password verify with native php
             */
            $cekPassword = password_verify($password, $passwordUserDb);
            /**
             * Check if password true or false
             */
            if($cekPassword == true){
                /**
                 * if true, create session & status success of respond
                 */
                session(['userLogin' => $username]);
                $dr = ['status' => 'success'];
            }else{
                /**
                 * if false, create status error of respond
                 */
                $dr = ['status' => 'wrong_password'];
            }
        }

        return \Response::json($dr);
    }
}
