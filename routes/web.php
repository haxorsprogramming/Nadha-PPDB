<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_AdminPanel;

Route::get('/', [C_Home::class, 'home_page']);

// Halaman administrator 
Route::get('/panel-admin', [C_AdminPanel::class, 'login_page']);
Route::get('/panel-admin/login/proses', [C_AdminPanel::class, 'login_proses']);