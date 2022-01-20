<?php

namespace App\Http\Controllers\directeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use Brian2694\Toastr\Facades\Toastr;
class NotifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('director/newNotif');
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
        //
        try {

            if($this->isOnline()){
                

                $mail_data = [
                    'recipient'=>'teumoubande@gmail.com',
                    'fromName'=>'centre transfusion',
                    'subject'=>'Communique directeur',
                    'body'=>$request->contenu
                ];

                Mail::to("teumoubande@gmail.com")->send(new UserMail($mail_data));
                Toastr::success('messages', trans('messages.save_successfully'));
                return back();
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
