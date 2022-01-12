<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', 4)->get();
        return view('responsable.accounts.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', 4)->get();
        return view('responsable.accounts.create', compact('roles'));
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
            //$image = $request->file('photo');
            /*if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                if (!Storage::disk('public')->exists('slides')) {
                    Storage::makeDirectory('public/storage/'.'user_profile', 0777);
                }
                $path = "public/storage/user_profile/".$imageName;
                $profile_picture = Image::make($image)->save($imageName, 90);
                Storage::disk('public')->put('user_profile/'.$imageName, $profile_picture);
            }*/
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'telephone' => $request->input('telephone'),
                'role_id' => $request->input('role_id'),
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
        $roles = Role::where('id', 4)->get();
        $user = User::findOrFail($id);
        return view('responsable.accounts.edit', compact('roles', 'user'));
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
            /*$image = $request->file('photo');
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('slides')) {
                Storage::makeDirectory('public/storage/'.'user_profile', 0777);
            }
            $path = "public/storage/user_profile/".$imageName;
            $profile_picture = Image::make($image)->save($imageName, 90);
            Storage::disk('public')->put('user_profile/'.$imageName, $profile_picture);*/
            User::where('id', $id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'telephone' => $request->input('telephone'),
                'role_id' => $request->input('role_id'),
                'enabled' => 1
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
            User::where('id', $id)->delete();
            Toastr::success('messages', trans('messages.successfully_delete'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_delete'));
            return back();
        }
    }
}
