<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use DB;
use Illuminate\Support\Facades\Validator;
use TwinsTech\cache\ech;
use TwinsTech\Mathematics\Weight;
use TwinsTech\Helpers\Hel;
use App\Queries\SearchThreads;
use TwinsTech\Helpers\Status;
use TwinsTech\inter\Episodes;
use TwinsTech\inter\Episode;
class ClientController extends Controller
{
    /**
     * @var \App\Models\Client
     */
    private $client;

    /**
     * ClientController constructor.
     * 
     * @param \App\Models\Client         $client
     */
    public function __construct(Client $client)
    {
        $this->client      = $client;
    }

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
  
        $image_location=$this->client->image;

        if(file_exists('uploads/Client/'.$this->client->image) AND !empty($this->client->photo)){ 
              unlink('uploads/Client/'.$this->client->photo);
           } 
              try{
                $this->client->deleteClient($id);
                  $bug = 0;
              }
              catch(\Exception $e){
                  $bug = $e->errorInfo[1];
              } 
        return redirect()->route('client.index')->with([
            'alert'      => 'Client successfully deleted.',
            'alert_type' => 'success',
        ]);

        
    }





    public function ec(ech $data){
        $data->mega();
    }

    public function we(){
        //$mat=new Weight(500);
        //print_r($mat->toLbs());
    }

    public function de($id){
        $data=Hel::deleteRow($id,'teams');

        
        
    }


    public function Status(){

        echo "dask";
        Status::statusMessageBack();
    }


    public function kenel(){
        $data=SearchThreads::get("mask");


        print_r($data);
    }


    public function inter(){
        return app(Episode::class);
    }

    public function inte(){
        $episode = $this->inter()
            ->get();

            echo $episode;
    }




}
