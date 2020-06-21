<?php

namespace TwinsTech\Helpers;

use App\Http\Controllers\Controller;

class deleteHelper{

    public static function deletePost($id){

        return find($id)->delete();

    }
}