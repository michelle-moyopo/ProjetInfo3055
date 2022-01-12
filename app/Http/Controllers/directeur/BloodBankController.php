<?php

namespace App\Http\Controllers\directeur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;
use App\Models\Region;
use App\Models\District;
use App\Models\Fosa;
use App\Models\BloodPocket;
use App\Models\BloodBankManager;
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
$fosas=array();
$districts=array();
$regions=array();
      //  $banks=Region::where('enabled',1)->get();
         $banks=BloodBank::where('enabled',1)->get();
         $i=0;
         foreach ($banks as $b) {
            $fosa=Fosa::where('id',$b['fosa_id'])->first();
            $fosas[$i]=$fosa;
            $district=District::where('id',$fosa['district_id'])->first();
            $districts[$i]=$district;
            $region=Region::where('id',$district['region_id'])->first();
            $regions[$i]=$region;
            if ($b['user_id']!=null) {
                 $user=User::where('id',$b['user_id'])->first();
                 $mailsRespo[$i]=$user['email'];
            }
            else{
                 $mailsRespo[$i]='non defini' ;
            }
           
            $gest=BloodBankManager::where('blood_bank_id',$b['id'])->first();
            if ($gest!=null) {
                  $gestname=User::where('id',$gest['user_id'])->first();
             $mailsGest[$i]=$gestname['email'];
            }
            else{
                 $mailsGest[$i]='non defini' ;
            }

            
             $i++;}
        return view('director/listBank', ['banks'=>$banks, 'respo'=>$mailsRespo, 'gest'=>$mailsGest,'fosas'=>$fosas,'districts'=>$districts,'regions'=>$regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fosas=Fosa::where('enabled',1)->get();
        return view('director/addBank', ['fosas'=>$fosas]);
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
        $req=BloodBank::create(['fosa_id'=>$request->fosa]);
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
        if ($b['user_id']!=null) {
            $user=User::where('id',$b['user_id'])->first();
            $nameRespo=$user['name'];
           
       }
       else{
            $nameRespo='non defini' ;
       }
      
       $gest=BloodBankManager::where('blood_bank_id',$b['id'])->first();
       if ($gest!=null) {
             $gestname=User::where('id',$gest['user_id'])->first();
             $nameGest= $gestname['name'];
       
       }
       else{
            $nameGest='non defini' ;
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
        $b=BloodBank::where('id',$id)->first();
        $fosa=Fosa::where('id',$b['fosa_id'])->first();
        $fosas=Fosa::where('enabled',1)->get();
       return view('director/editBank',['fosa'=>$fosa,'fosas'=>$fosas, 'b'=>$b] ); 
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
        $b=BloodBank::where('id',$id)->update(['fosa_id'=>$request->fosa]);
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
        dd($id);
        $req=BloodBank::where('id',$id)->update([ 'enabled'=>0 ]);
        return redirect()->route('directeur.BloodBank.index') ;
    }
}
