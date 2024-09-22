<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use Illuminate\Http\Request;

class CSRController extends Controller
{
    public function index(){
        $csrs = Csr::all();
        return view('csr.index', compact('csrs'));
    }
}
