<?php

namespace App\Http\Controllers\user;

use App\Models\Post;
use App\Models\Groupe;
use App\Models\BloodBank;
use App\Models\GroupeUser;
use App\Models\GroupeMiddle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dons = Sos::where('type', 'ALERTE')->get();
        $posts = Post::orderBy('created_at', 'desc')->with('user:id,name')->withCount('comments', 'likes')
            ->with('likes', function($like){
                return $like->where('user_id', auth()->user()->id)
                    ->select('id', 'user_id', 'post_id')->get();
            })
            ->get();
        return view('user.association.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.association.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
                'name' => $request->input('nom'),
                'description' => $request->input('description'),
                'user_id' => $request->input('user_id'),
                'enabled' => 1,
            ]);
             $dons = Groupe::where('name', $request->input('nom'))->first();
            GroupeUser::create([
                'groupe_id'=> $dons->id,
                'user_id'=>$dons->user_id,
                'enabled'=>1
            ]);
            GroupeMiddle::create([
                'groupe_user'=>$dons->id,
                'total'=>1
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
