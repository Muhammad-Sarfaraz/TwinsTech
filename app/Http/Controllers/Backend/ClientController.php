<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use DB;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'address'     => 'required|string|max:150',
            'description' => 'nullable|max:400',
            'image'       => 'required|image|max:10240',
            'email'       => 'email|max:255|unique:users',
            'cnumber'     => 'nullable|required',
            'cname'       => 'required|string',
            'pname'       => 'nullable|string|max:25',
            'name'        => 'required|min:5|max:25',
            'purl'        => 'required|url'
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
            return response('Error');
        }


        $new_client= new Client;

        if($file = $request->hasFile('image')) {
            $file            = $request->file('image') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/client/' ;
            $file->move($destinationPath,$fileName);
            $new_client->image = $fileName;
        }else{
            //Avatar
            $blank="#";
            $new_client->image = $blank;
        }


        $new_client->name        = $request->name;
        $new_client->email       = $request->email;
        $new_client->cname       = $request->cname;
        $new_client->address     = $request->address;
        $new_client->pname       = $request->pname;
        $new_client->cnumber     = $request->cnumber;
        $new_client->purl        = $request->purl;
        $new_client->description = $request->description;
        $new_client->save();

        return back()->with('status','Client Added Successfully.');

  


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }





    public function Client_Data($id){

        $member=Client::where('id','=',$id)->first();
        return $member;
    }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=$this->Client_Data($id);
        return view('back-end.client.edit',compact('client'));
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
        $validator = Validator::make($request->all(), [
            'address'     => 'required|string|max:150',
            'description' => 'nullable|max:400',
            'email'       => 'email|max:255|unique:users',
            'cnumber'     => 'nullable|required',
            'cname'       => 'required|string',
            'pname'       => 'nullable|string|max:25',
            'name'        => 'required|min:5|max:25',
            'purl'        => 'required|url'
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
            return response('Error');
        }


        $update_client= Client::FindOrfail($id);

        if($file = $request->hasFile('image')) {
            $file            = $request->file('image') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/client/' ;
            $file->move($destinationPath,$fileName);
            $update_client->image = $fileName;
        }else{
            $old_image=Client::findOrFail($id);
            $image=$old_image->image;
            $update_client->image = $image;
        }


        $update_client->name        = $request->name;
        $update_client->email       = $request->email;
        $update_client->cname       = $request->cname;
        $update_client->address     = $request->address;
        $update_client->pname       = $request->pname;
        $update_client->cnumber     = $request->cnumber;
        $update_client->purl        = $request->purl;
        $update_client->description = $request->description;
        $update_client->update();

        return back()->with('status','Client Updated Successfully.');

  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::find($id);

        $image_location=$client->image;
 
        if($image_location){
         unlink('uploads/Team/'.$image_location);
        }
 
        Team::findOrfail($id)->delete();
 
        return back()->with('status','Client Deleted Successfully.');
    }
}
