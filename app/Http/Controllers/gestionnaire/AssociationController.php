<?php

namespace App\Http\Controllers\gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Groupe;
use App\Models\BloodBankManager;
use App\Models\GroupeUser;
use App\Models\User;
class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userId = Auth::id();  
        $users = BloodBankManager::where("enabled","1")->get(); 
       // $id=$user -> user_id;
        foreach ($users as $user ) {
            if($userId == $user -> user_id){
             $groupes =Groupe::where('blood_bank_id',$user->blood_bank_id)->get();
             foreach ($groupes as $groupe) {
                 
            $user = GroupeUser::where('groupe_id',$groupe-> id )->where("enabled","1")->count();
               return view('gestionnaire.Association.listeAssociations',compact('user'))->with('groupes',$groupes);
             }
            }
           
        }
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
    public function show(Request $request)
    {
        $groupuser = GroupeUser::where('groupe_id',$request->id )->where("enabled","1")->get();
        $users = User::where("enabled","1")->get();
        foreach ($groupuser as $key) {
           foreach ($users as $item) {
              if($key-> user_id == $item->id){
                  //$user=$item;
                  $users = User::where("enabled","1")->where('id', $key-> user_id)->get();
                //return view('gestionnaire.Association.detailsAssociation')->with('users',$item);
                return view('gestionnaire.Association.detailsAssociation')->with('users',$users);
              }
           }
        }
            
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
