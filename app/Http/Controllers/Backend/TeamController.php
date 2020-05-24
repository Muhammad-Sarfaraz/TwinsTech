<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Auth;
use Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Team::all();
       return view('back-end/team/view')->with(compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end/team/add');
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
            'position'    => 'required|string|max:25',
            'image'       => 'required|image|max:10240',
            'description' => 'nullable|max:400',
            'email'       => 'email|max:255|unique:users',
            'password'    => 'required|min:8|max:15',
            'education'   => 'nullable|string|max:25',
            'name'        => 'required|min:5|max:25',
            'url'         => 'required|url'
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
            return response('Error');
        }

        $team_member=new Team;

        if($file = $request->hasFile('image')) {
            $file            = $request->file('image') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/Team/' ;
            $file->move($destinationPath,$fileName);
            $team_member->image = $fileName;
        }else{
            //Avatar
            $blank="#";
            $team_member->image = $blank;
        }

        $team_member->url         = $request->url;
        $team_member->name        = $request->name;
        $team_member->email       = $request->email;
        $team_member->position    = $request->position;
        $team_member->education   = $request->education;
        $team_member->description = $request->description;
        $team_member->password    = bcrypt($request->password);

        $team_member->save();

        return back()->with('status','Team Member Added.');
   
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


    public function Team_Meamber_Data($id){

        $member=Team::where('id','=',$id)->first();
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
        $member=$this->Team_Meamber_Data($id);
        return view('back-end.team.edit',compact('member'));
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
            'position'     => 'required|string|max:25',
            'description' => 'nullable|max:400',
            'email'       => 'email|max:255|unique:users',
            'password'    => 'required|min:8|max:15',
            'education'   => 'nullable|string|max:25',
            'name'        => 'required|min:5|max:25',
            'url'         => 'required|url'
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
            return response('Error');
        }
        
        $team_member_update=Team::findOrFail($id);

        if($file = $request->hasFile('image')) {
            $file            = $request->file('image') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/Team/' ;
            $file->move($destinationPath,$fileName);
            $team_member_update->image = $fileName;
        }else{
            $old_image=Team::findOrFail($id);
            $image=$old_image->image;
            $team_member_update->image = $image;
        }

        $team_member_update->url         = $request->url;
        $team_member_update->name        = $request->name;
        $team_member_update->email       = $request->email;
        $team_member_update->position    = $request->position;
        $team_member_update->education   = $request->education;
        $team_member_update->description = $request->description;
        $team_member_update->password    = bcrypt($request->password);

    $team_member_update->update();

        return back()->with('status','Team Member Updated.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $team_member=Team::find($id);

       $image_location=$team_member->image;

       if($image_location){
        unlink('uploads/Team/'.$image_location);
       }

       Team::findOrfail($id)->delete();

       return back()->with('status','Team Member Deleted.');
    }
}
