<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BloodBank;
use App\Models\BloodBankAffiliation;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BlooBankAffiliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodbankaffiliations = BloodBankAffiliation::all();
        return view('admin.bloodbankaffiliations.index', compact('bloodbankaffiliations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood_banks = BloodBank::where('enabled', 1)->get();
        $users = User::where('enabled', 1)->get();
        return view('admin.bloodbankaffiliations.create', compact('users', 'blood_banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            BloodBankAffiliation::create([
                'user_id' => $request->input('user_id'),
                'blood_bank_id' => $request->input('blood_bank_id'),
                'enabled' => 1
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
        $blood_banks = BloodBank::where('enabled', 1)->get();
        $users = User::where('enabled', 1)->get();
        $bloodbankaffiliation = BloodBankAffiliation::findOrFail($id);
        return view('admin.bloodbankaffiliations.edit', compact('users',
            'bloodbankaffiliation', 'blood_banks'));
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
            BloodBankAffiliation::where('id', $id)->update([
                'user_id' => $request->input('user_id'),
                'blood_bank_id' => $request->input('blood_bank_id'),
                'enabled' => 1
            ]);
            Toastr::success('messages', trans('messages.save_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_save'));
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
            BloodBankAffiliation::where('id', $id)->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
