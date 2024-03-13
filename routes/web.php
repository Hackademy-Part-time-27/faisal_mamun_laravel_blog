<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/contatti', function() {
    return view('contacts', ['title' => 'contatti']);
});

route::get('/chi-sono', function() {
    return view('chi-sono', [
        'title' => 'Chi Sono',
        'descrizione' => 'questa è una descrizione'
    ]);
});
