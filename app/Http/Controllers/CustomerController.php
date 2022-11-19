<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function save(Request $request){

        //return view('layouts.dashboard');

        $validated = $request->validate([
            'customer_name' => 'required|max:255',
            'customer_phone' => 'required',
            'customer_email' => 'required',
        ],
        [
            'customer_name.required' => 'Please Input Customer Name',
            'customer_phone.required' => 'Please Input Customer Phone',
            'customer_email.required' => 'Please Input Customer Email',
        ]    
    );
    $customer = new Customer;

    

    $customer->customername = $request->customer_name;
    $customer->contactperson = $request->txtContactPerson;
    $customer->address = $request->txtAddress;
    $customer->phone = $request->customer_phone;
    $customer->email = $request->customer_email;
    $customer->iscontract = $request->chkService;
    $customer->servicehour = $request->txtTotalTime;
    $customer->finalservicehour = $request->txtTotalTime;
    $customer->backupmonitoring = $request->chkBackup;
    $customer->save();
    return Redirect()->back()->with('success','Customer Created Successfully.');

    }
}
