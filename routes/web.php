<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abouts', function() {
    return view('pages.abouts.about');
});


Route::get('/services', function() {
    return view('pages.services.service');
});


Route::get('/doctors', function() {
    return view('pages.doctors.doctor');
});

Route::get('/blogs', function() {
    return view('pages.blogs.blog');
});


Route::get('/contacts', function() {
    return view('pages.contacts.contact');
});





