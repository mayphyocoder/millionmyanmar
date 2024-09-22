<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\User;
use Illuminate\Http\Request;

class AdminActivitiesController extends Controller
{
    public function index(){
        $activities = Activities::all();
        return view('admin.activities.index', compact('activities'));
    }
    public function create(){
        
        $users = User::all();
        return view('admin.activities.create',compact('users'));
    }
    public function store(Request $request){
        // Validattion
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'date' =>'required',
            'user_id' => 'required',
        ]);
        // path // -> public/--
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }
        $activities = new Activities();
        $activities->title = $request->title;
        $activities->photo = $path ?? '';
        $activities->date = $request->date;
        $activities->user_id = $request->user_id;
        
        $activities->save();
       
        return redirect()->route('adminactivities.index');
    }
    public function edit($id){
        $users = User::all();
        $activities = Activities::find($id);
        return view('admin.activities.edit', compact('activities', 'users'));
    }
    public function update(Request $request, $id){
        
        $request->validate([
            'title' => 'required',
           
            'date' => 'required',
            'user_id'=> 'required',
        ]);

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }

        $activities = Activities::find($id);
        $activities->title = $request->title;
        $activities->photo = $path ?? $activities->photo;
        $activities->date = $request->date;
        $activities->user_id = $request->user_id;

        
        $activities->update();
       
        return redirect()->route('adminactivities.index');
    }

    public function destroy($id){
        $activities = Activities::find($id);
        $activities->delete();
        return redirect()->back();
    }
}
