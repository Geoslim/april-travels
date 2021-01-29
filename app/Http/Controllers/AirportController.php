<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Airport;
use DB;
use Session;
use Alert;



class AirportController extends Controller
{
    //
 public function allAirport(){
  
  
   $airports =Airport::orderBy('created_at','DESC')->paginate(50);
   $allAirporttCount = Airport::all()->count();
 
    Alert::message('Robots are working!');
    return view('april-travels-airport-admin.all-airports')->with('airports',$airports)->with('allAirporttCount',  $allAirporttCount );
 }

 public function importAirport(){

  
   return view('april-travels-airport-admin.import-data');

 }

 public function exportAirportData($type){
// dd($type);
   // return Excel::download(new Airport,'april-travels');

   $data = Airport::get()->toArray();

   return Excel::create('April_travels_excel', function($excel) use ($data) {
      $excel->sheet('April_Travels', function($sheet) use ($data)
        {
         $sheet->fromArray($data);
        });
   })->download($type);
  
 }

 public function importAirportData(Request $request){

   if($request->hasFile('file')){
      Excel::load($request->file('file')->getRealPath(), function ($reader) {
          foreach ($reader->toArray() as $key => $row) {
              $data['city_name'] = $row['city_name'];
              $data['airport_name'] = $row['airport_name'];
              $data['country'] = $row['country'];
              $data['length'] = $row['length'];
              $data['elevation'] = $row['elevation'];
              $data['geographical_location'] = $row['geographical_location'];
              

              if(!empty($data)) {
                  DB::table('airports')->insert($data);
              }
          }
      });
  }
  Alert::message('Robots are working!');
  // Session::put('success', 'Youe file successfully import in database!!!');

  return back();
}


public function allAirports(){

   $airports =Airport::get();

   return $airports;
}



public function editAirport($id){

  $findPort = Airport::where('id',$id)->first();

return view('april-travels-airport-admin.edit-airport')->with('findPort',$findPort);
}

public function updateAirport(Request $request ,$id){

  $country = $request->input('country');
  $cityName = $request->input('city_name');
  $airportName = $request->input('airport_name');

  Airport::where('id',$id)->update([
    'country'=> strtoupper($country),
    'city_name'=> strtoupper($cityName),
    'airport_name'=> strtoupper($airportName),
  ]);


  alert()->success('Airport updated Successfully ','Successful' )->autoclose(3000);;
  return back();
}

public function addAirport() 
{
  return view ('april-travels-airport-admin.add-airport');
}

public function storeAirport(Request $request) 
{
    $country_name = $request->input('country_name');
    $city_name = $request->input('city_name');
    $airport_name = $request->input('airport_name');

    $validatedData = $request->validate([
        'country_name' => 'required',
        'city_name' => 'required',
        'airport_name' => 'required',
    
    ]);

    $addAirport = new Airport();
    $addAirport->country = strtoupper($country_name);
    $addAirport->city_name = strtoupper($city_name);
    $addAirport->airport_name = strtoupper($airport_name);
    $addAirport->save();

    
    alert()->success('Airport Added Successfully','Successful' )->autoclose(3000);
    return back();
 
}

}
