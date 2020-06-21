<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function limit_order_by($limit,$sort){
        return $this->orderBy($sort)->limit($limit);
    }
}
