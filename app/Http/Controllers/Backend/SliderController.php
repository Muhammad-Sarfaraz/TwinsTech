<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $images=Slider::all();
        return view('back-end.gallery.slider.slider')->with(compact('images'));
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
       //print_r($request->all());

      // Slider::insert([$request->except('_token')]);
      if(Auth::check()){

        request()->validate([
            'title' => 'min:3',
            'image' => 'required|image'
          ]);

      $image = new Slider;

        $image->title=$request->title;
        $image->active=$request->active;



        $folder = "gallery/slider/";
        $pdate=date('d-m-Y');
// 

        $image->image=$request->image->store('public/backend/gallery/slider');
       
       
        $image->save();
      }
       return back()->with('status','Sucessfully Uploaded!!!');
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
      //  echo $id;

      if(Auth::check()){
        $pre = Slider::find($id);
        $preimg = $pre->img;
        if($preimg){
          unlink($preimg);
        }
        Storage::delete($pre);
        $pre->delete();

        return back()->with('status','Sucessfully Deleted!!!');
    }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }

      
}
