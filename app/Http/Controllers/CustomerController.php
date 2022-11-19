<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\Customer;

class CustomerController extends Controller
{
    //
    public function save(Request $request){

        //return view('layouts.dashboard');

        $validated = $request->validate([
            'customer_name' => 'required|unique:tbl_customer|max:255',
            'customer_phone' => 'required',
            'customer_email' => 'required',
        ],
        [
            'customer_name.required' => 'Please Input Customer Name',
            'customer_phone.required' => 'Please Input Customer Phone',
            'customer_email.required' => 'Please Input Customer Email',
        ]    
    );
    }
}
