<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Teams::all();
        return view('team.index',compact('teams'));
    }
}
