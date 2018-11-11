<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Route;
use App\PermissionModel; 
class PermissionController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth');
        
    }
    public function addpermission()
    {
        $data['mlist']=PermissionController::MainiManu(); 
        $data['userlist']=PermissionModel::GetUser();       
        return view('permission/addpermission',$data);

    }
    
    public function Useraccessright(){
        
        $data['mlist']=PermissionController::MainiManu(); 
        $data['userlist']=PermissionModel::GetUser();
        return view('permission/Useraccessright',$data);
    }
    
    
 
    public static function UserAccURL()
    {
           
           $segment=Route::currentRouteName();
           $UserAccURL=self::UrlAccessmenu();
           $keyvalue=0;
           foreach($UserAccURL[1] as $key=>$val)
           {
               foreach($val as $re)
               {
                   foreach($re as $vl){
                        if($vl->RoutesName==$segment)
                        {
                            $keyvalue=$vl->id;
                        }
                   }
                    
               }
               
           }
           $userid=Auth::user()->id;
            $result=DB::table('users')
                    ->where('id',$userid)
                    ->where('flag',1)->get();
            $submenulist=array();
            foreach($result as $k=>$val)
            {
                $submenulist=explode(",",$val->subpermission_key);

            }
            $AccKey=0;
            foreach($submenulist as $row){

                if($row==$keyvalue){
                    $AccKey=$row;
                }

            }
           return $AccKey;
    }
    public static function UrlAccessmenu()
    {
        $userid=Auth::user()->id;
        $result=DB::table('users')
                    ->where('id',$userid)
                    ->where('flag',1)->get();
        $menulist=array();
        foreach($result as $k=>$val)
        {
             $menulist=explode(",",$val->permission_key);
             
        }

        $minmenu=array();
      
        foreach ($menulist as $value) {
          
            $midm=(int)$value;
            $result1 =DB::table('permission')
                            ->where('id', $midm)
                            ->where('type', 1)
                            ->get();
            foreach($result1 as $vl)
            {
                array_push($minmenu,$vl);    
            }
                   
            
       }
      /*------------------End GET MinMenu----------------*/

       $submenut=DB::table('users')
                    ->where('id',$userid)
                    ->where('flag',1)
                    ->get();
        $submenulist=array();
        foreach($submenut as $k=>$val)
        {
            $submenulist=explode(",",$val->subpermission_key);

        }
        $submen=array();   

        foreach($submenulist as $sub){
            $submid=(int)$sub;                 
                $resultparent =DB::table('permission')                            
                            ->where('id',$submid)                                        
                            ->get();
                foreach($resultparent as $val)
                {
                    array_push($submen,$val);
                }
        
        }
    /*------------------End GET Submenu--------------*/
        $listAA=array();
        $final=array();
       
       foreach($minmenu as $vl)
       {
           $subarray=array();
           foreach($submen as $key=>$subval){

                $sub=DB::table('permission')
                        ->where('Parent_id',$vl->id)
                        ->where('id',$subval->id)
                        ->get();
                if($sub->count()>0)
                {
                    foreach($sub as $vlsub)
                    {
                        array_push($subarray, $vlsub);
                    }
                }
             
           } 
           array_push($final,$vl);
           array_push($listAA,$vl=[$vl->id=>$subarray]);
           //array()
       }    
       $listofarray=array($final,$listAA);
       //dd($listofarray);
       return $listofarray;
       
    }
    public static function MainiManu()
    {
        $userid=Auth::user()->id;
        $result=DB::table('users')
                    ->where('id',$userid)
                    ->where('flag',1)->get();
        $menulist=array();
        foreach($result as $k=>$val)
        {
             $menulist=explode(",",$val->permission_key);
             
        }

        $minmenu=array();
      
        foreach ($menulist as $value) {
          
            $midm=(int)$value;
            $result1 =DB::table('permission')
                            ->where('id', $midm)
                            ->where('type', 1)
                            ->get();
            foreach($result1 as $vl)
            {
                array_push($minmenu,$vl);    
            }
                   
            
       }
      /*------------------End GET MinMenu----------------*/

       $submenut=DB::table('users')
                    ->where('id',$userid)
                    ->where('flag',1)
                    ->get();
        $submenulist=array();
        foreach($submenut as $k=>$val)
        {
            $submenulist=explode(",",$val->subpermission_key);

        }
        $submen=array();   

        foreach($submenulist as $sub){
            $submid=(int)$sub;                 
                $resultparent =DB::table('permission')
                            ->where('type', 2)
                            ->where('id',$submid)                                        
                            ->get();
                foreach($resultparent as $val)
                {
                    array_push($submen,$val);
                }
        
        }
    /*------------------End GET Submenu--------------*/
        $listAA=array();
        $final=array();
       
       foreach($minmenu as $vl)
       {
           $subarray=array();
           foreach($submen as $key=>$subval){

                $sub=DB::table('permission')
                        ->where('Parent_id',$vl->id)
                        ->where('id',$subval->id)
                        ->get();
                if($sub->count()>0)
                {
                    foreach($sub as $vlsub)
                    {
                        array_push($subarray, $vlsub);
                    }
                }
             
           } 
           array_push($final,$vl);
           array_push($listAA,$vl=[$vl->id=>$subarray]);
           //array()
       }    
       $listofarray=array($final,$listAA);
       //dd($listofarray);
       return $listofarray;
       
    }
}
