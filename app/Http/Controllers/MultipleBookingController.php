<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
Use Session;
Use PDF;
Use Mail;
Use App\Passenger;
Use App\Ticket;
use Illuminate\Support\Arr;

class MultipleBookingController extends Controller
{
     public function addmultiBooking(Request $request){

        $request->session()->forget('multi_booking');
   // dd($request);

        // $booking = $request->session()->get('booking');
        // dd(empty($booking));
        // dd($bookings);

        $validatedData = $request->validate([


            'departure1' => 'required',
            'arrival1' => 'required',
            'departure_date1' => 'required',
            'adults1' => 'required',
            'children1' => '',
            'infants1' => '',
            'ticket_class1' => 'required',

        ]);
    // dd($validatedData);
        $departure = $request->input('departure1');
        $arrival = $request->input('arrival1');
        $departure_date = $request->input('departure_date1');
        $adults = $request->input('adults1');
        $children = $request->input('children1');
        $infants = $request->input('infants1');
        $ticket_class = $request->input('ticket_class1');


         if(empty($request->session()->get('multi_booking'))){


            $multi_booking = new Booking();
            $bb = $multi_booking->fill($validatedData);
            $request->session()->put('multi_booking', $multi_booking);
    //    dd($multi_booking);
        }else{

            $multi_booking = $request->session()->get('multi_booking');
            $multi_booking->fill($validatedData);
            $request->session()->put('multi_booking', $multi_booking);
           // dd($multi_booking);
        }

        return redirect('/multiplebooking/step-2/');
    }

    public function bookingStepTwo(Request $request){
   
        if ($request->session()->has('multi_booking')) {
            //
            $data = $request->session()->all();
            // dd($data);
        }
          return view('april-travels-homepage.booking');
    }


    public function postBooking(Request $request){
   
 
        $multi_booking = Session::get('multi_booking');
        // dd($multi_booking);

        $departure = $multi_booking['departure1'];
        $arrival = $multi_booking['arrival1'];
        $departure_date = $multi_booking['departure_date1'];
        $adults = $multi_booking['adults1'];
        $children = $multi_booking['children1'];
        $infants = $multi_booking['infants1'];
        $ticket_class  = $multi_booking['ticket_class1'];
     
        $validatedData = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'surname' => 'required',
            'dob' => '',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'passport_id' => '',
        ]);

	// dd($multi_booking);
if($request->has('_token')){


        $name = $request->input('first_name');
        $middle_name  = $request->input('middle_name');
        $surname = $request->input('surname');
        $dob = $request->input('dob');
        $email = $request->input('email');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $passport_id = $request->input('passport_id');


        
        $data["first_name"] = $request->get("first_name");
        $data["surname"] = $request->get("surname");
        $data["middle_name"] = $request->get("middle_name");
        $data['dob'] = $request->get('dob');
        $data['email'] = $request->get('email');
        $data['address']  = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['passport_id'] = $request->get('passport_id');
        $data['departure']     = $multi_booking['departure1'];
        $data['arrival']      = $multi_booking['arrival1'];
        $data['departure_date'] = $multi_booking['departure_date1'];
        $data['adults'] = $multi_booking['adults1'];
        $data['children'] = $multi_booking['children1'];
        $data['infants'] = $multi_booking['infants1'];
        $data['ticket_class']  = $multi_booking['ticket_class1'];
// $collectionItems = Arr::collapse($data['ticket_class']);

// dd($data['ticket_class']);

        $this->data["first_name"] = $request->get("first_name");
        $this->data["surname"] = $request->get("surname");
        $this->data["middle_name"] = $request->get("middle_name");
        $this->data['dob'] = $request->get('dob');
        $this->data['email'] = $request->get('email');
        $this->data['address']  = $request->get('address');
        $this->data['phone'] = $request->get('phone');
        $this->data['passport_id'] = $request->get('passport_id');
        $this->data['departure']     =  $data['departure'];
        $this->data['arrival']      = $data['arrival'];
        $this->data['departure_date'] = $data['departure_date'];
        $this->data['adults'] = $multi_booking['adults1'];
        $this->data['children'] = $multi_booking['children1'];
        $this->data['infants'] = $multi_booking['infants1'];
        $this->data['ticket_class']  =  $data['ticket_class'];
        // dd($this->data['ticket_class'][2]);


        $this->pdf = PDF::loadView('mails.mail', $data); // add user mail

        Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){
    
            // 'Your login credential is <br><a>'.$this->email .'</a><br><a>'.$this->randStrPassword. '</a>'
             $message->to('igeo273@gmail.com','April Travels Booking')->subject('New Booking Request' )
             ->setBody(
                 '<h4>Dear April Travels,</h4> '.
                'A request has been made by '.Ucfirst($this->data["surname"]) . ' ' . Ucfirst( $this->data["first_name"]).' ' 
             . 'with the email address' . ' '.$this->data["email"] .' '  . 'to book a flight to multiple destinations. Booking details are stated below:<br>'.
             '<p>Full Name: '.Ucfirst($this->data["surname"]) .' '.Ucfirst($this->data["middle_name"]) .' '.Ucfirst($this->data["first_name"]) .'</p>'
             .'<p>Email Address: ' .$this->data["email"] .'</p>'
             .'<p>Phone: ' .$this->data["phone"] .'</p>'
             .'<p>Address: ' .$this->data["address"] .'</p>'
             .'<p>DOB: ' .$this->data["dob"] .'</p>'
             .'<p>Passport ID: ' .$this->data["passport_id"] .'</p>'
             .'<p>Departure Ports: <br>' .implode('<br>', $this->data["departure"] ).'</p>'
             .'<p>Departure Dates: <br>' .implode('<br>',$this->data["departure_date"]) .'</p>'
             .'<p>Arrival Ports:  <br>' .implode('<br>',$this->data["arrival"]) .'</p>'
             .'<p>Ticket Classes: <br>' .implode('<br>',$this->data["ticket_class"]) .'</p>'
             .'<p>Adults: ' .$this->data["adults"] .'</p>'
             .'<p>Children: ' .$this->data["children"] .'</p>'
             .'<p>Infants: ' .$this->data["infants"] .'</p>'
             .'<p>Thank you.</p>'
             ,'text/html' );
            $message->from('notify@booking.apriltravels','New Booking Notification');
          
           });
     

        $newBooking = new Booking();
        $newBooking->first_name =$name;
        $newBooking->last_name =$surname;
        $newBooking->middle_name = $middle_name;
        $newBooking->destination_to = json_encode($arrival);
        $newBooking->destination_from =  json_encode($departure);
        $newBooking->departure =  json_encode($departure_date);
        $newBooking->adults = $adults;
        $newBooking->children = $children;
        $newBooking->infants = $infants;
        $newBooking->ticket_class =  json_encode($ticket_class);
        $newBooking->dob =  $dob;
        $newBooking->email = $email;
        $newBooking->address = $address;
        $newBooking->phone_number = $phone;
        $newBooking->passport_id = $passport_id;

        $newBooking->save();

        alert()->success('We have recieved your request. We will reach out to you shortly','Thank You' )->autoclose(5000);
        return redirect()->route('index');
        // // return redirect()->action('HomePageController@index');
        // // return back();
        // // return view('april-travels-homepage.new-index');

}

    }


}
