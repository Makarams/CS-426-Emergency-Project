<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLostAndFoundRequest;
use App\Http\Resources\LostAndFoundResource;
use App\Models\LostAndFound;
use Illuminate\Http\Request;

class LostAndFoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $lostAndFounds = LostAndFound::all();
        return LostAndFoundResource::collection($lostAndFounds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLostAndFoundRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLostAndFoundRequest $request){
        $validatedData = $request->validated();
        $lostAndFound = LostAndFound::create($validatedData);
        return new LostAndFoundResource($lostAndFound);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $lostAndFound = LostAndFound::findOrFail($id);
        return new LostAndFoundResource($lostAndFound);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $lostAndFound = LostAndFound::findOrFail($id);
        $lostAndFound->update($request->all());
        return new LostAndFoundResource($lostAndFound);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $lostAndFound = LostAndFound::findOrFail($id);
        $lostAndFound->delete();
        return response()->json(['message' => 'Lost and found item deleted successfully']);
    }
}