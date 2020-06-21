<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    /* Delete Comment */

    public function deleteComment($id){
        return $this->findOrFail($id)->delete();
    }


    /* Store Comment */

    public function store($request,$id,$avatar,$date){
        return $this->create([
            'blog_id'        => $id,
            'avatar'         => $avatar,
            'status'         => 0,
            'comment'        => $request['comment'],
            'replies'        => 'blank',
            'upvote'         => 0,
            'downupvote'     => 0,
            'recommended_by' => 0,
            'date'           => $date,
            
 
        ]);
    }

}
