<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFraudRequest;
use App\Http\Resources\FraudResource;
use App\Models\Fraud;
use Illuminate\Http\Request;

class FraudReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return FraudResource::collection(Fraud::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFraudRequest $request){
        $request->validated($request->all());
        $fraud = Fraud::create($request->all());
        return new FraudResource($fraud);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $fraud = Fraud::findOrFail($id);
        return response()->json($fraud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $fraud = Fraud::findOrFail($id);
        $fraud->update($request->all());
        return new FraudResource($fraud);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $fraud = Fraud::findOrFail($id);
        $fraud->delete();
        return response()->json(['message' => 'FraudReport deleted successfully']);
    }
}