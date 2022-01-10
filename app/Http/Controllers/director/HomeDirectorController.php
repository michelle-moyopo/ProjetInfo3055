<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeDirectorController extends Controller
{
    public function index()
    {        
        return view('director.index');
    }
    
}
