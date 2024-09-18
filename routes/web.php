<?php

use Laravel\Dusk\Browser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;


Route::get('/', function () {
    return view('welcome');
})->name('home');
