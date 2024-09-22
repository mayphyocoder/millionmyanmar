<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribers = Subscribe::all();
        return view('admin.subscriber', compact('subscribers'));
    }



    public function store(Request $request)
    {

        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ]);
        
        $subscriber = new Subscribe();
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }

    public function destroy($id){

        
        $subscriber = Subscribe::find($id);
        $subscriber->delete();
        return redirect()->back();

    }
}
