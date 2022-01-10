<?php

namespace App\Http\Controllers\user;

use App\Models\Sos;
use App\Models\BloodBank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dons = Sos::where('type', 'DEMANDE')->get();
        return view('user.demander.index', compact('dons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = BloodBank::where('enabled', 1)->get();
        return view('user.demander.create', compact('banks'));
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
            BloodBank::create([
                'type' => $request->input('type'),
                'user_id' => $request->input('user_id'),
                'blood_banks_id' => $request->input('blood_banks_id'),
                'blood_group' => $request->input('blood_group'),
                'address' => $request->input('address'),
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
