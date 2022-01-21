<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\BloodBank;
use App\Models\User;
use App\Mail\TestMail;
use Brian2694\Toastr\Facades\Toastr;
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
       
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
        $details = [
            'title' =>$request->input('subject'),
            'blood_bank' => $request->input('blood_bank'),
          ];
         Sos::where('id',$request->input('id'))->update([
            'enabled' => '1',
           
        ]);
          Mail ::to($request->input('email'))->send(new TestMail($details));
            
            Toastr::success('messages', trans('messages.message_successfully'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_message'));
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
        $sos =Sos::where('id',$id)->first();
       $user = User::where('id',$sos['user_id'])->first();
       $bank = BloodBank::where("enabled","1")->get();
        return view('responsable.messagerie.create',compact('user','bank','sos'));
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
