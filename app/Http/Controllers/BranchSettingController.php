<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Branchprofile(){
        $data['mlist']=PermissionController::MainiManu();         
        return view('BranchSetting/Branchprofile',$data);
    }
}
