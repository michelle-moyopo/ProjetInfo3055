<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BloodBank;
use App\Models\Sos;
use Brian2694\Toastr\Facades\Toastr;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = array();
        $i = 0;
        $dons = Sos::where('type', 'ALERTE')->get();
        foreach ($dons as $d ) {
            $bs = BloodBank::where('id', $d['blood_bank_id'] )->first();
            $banks[$i]=  $bs['fosas_name'];
            $i++;
        }
        return view('user.donation.index', compact('dons', 'banks' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = BloodBank::where('enabled', 1)->get();
        return view('user.donation.create', compact('banks'));
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
            sos::create([
                'type' => request('type'),
                'user_id' => request('user_id'),
                'blood_bank_id' => request('blood_bank_id'),
                'blood_group' => request('blood_group'),
                'address' => request('address'),
                'enabled' => 0,
            ]);
            Toastr::success('message', trans('messages.save_successfully'));
            return back();
        } catch (\Exception $e) {
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
