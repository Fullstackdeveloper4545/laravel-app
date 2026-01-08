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

Route::get('/sign-in', function () {
    return view('sign-in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/prices', function () {
    return view('prices');
})->name('prices');
