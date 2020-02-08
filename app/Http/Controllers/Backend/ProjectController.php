<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios=Project::all();
        return view('back-end.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());
        if(Auth::check()){
            $data= new Project();

            //Project::insert($request->except('_token'));
            $folder = "back-end/project/";
            $pdate=date('d-m-Y');
            $data->title=$request->title;
            $data->purl=$request->purl;
            $data->description=$request->description;
            $data->pdate=$pdate;         
           
            
            if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = '.'.$request->image->getClientOriginalExtension();
            $fileName = str_replace($ext, date('d-m-Y') . $ext, $request->image->getClientOriginalName());
            $location = public_path('backend/project/' . $fileName);
            

           $data->image = $fileName;

            //$article->image = $request->filename;
        }
            

            $data->save()->with('status','Successfully Inserted');;
    }
            return back();


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
        Project::find($id)->delete();
        return back()->with('status','Successfully Deleted');
    }
}
