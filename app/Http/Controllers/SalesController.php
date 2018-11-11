<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SalesController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sale(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('sale/sale',$data);
    }
    public function items(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('sale/items',$data);
    }
    public function addItem(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('sale/additem',$data);
    }
    public function addsale(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('sale/addsale',$data);
    }

}
