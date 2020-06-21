<?php
namespace TwinsTech\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Team;
use DB;

class Hel{

    public static function deleteData($id,$model)
    {
        $data=DB::table($model)->find($id);

        return $data;
        
    }

    public static function deleteRow($id,$models){

        $models=DB::table($models)->find($id)->delete();
        return ('Client Deleted Successfully.');

    }



}