<?php
use App\Models\Ad;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ads= Ad::All();
    return view('home' ,['ads' => $ads]);
});
