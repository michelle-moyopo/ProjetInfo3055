<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\BloodPocket;
use App\Models\BloodGroup;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Mouvement;
class InventaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();  
        $user = BloodBank::where("enabled","1")->where("responsable_id",$userId)->first();
        $banks = BloodPocket::where("blood_bank_id",$user['id'])->where('enabled','1')->get(); 
        $groupe = BloodGroup::get(); 
        return view('responsable.inventaires.index',compact('groupe'))->with('banks',$banks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();  
        $banks = BloodBank::where("enabled","1")->where("responsable_id",$userId)->first();
      
        $groupe = BloodGroup::whereNotNull('id')->get(); 
       //dd($banks);
        return view('responsable.inventaires.create',compact('banks','groupe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  try
       {
          
           $pocket= BloodPocket::create([
                'blood_group_id' => $request->input('blood_group_id'),
                'blood_bank_id' => $request->input('blood_bank_id'),
                'serial_number' => $request->input('serial_number'),
                'duree_vie' => $request->input('duree_vie'),
                'enabled' => '1'
            ]);
            Mouvement::create([
                'blood_bank_id' => $request->input('blood_bank_id'),
                 'blood_pocket_id'=>$pocket->id,
                  'type_mouvement'=> '1', 
            ]);
            Toastr::success('messages', trans('messages.save_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_save'));
            return back();
        }
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
       
        $blood = BloodPocket::findOrFail($id);
        $banks = BloodBank::where('id',$blood->blood_bank_id)->first();
        $groupe = BloodGroup::get();
        return view('responsable.inventaires.edit', compact('blood', 'banks','groupe'));
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
        try
        {
          
            $pocket= BloodPocket::where('id', $id)->update([
                    'blood_group_id' => $request->input('blood_group_id'),
                    'blood_bank_id' => $request->input('blood_bank_id'),
                    'serial_number' => $request->input('serial_number'),
                    'duree_vie' => $request->input('duree_vie'),
                ]);
            Toastr::success('messages', trans('messages.update_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_update'));
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $userId = Auth::id();  
            $banks = BloodBank::where("enabled","1")->where("responsable_id",$userId)->first();
            BloodPocket::where('id', $id)->update([
                'enabled' => '0'
                ]);
            Mouvement::where('blood_pocket_id', $id)->update([
                  'type_mouvement'=> '0', 
            ]);
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
