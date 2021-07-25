<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;

Route::get('/', [C_Home::class, 'home_page']);
Route::get('/tes-uuid', [C_Home::class, 'tes_uuid']);