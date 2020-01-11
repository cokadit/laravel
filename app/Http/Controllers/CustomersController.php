<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() 
    {
        $customers  = [
            'John Doe',
            'Jane Doe',
            'Boby the Builder',
            'Another name',
        ];
    
        // atau pake ini untuk ngereturn
        // return view('internals.customers')->with('customers', $customers);
    
        return view('internals.customers',[
            // 'customers'  untuk variable pertama di foreach di  halaman  customers.blade.php
            'customers' => $customers, 
        ]);
    }
}
