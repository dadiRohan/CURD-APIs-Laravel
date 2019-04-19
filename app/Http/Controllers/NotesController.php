<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

use App\Jobs\NotesJob;

class NotesController extends Controller
{
    //

    public function index(Request $request)
    {
    	$notes = Note::all();
        // dd($notes);
    	return response()->json($notes);
    }

    public function store(Request $request)
    {   
        // dd($request);
        // $note = dispatch_now(new NotesJob($request));
        
        $note = Note::create($request->all());
    	$note->save();
        return response()->json($note);
    }

    public function show($id){
        // dd($id);
        $note = Note::where('id',$id)->get();

        return response()->json($note);
    }

    public function update(Request $request,$id)
    {   
        // dd($request);
    	$note = Note::findOrFail($id);
    	$note->update($request->all());

    	return response()->json($note);
    }

    public function destroy(Request $request,$id)
    {
    	Note::find($id)->delete();

    	return response()->json('Deleted Successfully!',204);
    }
}
