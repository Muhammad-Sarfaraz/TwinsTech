<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\SiteInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SiteInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('back-end.setting.site-information');
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
        $this->validate($request,[

            'logo' => 'required|mimes:png',
            'flogo' => 'required|mimes:png',
            'surl' => 'required',
            'pnumber' => 'required'

        ]);

        $data = new SiteInformation();

        $data->name=$request->name;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->pnumber=$request->pnumber;
        $data->surl=$request->surl;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->youtube=$request->youtube;
        $data->email=$request->email;
        $data->ctext=$request->ctext;
        $data->address=$request->address;
        $data->flogo=$request->flogo->store('public/back-end/setting/site');
        $data->logo=$request->logo->store('public/back-end/setting/site');

        $data->save();

        return back()->with('status','Successfully Data Inserted!!!');
        
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
