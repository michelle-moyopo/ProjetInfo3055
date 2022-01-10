<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BloodBank;
use App\Models\Groupe;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('admin.groupes.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id', 5)->get();
        return view('admin.groupes.create', compact('users'));
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
            Groupe::create([
                'owner_id' => $request->input('user_id'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
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
        try {
            $groupe = Groupe::findOrFail($id);
            if ($groupe->enabled == 1) {
                $groupe->enabled = 0;
                $groupe->save();
            } else {
                $groupe->enabled = 1;
                $groupe->save();
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
        try {
            Groupe::where('id', $id)->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
