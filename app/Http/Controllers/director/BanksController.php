<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;
use App\Models\BloodBankManager;
use Session;
class BanksController extends Controller
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
    public function create(Request $request)
    {
        //
                    $user=User::where('email',request('email'))->get();
                    if ($user->count()!=0) {
                        foreach ($user as $u ) {
                            # code...
                         User::where('id',$u->id)->update(['role_id'=>3]);
                          $req=BloodBank::create(['user_id'=>$u['id'], 'name'=>(request('name')), 'address'=>(request('address')), 'enabled'=>1 ]);
                           $userGest=User::where('email',request('emailGest'))->get();
                            if ($userGest->count()!=0) {
                        foreach ($userGest as $ug ) {
                            User::where('id',$ug->id)->update(['role_id'=>2]);
                            $gest=BloodBankManager::create(['user_id'=>$ug['id'], 'blood_bank_id'=>$req->id]);
                        }}
                          
                          else{
                            if (request('emailGest')!=null) {
                               $newuserGest= User::create(['role_id'=>2, 'email'=>(request('emailGest')),  'password'=>bcrypt('00000000') ]);
                             $gest=BloodBankManager::create(['user_id'=>$newuserGest->id, 'blood_bank_id'=>$req->id]);
                            }
                            else{
                                $gest=BloodBankManager::create(['blood_bank_id'=>$req->id]);
                            }
                          }
                    }}
                    else{
                       if (request('email')!=null) {
                   $newuser= User::create(['role_id'=>3, 'email'=>(request('email')),  'password'=>bcrypt('00000000') ]);
                    $req=BloodBank::create(['user_id'=>$newuser->id, 'name'=>(request('name')), 'address'=>(request('address')), 'enabled'=>1 ]);}
                    else{
                         $req=BloodBank::create(['name'=>(request('name')), 'address'=>(request('address')), 'enabled'=>1 ]);
                    }
                      $userGest=User::where('email',request('emailGest'))->get();
                            if ($userGest->count()!=0) {
                        foreach ($userGest as $ug ) {
                            User::where('id',$ug->id)->update(['role_id'=>2]);
                            $gest=BloodBankManager::create(['user_id'=>$ug['id'], 'blood_bank_id'=>$req->id ]);
                        }}
                          
                          else{
                            if (request('emailGest')!=null) {
                               $newuserGest= User::create(['role_id'=>2, 'email'=>(request('emailGest')),  'password'=>bcrypt('00000000') ]);
                             $gest=BloodBankManager::create(['user_id'=>$newuserGest->id, 'blood_bank_id'=>$req->id ]);
                            }
                             else{
                                $gest=BloodBankManager::create(['blood_bank_id'=>$req->id]);
                            }
                             
                          }
                    }
           return redirect("banques");
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
        $mailsRespo=array();
        $mailsGest=array();
         $banks=BloodBank::where('enabled',1)->get();
         $i=0;
         foreach ($banks as $b) {
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

            
             $i++;
         }
          return view('director/listBank', ['banks'=>$banks, 'respo'=>$mailsRespo, 'gest'=>$mailsGest]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $user=User::where('email',request('email'))->get();
                    if ($user->count()!=0) {
                        foreach ($user as $u ) {
                            # code...
                         User::where('id',$u->id)->update(['role_id'=>3]);
                          $req=BloodBank::where('id',request('id'))->update(['user_id'=>$u['id'], 'name'=>(request('name')), 'address'=>(request('address')), 'enabled'=>1 ]);
                           $userGest=User::where('email',request('emailGest'))->get();
                            if ($userGest->count()!=0) {
                        foreach ($userGest as $ug ) {
                            User::where('id',$ug->id)->update(['role_id'=>2]);
                            $gest=BloodBankManager::where('blood_bank_id',request('id'))->update(['user_id'=>$ug['id']]);
                        }}
                          
                          else{
                            if (request('emailGest')!=null) {
                               $newuserGest= User::create(['role_id'=>2, 'email'=>(request('emailGest')),  'password'=>bcrypt('00000000') ]);
                             $gest=BloodBankManager::where('blood_bank_id',request('id'))->update(['user_id'=>$newuserGest->id]);
                            }
                            else{
                                    BloodBankManager::where('blood_bank_id',request('id'))->delete();
                            }
                          }
                    }}
                    else{
                       if (request('email')!=null) {
                   $newuser= User::create(['role_id'=>3, 'email'=>(request('email')),  'password'=>bcrypt('00000000') ]);
                    $req=BloodBank::where('id',request('id'))->update(['user_id'=>$newuser->id, 'name'=>(request('name')), 'address'=>(request('address')), 'enabled'=>1 ]);}
                    else{
                         $req=BloodBank::where('id',request('id'))->update(['name'=>(request('name')), 'user_id'=>null, 'address'=>(request('address')), 'enabled'=>1 ]);
                    }
                      $userGest=User::where('email',request('emailGest'))->get();
                            if ($userGest->count()!=0) {
                        foreach ($userGest as $ug ) {
                            User::where('id',$ug->id)->update(['role_id'=>2]);
                            $gest=BloodBankManager::where('blood_bank_id',request('id'))->update(['user_id'=>$ug['id']]);
                        }}
                          
                          else{
                            if (request('emailGest')!=null) {
                               $newuserGest= User::create(['role_id'=>2, 'email'=>(request('emailGest')),  'password'=>bcrypt('00000000') ]);
                             $gest=BloodBankManager::where('blood_bank_id',request('id'))->update(['user_id'=>$newuserGest->id]);
                            }
                            else{
                                    BloodBankManager::where('blood_bank_id',request('id'))->delete();
                            }
                          }
                    }
           return redirect("banques");
    }
     public function editForm(Request $request)
    {
        $respoName="";
         $respoMail="";
          $gestName="";
           $gestMail="";
        $banks=BloodBank::where('id',request('id'))->first();
if ($banks['user_id']!=null) {
   $r=User::where('id',$banks['user_id'])->first();
    $respoName=$r['name'];
    $respoMail=$r['email'];
}
             
                $g=BloodBankManager::where('blood_bank_id',$banks['id'])->first();
if ($g!=null) {
      $g=User::where('id',$g['user_id'])->first();
        $gestName=$g['name'];
         $gestMail=$g['email'];
}
                  
            return view('director/editBank',['bank'=>$banks, 'respoName'=>$respoName, 'gestName'=>$gestName, 'respoMail'=>$respoMail, 'gestMail'=>$gestMail]);
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
    public function destroy(Request $request)
    {
        //
         $req=BloodBank::where('id',request('id'))->update([ 'enabled'=>0 ]);
          return redirect("banques");
    
    }
    public function voirPlus(){
                Session::put('role','DirGes');
                return redirect('dashboard');
    }
}
