<?php

namespace App\Http\Controllers\gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  App\Models\BloodBank;
use  App\Models\BloodPocket;
use  App\Models\BankPocket;
class ListeGroupeSanguinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks =BloodBank::where("enabled","1")->get();
          return view('gestionnaire.banqueSang.ajoutpoche')->with('banks',$banks);

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
        $pocketBlood = BloodPocket::create([
            'serail_number' => $request->input('serail_number'),
            'blood_group' => $request->input('blood_group'),
            'date_prelevement' => $request->input('date_prelevement'),
            'date_peremption' => $request->input('date_peremption')
        ]);
       
        
        BankPocket::create([
            'blood_bank_id' =>  $request->input('blood_bank_id'),
            'blood_pocket_id' =>$pocketBlood->id,
            
        ]);
        return redirect('/dashboard/gestionnaire');
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
    public function groupeAB()
    {        
        $pockets =DB::table('blood_pockets')->where("blood_group","AB+")
        ->get();
       $pocketAB =DB::table('blood_pockets')->where("blood_group","AB-")->get();
       // $pockets = $pocketAB;

        return view('gestionnaire.banqueSang.listeGroupeAB')->with('pockets',$pockets);
    
    }
    public function groupeA()
    {        
        $pockets =DB::table('blood_pockets')->where("blood_group","A+")
        ->get();
       $pocketAB =DB::table('blood_pockets')->where("blood_group","A-")->get();
       // $pockets = $pocketAB;

        return view('gestionnaire.banqueSang.listeGroupeA')->with('pockets',$pockets);
    
    }
    public function groupeB()
    {    $pockets =DB::table('blood_pockets')->where("blood_group","B+")
        ->get();
       $pocketAB =DB::table('blood_pockets')->where("blood_group","B-")->get();
       // $pockets = $pocketAB;

        return view('gestionnaire.banqueSang.listeGroupeB')->with('pockets',$pockets);
    }
    public function groupeO()
    {        
        $pockets =DB::table('blood_pockets')->where("blood_group","O+")->get();
       $pocketAB =DB::table('blood_pockets')->where("blood_group","O-")->get();
       // $pockets = $pocketAB;

        return view('gestionnaire.banqueSang.listeGroupeO')->with('pockets',$pockets);
    }
}
