<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Groupe;
use App\Models\GroupBankAffiliation;
class AssoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show()
    {
        //
        $noms= array();
        $nombank=array();
        $i=0;
         $grp=Groupe::where('enabled', '1')->get();
         foreach ($grp as $g ) {
             $user=User::where('id', $g['user_id'])->first();
            $noms[$i]=$user['email'];
             $gba=GroupBankAffiliation::where('group_id', $g['id'])->first();
             if ($gba!=null) {
                 # code...
                 $group=Groupe::where('id', $gba['group_id'])->first();

             $nombank[$i]=$group["name"];
             }
             else{
                  $nombank[$i]="aucune";
             }
            
            $i++;
         }

          return view('director/listAsso',['grp'=>$grp, 'noms'=>$noms, 'nombank'=>$nombank]);
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
