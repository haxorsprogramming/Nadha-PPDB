<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_AdminPanel;

Route::get('/', [C_Home::class, 'home_page']);

// Halaman administrator 
Route::get('/panel-admin', [C_AdminPanel::class, 'login_page']);
Route::post('/panel-admin/login/proses', [C_Auth::class, 'login_admin_panel_proses']);

Route::get('/panel-admin/dashboard', [C_AdminPanel::class, 'dashboard']);
Route::get('/panel-admin/beranda', [C_AdminPanel::class, 'beranda']);