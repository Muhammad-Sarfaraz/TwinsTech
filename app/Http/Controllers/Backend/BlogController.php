<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\BlogComment;
use TwinsTech\Helpers\DateHelper;

class BlogController extends Controller
{
    /**
     * @var \App\Models\Blog
     */
    private $blog;

    /**
     * @var \App\Models\Comments
     */
    private $comment;

    /**
     * @var string
     */
    public $image_url = '/uploads/blog/posts/image';

    /**
     * BlogController constructor.
     * 
     * @param \App\Models\Blog         $blog
     * @param \App\Models\BlogComment         $comment
     */

    public function __construct(Blog $blog,BlogComment $comment)
    {
        $this->blog    = $blog;
        $this->comment = $comment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=$this->blog->getPosts();
        return view('back-end.blog.view',[
            'posts' => $posts
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('back-end.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:150',
            'description' => 'required',
            'image'       => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
            return response('Error');
        }

        $new_client = new Blog;

        $image = "";

        if ($file = $request->hasFile('image')) {
            $file            = $request->file('image');
            $fileName        = $file->getClientOriginalName();
            $destinationPath = public_path() . '/uploads/blog/posts/image';
            $file->move($destinationPath, $fileName);
            $image = $fileName;
        } else {
            //Avatar
            $blank = "#";
            $image = $blank;
        }

        $today = DateHelper::current_date(); //  output => 16 june 2020
       
        $this->blog->storeBlogPost($request->all(), $image,$today);

        return redirect()->route('blog.index')->with([
            'alert'      => 'Post successfully published.',
            'alert_type' => 'success',
        ]);

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
        $post = $this->blog->findOrFail($id)->first();

        return view('back-end.blog.edit')->with([
            'post' => $post,
        ]);
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
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:150',
            'description' => 'required',
            'image'       => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
            return response('Error');
        }

        $new_client = new Blog;

        $image = "";

        if ($file = $request->hasFile('image')) {
            $file            = $request->file('image');
            $fileName        = $file->getClientOriginalName();
            $destinationPath = public_path() . $this->image_url;
            $file->move($destinationPath, $fileName);
            $image = $fileName;
        } else {
            //Avatar
            $blank = "#";
            $image = $blank;
        }

        $today = DateHelper::current_date(); //  output => 16 june 2020
       
        $this->blog->updateBlogPost($request->all(), $image,$today,$id);

        return redirect()->route('blog.index')->with([
            'alert'      => 'Post successfully updated.',
            'alert_type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->blog->deletePost($id,$this->image_url,$this->blog);

        return redirect()->route('blog.index')->with([
            'alert'      => 'Blog Post successfully deleted.',
            'alert_type' => 'success',
        ]);

    }

    /**
     * Comments Routes Goes here.
     * @param string $string
     * @return \Illuminate\Http\Response
     */


    public function deleteComment($id)
    {

        $this->comment->deleteComment($id);

        return redirect()->route('blog.index')->with([
            'alert'      => 'Blog Comment successfully deleted.',
            'alert_type' => 'success',
        ]);

    }


    public function viewComment(Request $request)
    {


    }



    public function statusUpadate($id)
    {
        $this->blog->statusUpadate($id);
        
        return redirect()->route('blog.index',[
            'statusUpdated' => 'true'
        ])->with([
            'alert'      => 'Blog status successfully updated.',
            'alert_type' => 'success',
        ]);

    }
}
