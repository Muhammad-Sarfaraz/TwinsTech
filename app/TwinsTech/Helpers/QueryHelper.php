<?php

 namespace TwinsTech\Helpers;
 use Illuminate\Database\Eloquent\Model;


 class QueryHelper extends Model{


    public  function limit_order_by($limit,$sort){
        return $this::orderBy($sort)->limit($limit);
    }


 }