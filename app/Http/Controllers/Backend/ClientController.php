<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //  $clients=Client::get()->all();

        //$clients=Client::join('done', 'done.id', '=', 'work.work_done')
        $clients=DB::table('clients')
        ->Leftjoin('feedback', 'clients.id', '=', 'feedback.client_id')
        ->select('clients.*','feedback.description')
       ->get();
     return view('back-end.client.view')->with(compact('clients'));

     //return $clients;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back-end.client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $client= new Client;
        $client->name=$request->name;
        $client->cname=$request->cname;
        $client->address=$request->address;
        $client->pname=$request->pname;
        $client->cnumber=$request->cnumber;
       
        $client->purl=$request->purl;
        $client->description=$request->description;

if($request->image){
    $client->image=$request->image->store('public/client');
}
        



        $client->save();

        return back()->with('status','Client Added Successfully!!!');

  


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // echo "hello";
       echo "sadsa";
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


    public function feedback()
    {
       // return view('backend.client.feedback');
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
        Client::find($id)->delete();

        return back()->with('status','Sucessfully Deleted!!!');
    }
}
