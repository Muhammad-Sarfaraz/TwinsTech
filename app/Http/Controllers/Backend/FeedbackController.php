<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Returns the latest submitted feedback.
     *
     * @return \Illuminate\Support\Collection
     */
    public function indexFeedbacks()
    {
        return Feedback::collection(
            Feedback::orderBy('id', 'desc')->simplePaginate(30)
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feedbacks=Feedback::get()->all();
        return view('back-end.client.feedback')->with(compact('feedbacks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback=new Feedback();
        $feedback->client_id=$request->client_id;
        $feedback->description=$request->description;

        $feedback->save();

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
        //dd($id);

        Feedback::find($id)->delete();
        return back()->with('status','Deleted Successfully!!!');
    }
}
