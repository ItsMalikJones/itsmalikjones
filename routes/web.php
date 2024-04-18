<?php

use Laravel\Dusk\Browser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/fcps/punch', function () {
    $employeeNumber = request('employee_number');
    $browser = new HttpBrowser(HttpClient::create());
    $browser->request('GET', 'https://fayettecountysdky.executime.com/ExecuTime/Login.action?bmark=Index.action&kioskLogin=false');
    $browser->submitForm('Sign In', [
        'username' => $employeeNumber,
        'password' => $employeeNumber,
        'fastClock' => 1,
    ]);
    return response()->isOk();
})->name('fcps.punch');
