<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class listeResponsableController extends Controller
{
    public function index()
    {

        $users = User::where("role_id","3")->get();
        return view('director.listeResponsable')->with('users',$users);
    }
    public function listeResponsableAttente()
    {

        $users = User::where("role_id","3")->where("enabled","1")->get();
        return view('director.validerResponsable')->with('users',$users);
    }
    public function detail(Request $request)
    {        
        $users= User::find($request->id);
        return view('director.details',['users'=>$users]);
    }
    public function  valideResponsable(Request $request)
    {        
        $users= User::find($request->id);
        $users->enabled='0';
        $users->save();
        return redirect('/dashboard/valideResponsable/director');
    }
   
}
