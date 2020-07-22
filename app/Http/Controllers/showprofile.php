<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showprofile extends Controller
{


    public function __invoke()
    {
        


        $chunk = collect([
            (object)['site' => 'google.com'],
            (object)['site' => 'facebook.com'],
            (object)['site' => 'yahoo.com'],
            (object)['site' => 'digg.com'],
            (object)['site' => 'twitter.com'],
            (object)['site' => 'moz.com']
     
        ])->chunk(2);
     
        dd($chunk);
    }
}
