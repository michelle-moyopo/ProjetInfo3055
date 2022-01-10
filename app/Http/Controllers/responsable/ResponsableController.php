<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function index()
    {        
        return view('responsable.index');
    }
}
