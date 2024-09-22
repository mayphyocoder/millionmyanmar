<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCSRController extends Controller
{
    public function index(){
        $csr = Csr::all();
        return view('admin.csr.index', compact('csr'));
    }
    public function create(){
        
        $users = User::all();
        return view('admin.csr.create',compact('users'));
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
        $csr = new Csr();
        $csr->title = $request->title;
        $csr->photo = $path ?? '';
        $csr->date = $request->date;
        $csr->user_id = $request->user_id;
        
        $csr->save();
       
        return redirect()->route('admincsr.index');
    }
    public function edit($id){
        $users = User::all();
        $csr = CSR::find($id);
        return view('admin.csr.edit', compact('csr', 'users'));
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

        $csr = Csr::find($id);
        $csr->title = $request->title;
        $csr->photo = $path ?? $csr->photo;
        $csr->date = $request->date;
        $csr->user_id = $request->user_id;

        
        $csr->update();
       
        return redirect()->route('admincsr.index');
    }

    public function destroy($id){
        $csr = CSR::find($id);
        $csr->delete();
        return redirect()->back();
    }

    
}
