<?php

// use Illuminate\Support\Facades\Route;


// Route::view('url','nama file view');
Route::view('/','welcome');  
Route::view('contact','contact');  
Route::view('about','about');  

Route::get('customers', function(){

    $customers  = [
        'John Doe',
        'Jane Doe',
        'Boby the Builder',
    ];

    // atau pake ini untuk ngereturn
    // return view('internals.customers')->with('customers', $customers);

    return view('internals.customers',[
        // 'customers'  untuk variable pertama di foreach di  halaman  customers.blade.php
        'customers' => $customers, 
    ]);

    

    

    
});
