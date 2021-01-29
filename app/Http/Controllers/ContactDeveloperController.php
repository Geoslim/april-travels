<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Alert;


class ContactDeveloperController extends Controller
{
    //

    public function contactDeveloper(){

        return view('april-travels-contact-kjk.contact-kjk');
    }

    public function sendMail(Request $request){

        $this->subject = $request->input('subject');
        $this->body    = $request->input('body');

        Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){
    
             $message->to('igeo273@gmail.com','KJK Africa')->subject($this->subject)->setBody(
                 '<p>Name: '.auth()->user()->name.'</p>'
                 .'<p>E-mail: '.auth()->user()->email.'</p>'
                 .'<p>Subject: '.$this->subject.'</p>'
                 .'Message:<br>'.$this->body
                 
                 , 'text/html');
             $message->from(auth()->user()->email, 'April Travels');
        

        });

        
        alert()->success('Mail Sent to KJK AFICA. You will be contacted soon.','Successful' )->autoclose(10000);
        return back();

    }
}
