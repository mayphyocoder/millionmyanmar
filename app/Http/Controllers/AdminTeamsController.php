<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class AdminTeamsController extends Controller
{
    public function index(){
        
        $teams = Teams::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function create(){
        return view('admin.teams.create');
    }

    
    public function store(Request $request){
        // Validattion
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'position' => 'required',
        ]);
        // path // -> public/--
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }
        $team = new Teams();
        $team->name = $request->name;
        $team->photo = $path ?? '';
        $team->position = $request->position;
        
        $team->save();
       
        return redirect()->route('adminteams.index');
    }

    public function edit($id){
        $team = Teams::find($id);
        return view('admin.teams.edit', compact('team'));
    }
    public function update(Request $request, $id){
        
        $request->validate([
            'name' => 'required',
           
            'position' => 'required',
        ]);
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }
        $team = Teams::find($id);
        $team->name = $request->name;
        $team->photo = $path ?? $team->photo;
        $team->position = $request->position;
        
        $team->update();
       
        return redirect()->route('adminteams.index');

    }
    public function destroy($id){
        $team = Teams::find($id);
        $team->delete();
        return redirect()->back();
    }
}
