<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function save(Request $request){

        
        // Validate Some Inputs

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

    // Create Customer Object
    // $customer = new Customer;

    

    // $customer->customername = $request->customer_name;
    // $customer->contactperson = $request->txtContactPerson;
    // $customer->address = $request->txtAddress;
    // $customer->phone = $request->customer_phone;
    // $customer->email = $request->customer_email;
    // $customer->iscontract = $request->chkService;
    // $customer->servicehour = $request->txtTotalTime;
    // $customer->finalservicehour = $request->txtTotalTime;
    // $customer->backupmonitoring = $request->chkBackup;
    // $customer->save();

    //Using Query Builder

    $customer_data = array();
    $customer_data['customername'] = $request->customer_name;
    $customer_data['contactperson'] = $request->txtContactPerson;
    $customer_data['address'] = $request->txtAddress;
    $customer_data['phone'] = $request->customer_phone;
    $customer_data['email'] = $request->customer_email;
    $customer_data['iscontract'] = $request->chkService;
    $customer_data['servicehour'] = $request->txtTotalTime;
    $customer_data['finalservicehour'] = $request->txtTotalTime;
    $customer_data['backupmonitoring'] = $request->chkBackup;
    DB::table('customers')->insert($customer_data);


    return Redirect()->back()->with('success','Customer Created Successfully.');

    }
}
