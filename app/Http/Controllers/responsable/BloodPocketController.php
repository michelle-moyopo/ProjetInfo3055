<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use App\Models\BankPocket;
use App\Models\BloodBank;
use App\Models\BloodPocket;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodPocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodpockets = BloodPocket::all();
        return view('responsable.bloodpockets.index', compact('bloodpockets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloodbanks = BloodBank::where('user_id', Auth::user()->id)
        ->where('enabled', 1)->get();
        return view('responsable.bloodpockets.create', compact('bloodbanks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $bloodpocket = new BloodPocket();
            $bloodpocket->serail_number = $request->input('serial_number');
            $bloodpocket->blood_group = $request->input('blood_group');
            $bloodpocket->date_prelevement = $request->input('date_prelevement');
            $bloodpocket->date_peremption = $request->input('date_prelevement');
            $bloodpocket->save();

            // save blood pocket with blood bank
            BankPocket::create([
                'blood_bank_id' => $request->input('blood_bank_id'),
                'blood_pocket_id' => $bloodpocket->id
            ]);
            Toastr::success('message', trans('messages.save_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_save'));
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
        try {
            $bloodbanks = BloodBank::where('enabled', 1)->get();
            $bloodpocket = BloodPocket::findOrFail($id);
            return view('responsable.bloodpockets.edit', compact('bloodpocket', 'bloodbanks'));
        } catch(\Exception $e) {
            return back();
        }
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
        try {
            $bloodpocket = BloodPocket::findOrFail($id);
            $bloodpocket->serail_number = $request->input('serial_number');
            $bloodpocket->blood_group = $request->input('blood_group');
            $bloodpocket->date_prelevement = $request->input('date_prelevement');
            $bloodpocket->date_peremption = $request->input('date_prelevement');
            $bloodpocket->save();
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
            $bloodpocket = BloodPocket::findOrFail($id);
            $bloodpocket->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
