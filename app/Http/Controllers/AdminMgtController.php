<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Mail;

class AdminMgtController extends Controller
{
    //
    public function allAdmin(){

         $allAdmin = User::where('role_id', '>',1)->paginate(5);
         
         return view('april-travels-all-admin.all-admin')->with('allAdmin',$allAdmin);


    }

    public function editAdmin($id){


       $editAdmin =  User::where('id',$id)->firstOrFail();
       $roles = Role::where('permission', '>',1)->get();

        return view('april-travels-all-admin.edit-admin')->with('editAdmin',$editAdmin)->with('roles',$roles);
    }


    public function updateAdmin(Request $request ,$id){

        $name = $request->input('name');
        $email = $request->input('email');
        $role =$request->input('role');


        User::where('id',$id)->update([
            'name'    => $name,
            'email'   => $email,
            'role_id' => $role
        ]);

        alert()->success('User updated Successfully ','Successful' )->autoclose(3000);;
        return back();
    }


    public function getUser(){
        
        $roles = Role::where('permission', '>',1)->get();
        return view('april-travels-all-admin.create-admin')->with('roles',$roles);
    }

    public function postAdmin(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
           ]);
 
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->role =$request->input('role');
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRST';
        $this->randStrPassword =  substr(str_shuffle($permitted_chars), 0, 7);
        // dd($this->randStrPassword);
     
        // dd( Hash::make($this->randStrPassword));
        Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){
 
            // 'Your login credential is <br><a>'.$this->email .'</a><br><a>'.$this->randStrPassword. '</a>'
             $message->to($this->email,$this->name)->subject('April Travels - Login Credentials' )->setBody( 
                '<h4>Dear '.$this->name.',</h4> '
                .'You have been added as an admin.'
                .'. Your login credentials are: '
                .'<p>E-mail: '.$this->email .'</p>'
                .'<p>Password: ' .$this->randStrPassword.'</p>'
                .'<p>Visit <a href="http://apriltravelsng.com/login">April Travels Dashboard</a> to Login.</p>'
            
                ,'text/html');
             $message->from(auth()->user()->email,auth()->user()->name);

           });
         
        $newAdmin = new User();
        $newAdmin->name = $this->name;
        $newAdmin->email = $this->email;
        $newAdmin->role_id = $this->role;
        $newAdmin->password = Hash::make($this->randStrPassword);
        $newAdmin->save();

        alert()->success('An email has been sent to the invited user. ','Successful' )->autoclose(7000);;
        return back();


    }

    public function suspendAdmin($id){

        User::where('id',$id)->update([
            'status' => 0,
        ]);

        alert()->success('User has been suspended ','Successful' )->autoclose(3000);;
        return back();
    }

    public function approveAdmin($id){

        User::where('id',$id)->update([
            'status' => 1,
        ]);

        alert()->success('User has been approved','Successful' )->autoclose(3000);;
        return back();
    }

    public function getUserInfo($id){

        $roles = Role::get();
        $editAdmin = User::where('id',$id)->firstOrFail();
        return view('april-travels-all-admin.change-password')->with('roles',$roles)->with('editAdmin',$editAdmin);
    }

    public function changePassword(Request $request , $id){

        $name             = $request->input('name');
        $email            = $request->input('email');
        $role             = $request->input('role');
        $password         = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        
    if($password  == $confirm_password){
        
        $editAdmin = User::where('id',$id)->update([
            'name'     => $name,
            'email'    => $email,
            'role_id'     => $role,
            'password' => Hash::make($password),
        ]);

        alert()->success('Your account has beeen updated','Successful' )->autoclose(3000);;
        return back();

        }else{


            alert()->success('Your Password does not match ','Oops !!!' )->autoclose(3000);;
            return back();
        }

    }

    public function destroyUser($id)
    {

        User::find($id)->delete();
        alert()->success('User Deleted Successfully','Successful' )->autoclose(5000);;
        return back();

    }
}
