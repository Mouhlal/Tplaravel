<?php

namespace App\Http\Controllers;

use App\Models\Stagiare;
use Illuminate\Http\Request;

class StgController extends Controller
{
    public function index(){
        return view('centre.index',compact('stg'));
    }
}
