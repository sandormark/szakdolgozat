<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        return User::create($request->all());
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
        return User::find($id);
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
       if(User::where('id',$id)->exist()){
        $user=User::find($id);
        $user->id=$request->id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->secret=$request->secret;
        $user->created_at=$request->created_at;
        $user->updated_at=$request->updated_at;
        
        $user->save();
        return response ()->json([
            "message"=>"update successully"
        ],200);
       }else{
        return response ()->json([
            "message"=>"notfound user"
        ],404);
       }  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(User::where('id',$id)->exist()){
            $user=User::find($id);
            $user->delete();
            
            $user->save();
            return response ()->json([
                "message"=>"user delete"
            ],200);
           }else{
            return response ()->json([
                "message"=>"User not delete"
            ],404);
           }  //
        //
    }
}
