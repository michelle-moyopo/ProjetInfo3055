<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class TestController extends Controller
{

  public function create(){
    return view('email');
  }


  public function  sendmail(){
   
    $details = [
      'title' => 'mail from surside Media',
      'body' => 'this is for testing mail using gmail.'
    ];
    Mail ::to('josephtingang@gmail.com')->send(new TestMail($details));
      return 'email send ';
  }
}
