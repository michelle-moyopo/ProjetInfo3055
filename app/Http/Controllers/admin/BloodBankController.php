<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BloodBank;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodbanks = BloodBank::all();
        return view('admin.bloodbanks.index', compact('bloodbanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id', '!=', 1)
            ->where('enabled', 1)
            ->get();
        return view('admin.bloodbanks.create', compact('users'));
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
                'user_id' => $request->input('user_id'),
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'enabled' => 1
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
        try {
            $bloodbank = BloodBank::findOrFail($id);
            if ($bloodbank->enabled == 1) {
                $bloodbank->enabled = 0;
                $bloodbank->save();
            } else {
                $bloodbank->enabled = 1;
                $bloodbank->save();
            }
            Toastr::success('message', trans('messages.update_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_update'));
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
        try
        {
            $bloodbank = BloodBank::findOrFail($id);
            $bloodbank->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        }catch(\Exception $e){
            Toastr::error('message', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
