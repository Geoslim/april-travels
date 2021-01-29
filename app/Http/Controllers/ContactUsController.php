<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Alert;



class ContactUsController extends Controller
{
    //
    public function contactUs(Request $request){

        if($request->input('name') != '' || $request->input('email') != '' || $request->input('body') != ''){
           
                $this->validate($request, [
                        'email' => 'required',
                        'name' => 'required',
                        'body' => 'required',
                        ]);
            
                $this->email = $request->input('email');
                $this->name = $request->input('name');
                $this->body = $request->input('body');

                // Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){

                //     $message->to('test@test.test','Enquiries')->subject('April Travels - Enquiries' )->setBody( 
                //          '<p>Name: '.$this->name.'</p>'
                //          .'<p>E-mail: '.$this->email.'</p>'
                //          .'<p>Subject: Enquiries</p>'
                //          .'Message:<br>'.$this->body
                 
                //  , 'text/html');
                //     $message->from($this->email,$this->name);

                // });
           
                alert()->success('We will reach out to you shortly','Thank You' )->autoclose(3000);;
                return back();

        }else{
            
                alert()->success('Please fill in the necessary information','Warning !!! ' )->autoclose(9000);;
                return back();

        }
    }
}
