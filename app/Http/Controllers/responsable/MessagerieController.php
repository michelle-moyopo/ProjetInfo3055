<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\BloodBank;
use App\Models\User;
class MessagerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();  
        $bank = BloodBank::where("enabled","1")->where("responsable_id",$userId)->first();
      
        $sos = Sos::where('enabled','0')->where( 'blood_bank_id',$bank['id'])->get();
        $users = User::get();
        return view('responsable.messagerie.index',compact('sos','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.messagerie.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     $details = [
        'title' => 'mail from surside Media',
        'body' => 'this is for testing mail using gmail.'
      ];
      Mail ::to('michellefotso2@gmail.com')->send(new TestMail($details));
        return 'email send ';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        return view('responsable.messagerie.edit');
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
