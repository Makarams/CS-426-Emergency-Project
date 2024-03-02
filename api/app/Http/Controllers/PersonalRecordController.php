<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalRequest;
use App\Http\Resources\PersonalResource;
use App\Models\PersonalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalRecordController extends Controller
{
    public function index(){
        return PersonalResource::collection(PersonalRecord::all());
    }

    public function store(StorePersonalRequest $request){
        $request->validated($request->all());
        $personal = PersonalRecord::create($request->all());
        return new PersonalResource($personal);
    }

    public function show($id){
        $record = PersonalRecord::with('user')->findOrFail($id);
        return response()->json($record);
    }

    public function update(Request $request, $id){
        $personal = PersonalRecord::findOrFail($id);
        $personal->update($request->all());
        return new PersonalResource($personal);
    }

    public function destroy($id){
        $personal = PersonalRecord::findOrFail($id);
        $personal->delete();
        return response()->json(['message' => 'Personal record deleted successfully']);
    }

    private function isNotAuthorized($task){
        if(Auth::user()->id !== $task->user_id){
            return $this->error('','You are not Authorize to make this request',403);
        }
    }
}