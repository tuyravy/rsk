<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customer(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('Customers/Customer',$data);
    }
    public function addcustomer()
    {
        $data['mlist']=PermissionController::MainiManu();         
        return view('Customers/AddCustomer',$data);

    }
   
}
