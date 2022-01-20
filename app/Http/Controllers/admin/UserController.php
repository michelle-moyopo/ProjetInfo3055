<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use App\Mail\UserMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();//where('role_id', '!=', 1)->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
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

            if($this->isOnline()){
                User::create([
                    'role_id' => $request->input('role_id'),
                    'name' => $request->input('name'),
                    'telephone' => $request->input('telephone'),
                    'email' => $request->input('email'),
                    'enabled' => 1,
                    'password' => Hash::make($request->input('password'))
                ]);
                try{
                $mail_data = [
                    'recipient'=>$request->input('email'),
                    'fromName'=>$request->input('name'),
                    'body'=>$request->input('password')
                ];

                Mail ::to($request->input('email'))->send(new UserMail($mail_data));
                Toastr::success('messages', trans('Success Send'));
                return back();
            }
            catch(\Exception $e) {
                Toastr::error('message', trans('Mail Dont Send'));
                return back();
            }
            }else{
                Toastr::error('message', trans('Not Connected to Internet'));
                return back();
            }
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_save'));
            return back();
        }
    }

    public function isOnline($site = "https://youtube.com/") {
        if(@fopen($site, 'r')) {
            return true;
        }else{return false;}
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
            $user = User::findOrFail($id);
            if ($user->enabled == 1) {
                $user->enabled = 0;
                $user->save();
            } else {
                $user->enabled = 1;
                $user->save();
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
        try {
            $user = User::findOrFail($id);
            if ($user->enabled == 1) {
                $user->enabled = 0;
                $user->save();
            } else {
                $user->enabled = 1;
                $user->save();
            }
            Toastr::success('message', trans('messages.update_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_update'));
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
        try
        {
            $user = User::findOrFail($id);
            $user->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        }catch(\Exception $e){
            Toastr::error('message', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
