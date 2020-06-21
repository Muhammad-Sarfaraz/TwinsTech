<?php

namespace App\Queries;

use App\Models\Team;
use Illuminate\Contracts\Pagination\Paginator;

final class SearchThreads{

    //Search code goes here

    /**
     * @return \App\Models\Client[]
     */
    public static function get(string $keyword, int $perPage = 20)
    {
        return Team::all();
    }

    public static function set(string $keyword,int $perpage){
        //
    }


}