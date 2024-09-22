<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function create(){

        
        return view('admin.users.create');
    }
    public function store(Request $request){

        
        // Validate the email
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->save();
       
        return redirect()->route('users.index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->update();
       
        return redirect()->route('users.index');

    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
