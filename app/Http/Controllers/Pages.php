<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function new(){
        return view('new');
    }
}