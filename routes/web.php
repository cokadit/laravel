<?php

// use Illuminate\Support\Facades\Route;

// Route::view('url','nama file view');
Route::view('/','home');  
Route::view('contact','contact');  
Route::view('about','about');  

Route::get('customers','CustomersController@list');
