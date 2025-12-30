<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/crm', function () {
    return view('crm');
})->name('crm');

Route::get('/crm-highlight', function () {
    return view('crm-highlight');
})->name('crm.highlight');
