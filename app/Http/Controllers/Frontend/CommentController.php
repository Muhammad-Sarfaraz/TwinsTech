<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use TwinsTech\Helpers\Date;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      /**
     * @var \App\Models\Comments
     */
    private $comment;
    /**
     * CommentController constructor.
     * 
     * @param \App\Models\Comment         $comment
     */
    public function __construct(BlogComment $comment)
    {
        $this->comment = $comment;
    }


    public function storeComment(Request $request)
    {
        $blog_id     = $request->id();
        $currentDate = Date::current_date();
        $this->comment->storeComment($request()->all, $blog_id, $currentDate);

        return back()->with([
            'alert'      => 'Your Comment Sucessfully Saved,Wait For The Aproval',
            'alert_type' => 'success',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
