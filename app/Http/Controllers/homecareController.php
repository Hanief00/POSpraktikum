<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecareController extends Controller
{
    public function hc(){
        return view('homeCare');
    }
}
