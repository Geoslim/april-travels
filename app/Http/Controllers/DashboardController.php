<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\User;

class DashboardController extends Controller
{
    //
    public function dashboard(){

        return view('april-travels-admin.dashboard');
        
    }

    public function services(){
        
        return view('april-travels-admin.services');
    }

    public function autocomplete(Request $request)

    {
      
       // $data =  Airport::select("airport_name as name" ,"country as country")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        $data =  Airport::select(DB::raw("concat(airport_name , ' - ( ' , (country) , ' )') as name"))->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // return Airport::search($request->get('airport_one'))->get();
        // $data_country_name =  Airport::select("airport_country as country")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // Airport::where('airport_name','like','%'.$request->input('airport_one').'%')->get();
        //dd($data);
        // return Airport::search($request->get('q'))->with('profile')->get();
        // $data = Airport::select("airport_namee as name")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // return response()->json($data);
        return response()->json($data);
    }

     public function pages(){
        
        return view('april-travels-admin.pages');
    }

    public function searchAdmin(Request $request){
        $search = $request->input('search');
        if ($search != " ") {
            $user = User::where('name', 'LIKE', '%' . $search . '%' )
            ->orWhere('email', 'LIKE', '%' . $search . '%' )
            ->get();
            
            if (count($user) >0) {
                return view('welcome')->withDetails($user)->withQuery($search);
            }
            return view('welcome')->withMessage("No records found!!!");
        }
        // dd($search);
    }

}
