<?php

namespace App\Http\Controllers\directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AllRespoMail;

use Brian2694\Toastr\Facades\Toastr;

class CompteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $respo=array();
        $mailsGest=array();


      //  $banks=Region::where('enabled',1)->get();
         $banks=BloodBank::where('enabled',1)->where('responsable_id','!=',null)->get();
         $i=0;
         foreach ($banks as $b) {
            
          
                 $user=User::where('id',$b['responsable_id'])->first();
                 $respo[$i]=$user;
            
           
           
           
            
             $i++;}
        return view('director/listRespos', ['banks'=>$banks, 'respo'=>$respo]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $banks=BloodBank::where('enabled',1)->whereNull('responsable_id')->get();
        return view('director/addRespo', ['banks'=>$banks]);
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
        
        $user=User::where('email',$request->mail)->get();

        if (count($user)==0) {
            # code...
            $req=User::create(['email'=>$request->mail,'role_id'=>2,'password'=>bcrypt($request->password)]);
            $b=BloodBank::where('id',$request->fosa)->update(['responsable_id'=>$req->id]);
        }
        else{
            $req=User::where('email',$request->mail)->first();
          User::where('email',$request->mail)->update(['role_id'=>2]);
            $b=BloodBank::where('id',$request->fosa)->update(['responsable_id'=>$req->id]);
        }
        
        try {

            if($this->isOnline()){
                   
       

                $mail_data = [
                    
                    'title'=>'Nouveau compte',
                    'body'=>$request->mail. "" .$request->password
                ];

    Mail::to($request->mail)->send(new AllRespoMail($mail_data));
 

         Toastr::success('messages', trans('messages.save_successfully'));
                return redirect()->route('directeur.Compte.index') ;
            }else{
                Toastr::error('message', trans('Not Connected to Internet'));
                return back();
            }
        } catch(\Exception $e) {
            Toastr::error('message', $e);
            return back();
        }
  
    
    }
    public function isOnline($site = "https://youtube.com/") {
        if(@fopen($site, 'r')) {
            return true;
        }else{return false;}
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

        $bb=BloodBank::all();
        $b=BloodBank::where('responsable_id',$id)->first();
        $u=User::where('id',$id)->first();
       return view('director/editRespo',['bank'=>$b,'banks'=>$bb, 'u'=>$u] ); 
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
        $b=BloodBank::where('responsable_id',$id)->update(['responsable_id'=>NULL]);
        BloodBank::where('id',$request->fosa)->update(['responsable_id'=>$id]);
         return redirect()->route('directeur.Compte.index') ;
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
        User::where('id',$id)->update(['role_id'=>5]);
        BloodBank::where('responsable_id',$id)->update(['responsable_id'=>NULL]);
        return redirect()->route('directeur.Compte.index') ;
    }
}
