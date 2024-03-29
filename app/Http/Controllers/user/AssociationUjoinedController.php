<?php

namespace App\Http\Controllers\user;

use App\Models\Groupe;
use App\Models\GroupeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\GroupeMiddle;

class AssociationUjoinedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupe = GroupeMiddle::orderBy("created_at")->get();
        $groupe_use = GroupeUser::all();
        $user_use = DB::table('groupe_users')->where('user_id')->get();

        return view('user.association.unjoind_association', compact('groupe','groupe_use'));
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
        try{
            GroupeUser::create([
                'groupe_id' => $request->input('groupe_id'),
                'user_id'=> $request->input('user_'),
                'enabled' => 1,
            ]);

            Toastr::success('message', trans('messages.save_successfully'));
            return back();
        }catch(\Exception $e){
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
