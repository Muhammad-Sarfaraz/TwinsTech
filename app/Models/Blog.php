<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{



/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'author', 'date', 'slug', 'comment_id','image',
    ];


    /**
     * Store a blog post
     *
     * @param $data array
     * @return mixed
     */
    public function storeBlogPost($post,$image,$today)
    {
        $date = Carbon::now();
        
        return $this->create([
            'title'       => $post['title'],
            'description' => $post['description'],
            'image'       => $image,
            'author'      => Auth::user()->name,
            'date'        => $today,
            'slug'        => $today,
           
            
 
        ]);
    }

    /* Paginiate Posts */

    public function getPosts(){
           return $this->paginate(20);
    }

     /* Update Posts */
    
     public function updateBlogPost($post,$image,$today,$id){
        return $this->where('id', '=', $id)
            ->update([
                'title'       => $post['title'],
                'description' => $post['description'],
                'image'       => $image,
                'author'      => Auth::user()->name,
                'date'        => $today,
                'slug'        => $today,
            ]);
     }


    /* Status Update */

    public function statusUpadate($id)
    {

        $blog = DB::table('blogs')->find($id);

        $staus = "";

        if ($blog->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        return $this->where('id', '=', $id)
        ->update([
            'status' => $status,
        ]);
    }

    /* Delete Post */

    public function deletePost($id,$image_url,$blog)
    {
        if (file_exists($image_url . $blog->image) and !empty($blog->photo)) {
            unlink($image_url . $blog->photo);
        }
        return $this->find($id)->delete();
    }
}
