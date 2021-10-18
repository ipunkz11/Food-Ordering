<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CreateCustomer(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt('password');
        $customer->save();

        return response()->json(
            [
                'Message' => "Success",
                'Data' => $customer
            ]
            );
    }
}
