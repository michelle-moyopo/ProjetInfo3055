<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BloodBankAffiliation;
use App\Models\GroupeUser;
use App\Models\Groupe;
use App\Models\BloodBank;
class UserController extends Controller
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
        $req=User::create([
        'name'=>request('name'),
        'email'=>(request('email')),
        'telephone'=>request('telephone'),
        'address'=>(request('address')),
        'password'=>bcrypt("00000000"),
        'role_id' => 1]);

        return redirect()->route("gererUsers",  ['id'=>request('id')]);
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
         $users=User::where('role_id',1)->where('enabled', '1')->get();
          return view('director/users',['users'=>$users]);
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
                 User::where('id',request('id'))->update(['name'=>request('id'), 'email'=>request('email'), 'address'=>request('address'), 'telephone'=>request('telephone'), ]);
                  return redirect()->route("gererUsers",  ['id'=>request('id')]);


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
         User::where('id',request('id'))->update(['enabled'=>0]);
          return redirect()->route("gererUsers",  ['id'=>request('id')]);

    }
     public function voirPlus(Request $request)
    {
        //
        $toutBank=BloodBank::where('enabled',1)->get();
        $toutGrp=Groupe::where('enabled',1)->get();
        $banques=array();
        $groupes=array();
        $i=0;
         $bb=BloodBankAffiliation::where('user_id',request('id'))->get();
         foreach ($bb as $b) {
            $bank= BloodBank::where('id',$b['blood_bank_id'])->first();
             $banques[$i]=$bank;
         }
         $grp=GroupeUser::where('user_id',request('id'))->get();
          foreach ($grp as $g) {
            $groupe= Groupe::where('id',$g['groupe_id'])->first();
             $groupes[$i]=$groupe;
         }
         return view('director/detUser', ['bank'=>$banques,'user'=>request('id'), 'group'=>$groupes, 'ba'=>$bb, 'grp'=>$grp, 'TBank'=>$toutBank, 'TGrp'=>$toutGrp]);
    }
    public function affBank(Request $request)
    {
        //
           $req=BloodBankAffiliation::create(['user_id'=>request('id'), 'blood_bank_id'=>(request('bank')) ]);
 return redirect()->route("voirPlusUser",  ['id'=>request('id')]);
    }
     public function affGrp(Request $request)
    {
        //
           $req=GroupeUser::create(['user_id'=>request('id'), 'groupe_id'=>(request('groupe')) ]);
 return redirect()->route("voirPlusUser",  ['id'=>request('id')]);
    }
     public function delAffBank(Request $request)
    {
        //
              BloodBankAffiliation::where('id',request('id'))->delete();
 return redirect()->route("voirPlusUser",  ['id'=>request('user')]);
    }
     public function delAffGrp(Request $request)
    {
        //
              GroupeUser::where('id',request('id'))->delete();
 return redirect()->route("voirPlusUser",  ['id'=>request('user')]);
    }
     public function editForm(Request $request)
    {
        //
                      $user=User::where('id',request('id'))->first();
                      return view('director/editUser', ['user'=>$user]);
    }
}
