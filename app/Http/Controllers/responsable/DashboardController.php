<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\BloodPocket;
use Illuminate\Support\Facades\Auth;
use App\Models\Mouvement;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $total=0; $all=0; $bankgroup=0;$entree=0;$sortie=0;$reste=0;
        $userId = Auth::id();
        $user = BloodBank::where("enabled","1")->where("responsable_id",$userId)->first();
        $banks = BloodPocket::where("blood_bank_id",$user['id'])->get();
           $total=count($banks);
           $entre = Mouvement::where("blood_bank_id",$user['id'])->get();
           $entree=count($entre);
           $sorti = Mouvement::where("type_mouvement","0")->where("blood_bank_id",$user['id'])->get();
           $sortie=count($sorti);

           return view('responsable.dashboard',compact('entree','sortie','reste'));

            // return view('responsable.dashboard');

}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
