<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class Offers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $offers = offer::all();
        return response()->json([
           'offers' => $offers
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
        $offer = Offer::create($request->all());
            return $offer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       $offer = Offer::find($id);
       if(!$offer){
         return response()->json([
            'message'=>'offer Not Found.'
         ],404);
       }
     
       
       return response()->json([
          'offer' => $offer
       ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $offer = Offer::find($id);
            if(!$offer){
              return response()->json([
                 'message'=>'offer Not Found.'
              ],404);
            }
     
            $offer->update($request->all());

            return response()->json([
                'message' => "offer successfully updated."
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
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $offer = Offer::find($id);
            if(!$offer){
              return response()->json([
                 'message'=>'offer Not Found.'
              ],404);
            }
            $offer->delete();
            return response()->json([
                'message' => "offer successfully deleted."
            ],200);
        }
    }
}
