<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Auth_User;

class C_AdminPanel extends Controller
{

    public function login_page()
    {
        return view('auth.login_page');
    }

    public function dashboard()
    {
        return view('admin_panel.dashboard');
    }

}
