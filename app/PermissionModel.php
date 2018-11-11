<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    public static function GetUser(){

        $user=DB::table("users")
                 ->where('flag',1)
                 ->get();
        return $user;
    }

}
