<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actualities', function () {
    return view('pages.actualities.actuality');
});


Route::get('/abouts', function() {
    return view('pages.abouts.about');
});


Route::get('/events', function() {
    return view('pages.events.event');
});


Route::get('/galeries', function() {
    return view('pages.galeries.galery');
});

Route::get('/login', function() {
    return view('pages.auth.login');
});


Route::get('/contacts', function() {
    return view('pages.contacts.contact');
});


Route::get('/faqs', function() {
    return view('pages.faqs.faq');
});





