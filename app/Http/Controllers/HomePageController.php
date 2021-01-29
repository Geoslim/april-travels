<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use DB;
use Session;
use App\Deal;
Use App\Passenger;
use App\Ticket;


class HomePageController extends Controller
{
    //

    public function index(Request $request){

        $booking = $request->session()->get('booking');
        $deals = Deal::inRandomOrder()->limit(4)->get();
        $passengerClass = Passenger::where('status' , 1)->get();
        $ticketClass = Ticket::where('status',1)->get();

        return view('april-travels-homepage.index')
        ->with('booking',$booking)
        ->with('deals',$deals)
        ->with('passengerClass',$passengerClass)
        ->with('ticketClass',$ticketClass);
    }

    public function autocomplete(Request $request)

    {
      
       // $data =  Airport::select("airport_name as name" ,"country as country")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        $data =  Airport::select(DB::raw("concat(airport_name , ' - ( ' , city_name ,  ' - ' ,( country) , ' )') as name"))->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // return Airport::search($request->get('airport_one'))->get();
        // $data_country_name =  Airport::select("airport_country as country")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // Airport::where('airport_name','like','%'.$request->input('airport_one').'%')->get();
        //dd($data);
        // return Airport::search($request->get('q'))->with('profile')->get();
        // $data = Airport::select("airport_namee as name")->where("airport_name","LIKE","%{$request->input('query')}%")->get();
        // return response()->json($data);
        return response()->json($data);
    }

    public function aboutUs(){

        return view('april-travels-homepage.about-us');

    }
    
    public function dealsAndOffers(){
      
        $deals = Deal::orderby('created_at','DESC')->limit(8)->get();

        return view('april-travels-homepage.new-deals-offers')->with('deals',$deals);
    } 

    public function contactUs(){

        return view('april-travels-homepage.contact-us');
    }

    public function faq(){

        return view('april-travels-homepage.faq');
        
    }

    public function location($id){


        $findDeal = Deal::where('id',$id)->firstOrfail();
       // dd($findDeal);
       $deals = Deal::inRandomOrder()->limit(4)->get();

        return view('april-travels-homepage.location')->with('findDeal',$findDeal)->with('deals',$deals);


    }
   
}
