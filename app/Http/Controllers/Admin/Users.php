<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $users = User::all();
        return response()->json([
           'users' => $users
        ],200);
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
        $user = User::create($request->all());
            return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       $user = User::find($id);
       if(!$user){
         return response()->json([
            'message'=>'user Not Found.'
         ],404);
       }
     
       
       return response()->json([
          'user' => $user
       ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);
            if(!$user){
              return response()->json([
                 'message'=>'user Not Found.'
              ],404);
            }
     
            $user->update($request->all());

            return response()->json([
                'message' => "user successfully updated."
            ],200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong!"
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $user = User::find($id);
            if(!$user){
              return response()->json([
                 'message'=>'user Not Found.'
              ],404);
            }
            $user->delete();
            return response()->json([
                'message' => "user successfully deleted."
            ],200);
        }
    }
    public  function activateAccount($id)
    {
            $user = User::find($id);
            if(!$user){
              return response()->json([
                 'message'=>'user Not Found.'
              ],404);
            }
          //  $user->update($request->all());
            $user->status = "active";
            $user->save();
    }
    public  function desactivateAccount($id)
    {
            $user = User::find($id);
            if(!$user){
              return response()->json([
                 'message'=>'user Not Found.'
              ],404);
            }
            $user->status = "desactive";
            $user->save();
    }

    
}
