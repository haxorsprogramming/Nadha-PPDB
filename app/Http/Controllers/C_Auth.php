<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Auth_User;

class C_Auth extends Controller
{

    public function login_admin_panel_proses(Request $request)
    {
        
        $dr = $this -> F_Login_Proses($request -> username, $request -> password);
        
        return \Response::json($dr);
    }

    function F_Login_Proses($username, $password)
    {
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
                session(['user_login' => $username]);
                $dr = ['status' => 'success'];
            }else{
                /**
                 * if false, create status error of respond
                 */
                $dr = ['status' => 'wrong_password'];
            }
        }
        return $dr;
    }

}
