<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return $customer;
    }
    public function show($id){
    $customer = Customer::findOrFail($id);
    return $customer;
    }
    public function store($Code=null, $Name=null, $email=null, $Country=null,$City=null,$address=null,$ContactNumber=null){
        $customer = new Customer();
        $customer->Code = $Code;
        $customer->Name = $Name;
        $customer->email = $email;
        $customer->Country = $Country;
        $customer->City = $City;
        $customer->address = $address;
        $customer->ContactNumber = $ContactNumber;
        $customer->save();
        return $customer;
    }
    public function destroy($id){
        $tabungan = Customer::find($id)->delete();
        return $tabungan;
    }
    public function edit($id,$Code=null, $Name=null, $email=null, $Country=null,$City=null,$address=null,$ContactNumber=null){
        $customer = Customer::find($id);
        $customer->Code = $Code;
        $customer->Name = $Name;
        $customer->email = $email;
        $customer->Country = $Country;
        $customer->City = $City;
        $customer->address = $address;
        $customer->ContactNumber = $ContactNumber;
        $customer->save();
        return $customer;
    }
}
