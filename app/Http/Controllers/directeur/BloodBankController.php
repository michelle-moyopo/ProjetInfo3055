<?php

namespace App\Http\Controllers\directeur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;
use App\Models\Region;
use App\Models\District;

use App\Models\BloodPocket;

use Session;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mailsRespo=array();
        $mailsGest=array();

$districts=array();
$regions=array();
      //  $banks=Region::where('enabled',1)->get();
         $banks=BloodBank::where('enabled',1)->get();
         $i=0;
         foreach ($banks as $b) {
            
            $district=District::where('id',$b['district_id'])->first();
            $districts[$i]=$district;
            $region=Region::where('id',$district['region_id'])->first();
            $regions[$i]=$region;
            if ($b['user_id']!=null) {
                 $user=User::where('id',$b['responsable_id'])->first();
                 $mailsRespo[$i]=$user['email'];
            }
            else{
                 $mailsRespo[$i]='non defini' ;
            }
           
            if ($b['user_id']!=null) {
                $user=User::where('id',$b['gestionnaire_id'])->first();
                $mailsGest[$i]=$user['email'];
           }
           else{
                $mailsGest[$i]='non defini' ;
           }
            
             $i++;}
        return view('director/listBank', ['banks'=>$banks, 'respo'=>$mailsRespo, 'gest'=>$mailsGest,'districts'=>$districts,'regions'=>$regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $district=District::all();
        return view('director/addBank',['district'=>$district]);
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
        $bs=BloodBank::where('fosas_name',$request->nameFS)->where('district_id',$request->district_id)->get();

        if (count($bs)==0) {
            # code...
            $req=BloodBank::create(['fosas_name'=>$request->nameFS,'contact'=>$request->tel,'district_id'=>$request->district_id]);
        }
        else{
            $req=BloodBank::where('fosas_name',$request->nameFS)->where('district_id',$request->district_id)->first();
            BloodBank::where('fosas_name',$req->nameFS)->where('district_id',$req->district_id)->update(['enabled'=>1]);
            
        }


        // $req=BloodBank::create(['fosas_name'=>$request->nameFS,'contact'=>$request->tel,'district_id'=>$request->district_id]);
        return redirect()->route('directeur.BloodBank.index') ;
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
        $nameRespo='non defini';
        $nameGest= 'non defini';
        $Ap= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',1)->get();
        $nbAp=count($Ap);
        $Am= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',2)->get();
        $nbAm=count($Am);
        $Bp= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',3)->get();
        $nbBp=count($Bp);
        $Bm= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',4)->get();
        $nbBm=count($Bm);
        $ABp= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',5)->get();
        $nbABp=count($ABp);
        $ABm= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',6)->get();
        $nbABm=count($ABm);
        $Op= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',7)->get();
        $nbOp=count($Op);
        $Om= BloodPocket::where('blood_bank_id',$id)->where('blood_group_id',8)->get();
        $nbOm=count($Om);
        $b=BloodBank::where('id',$id)->first();
        if ($b['responsable_id']!=null) {
            $user=User::where('id',$b['responsable_id'])->first();
            $nameRespo=$user['name'];
           
       }
       else{
            $nameRespo='non defini' ;
       }
      
       if ($b['responsable_id']!=null) {
        $user=User::where('id',$b['gestionnaire_id'])->first();
        $nameGest=$user['name'];
       
   }
   else{
        $nameRespo='non defini' ;
   }

        return view('director/detailBank',['respo'=>$nameRespo, 'gest'=>$nameGest,'Ap'=>$nbAp,'Am'=>$nbAm,'Bp'=>$nbBp,'Bm'=>$nbBm,'ABp'=>$nbABp,'ABm'=>$nbABm,'Op'=>$nbOp,'Om'=>$nbOm]); 
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
        $districts=District::all();
        $b=BloodBank::where('id',$id)->first();
        $district=District::where('id',$b['district_id'])->first();
       return view('director/editBank',['b'=>$b,'district'=>$district,'districts'=>$districts] ); 
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
       
        

        $b=BloodBank::where('id',$id)->update(['fosas_name'=>$request->nameFS,'contact'=>$request->tel,'district_id'=>$request->district_id]);
        return redirect()->route('directeur.BloodBank.index') ;
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
       
        $req=BloodBank::where('id',$id)->update([ 'enabled'=>0 ]);
        return redirect()->route('directeur.BloodBank.index') ;
    }
}
