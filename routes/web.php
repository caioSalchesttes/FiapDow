<?php

use App\Models\Members;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $membros = Members::all();
    return view('layouts.app', compact('membros'));
});
