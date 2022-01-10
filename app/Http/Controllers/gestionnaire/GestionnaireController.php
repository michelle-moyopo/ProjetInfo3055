<?php

namespace App\Http\Controllers\gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BloodBankManager;
use Illuminate\Support\Facades\Auth;
class GestionnaireController extends Controller
{
    public function index()
    {  
        $groupeab ="0"; $groupea ="0"; $groupeb ="0"; $groupeo ="0";
        $userId = Auth::id();  
        $users = BloodBankManager::where("enabled","1")->get(); 
       // dd($users);
        foreach ($users as $user ) {
            $id=$user -> user_id;
            if($userId== $id){
                $groupeab=DB::table('blood_banks')->where('id',$user->blood_bank_id)->get()->sum('num_ab');
                $groupea=DB::table('blood_banks')->where('id',$user->blood_bank_id)->get()->sum('num_a');
                 $groupeb=DB::table('blood_banks')->where('id',$user->blood_bank_id)->get()->sum('num_b');
                $groupeo=DB::table('blood_banks')->where('id',$user->blood_bank_id)->get()->sum('num_o');
                return view('gestionnaire.index',compact('groupeab','groupea','groupeb','groupeo'));
            }
        }  
          
        return view('gestionnaire.index',compact('groupeab','groupea','groupeb','groupeo'));
        // 
    }
}
