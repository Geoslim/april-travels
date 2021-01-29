<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
Use Session;
Use PDF;
Use Mail;
Use App\Passenger;
Use App\Ticket;

class BookingController extends Controller
{
    //
    public function addBooking(Request $request){

        $request->session()->forget('booking');
   // dd($request);

        // $booking = $request->session()->get('booking');
        // dd(empty($booking));
        // dd($bookings);

        $validatedData = $request->validate([
            'departure' => 'required',
            'arrival' => 'required',
            'departure_date' => 'required|date|after:today',
            'return_date' => '',
            'adults' => 'required',
            'children' => '',
            'infants' => '',
            'ticket_class' => 'required',
            'radio_g' => 'required',

        ]);
    // dd($validatedData);

        if(empty($request->session()->get('booking'))){

            $booking = new Booking();
            $bb = $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
    //    dd($booking);
        }else{

            $booking = $request->session()->get('booking');
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        //    dd($booking);
        }

        return redirect('/booking/step-2/');
    }

    public function bookingStepTwo(Request $request){
   
        if ($request->session()->has('booking')) {
            //
            $data = $request->session()->all();
            // dd($data);
        }

        return view('april-travels-homepage.booking');
    }

    public function postBooking(Request $request){
   
 
        $booking = Session::get('booking');
        // dd($booking);

        $departure = $booking['departure'];
        $arrival = $booking['arrival'];
        $departure_date = $booking['departure_date'];
        $return_date = $booking['return_date'];
        $adults = $booking['adults'];
        $children = $booking['children'];
        $infants = $booking['infants'];
        $ticket_class  = $booking['ticket_class'];
        $wayTrip = $booking['radio-group'];
     
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
// dd($booking);
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
        $data['departure']     = $booking['departure'];
        $data['arrival']      = $booking['arrival'];
        $data['departure_date'] = $booking['departure_date'];
        $data['return_date']  = $booking['return_date'];
        $data['adults'] = $booking['adults'];
        $data['children'] = $booking['children'];
        $data['infants'] = $booking['infants'];
        $data['ticket_class']  = $booking['ticket_class'];


        $this->data["first_name"] = $request->get("first_name");
        $this->data["surname"] = $request->get("surname");
        $this->data["middle_name"] = $request->get("middle_name");
        $this->data['dob'] = $request->get('dob');
        $this->data['email'] = $request->get('email');
        $this->data['address']  = $request->get('address');
        $this->data['phone'] = $request->get('phone');
        $this->data['passport_id'] = $request->get('passport_id');
        $this->data['departure']     = $booking['departure'];
        $this->data['arrival']      = $booking['arrival'];
        $this->data['departure_date'] = $booking['departure_date'];
        $this->data['return_date']  = $booking['return_date'];
        $this->data['adults'] = $booking['adults'];
        $this->data['children'] = $booking['children'];
        $this->data['infants'] = $booking['infants'];
        $this->data['ticket_class']  = $booking['ticket_class'];

        $this->pdf = PDF::loadView('mails.mail', $data); // add user mail

        Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){
    
            // 'Your login credential is <br><a>'.$this->email .'</a><br><a>'.$this->randStrPassword. '</a>'
             $message->to('igeo273@gmail.com','April Travels Booking')->subject('New Booking Request' )
             ->setBody(
                 '<h4>Dear April Travels,</h4> '.
                'A request has been made by '.Ucfirst($this->data["surname"]) . ' ' . Ucfirst( $this->data["first_name"]).' ' 
             . 'with the email address' . ' '.$this->data["email"] .' '  . 'to book a flight  to ' 
             .  $this->data['arrival']  . '  '. '. Details are stated below:<br>'.
             '<p>Full Name: '.Ucfirst($this->data["surname"]) .' '.Ucfirst($this->data["middle_name"]) .' '.Ucfirst($this->data["first_name"]) .'</p>'
             .'<p>Email: ' .$this->data["email"] .'</p>'
             .'<p>Departure Port: ' .$this->data["departure"] .'</p>'
             .'<p>Departure Date: ' .$this->data["departure_date"] .'</p>'
             .'<p>Arrival Port: ' .$this->data["arrival"] .'</p>'
             .'<p>Return Date: ' .$this->data["return_date"] .'</p>'
             .'<p>Phone: ' .$this->data["phone"] .'</p>'
             .'<p>Address: ' .$this->data["address"] .'</p>'
             .'<p>DOB: ' .$this->data["dob"] .'</p>'
             .'<p>Passport ID: ' .$this->data["passport_id"] .'</p>'
             .'<p>Ticket Class: ' .$this->data["ticket_class"] .'</p>'
             .'<p>Adults: ' .$this->data["adults"] .'</p>'
             .'<p>Children: ' .$this->data["children"] .'</p>'
             .'<p>Infants: ' .$this->data["infants"] .'</p>'
             .'<p>Thank you.</p>'
             ,'text/html' );
            $message->from('notify@booking.apriltravels','New Booking Notification');
             
         
             //   ->attach($this->pdf->output(), "bookings");
            //  $message->from('trudatasevices@gmail.com',$this->email);

           });
        //    Mail::send(['text/html'=> 'new Mail' ],['name'=>'$artsttsts'], function($message){
    
        //     $message->to($this->$data['email'],'April Travels Booking')->subject('Your Booking Request' )
        //     ->setBody('Dear '.Ucfirst($this->data["surname"]) . ' ' . Ucfirst( $this->data["first_name"]).', ' . '<br>Thank you for choosing April Travels.<br>We have recieved your booking request and we will attend to you as soon as possible.' );
        //     });
    

        // $pdf = PDF::loadView('mails.mail', $data);
        // try{
        //     Mail::send('mails.mail', $data, function($message)use($data,$pdf) {
        // //    dd($pdf->output());
        //     $message->to('olawuyiayansola1@gmail.com', $data)
           
        //     ->subject('New Bookings')
        //     ->attachData(base64_decode($pdf->output()), "bookings");
        //   //  ->setBody( 'Your login credential is  password  ');
        //     // dd($data);
        //     });
        // }catch(JWTException $exception){
        //     $this->serverstatuscode = "0";
        //     $this->serverstatusdes = $exception->getMessage();
        // }
        // if (Mail::failures()) {
        //      $this->statusdesc  =   "Error sending mail";
        //      $this->statuscode  =   "0";

        // }else{

        //    $this->statusdesc  =   "Message sent Succesfully";
        //    $this->statuscode  =   "1";
        // }
        // return response()->json(compact('this'));
        
        // dd($request);

        $newBooking = new Booking();
        $newBooking->first_name =$name;
        $newBooking->last_name =$surname;
        $newBooking->middle_name = $middle_name;
        $newBooking->destination_to = $arrival;
        $newBooking->destination_from = $departure;
        $newBooking->departure = $departure_date;
        $newBooking->arrival = $return_date;
        $newBooking->adults = $adults;
        $newBooking->children = $children;
        $newBooking->infants = $infants;
        $newBooking->ticket_class = $ticket_class;
        $newBooking->dob =  $dob;
        $newBooking->email = $email;
        $newBooking->address = $address;
        $newBooking->phone_number = $phone;
        $newBooking->passport_id = $passport_id;

        $newBooking->save();

        alert()->success('We have recieved your request. We will reach out to you shortly','Thank You' )->autoclose(5000);
        return redirect()->route('index');
        // return redirect()->action('HomePageController@index');
        // return back();
        // return view('april-travels-homepage.new-index');

}

    }


    public function allBookings(){

        $bookings = Booking::orderBy('created_at','DESC')->paginate(10);

        $countBookings = Booking::all()->count();

        // dd($bookings);
         return view('april-travels-deals-admin.all-bookings')->with('bookings',$bookings)->with('countBookings',$countBookings);
    }


    public function downloadPDF($id) {
        $show = Booking::find($id);
     
        $pdf = PDF::loadView('april-travels-deals-admin.pdf', compact('show'));
        
        return $pdf->download('april-travels-dbookings.pdf');
   }


   public function viewBooking($id){

       $show = Booking::find($id);

       return view('april-travels-deals-admin.pdf')->with('show',$show);

   }

   public function approveBooking($id){


    Booking::where('id',$id)->update([
        'status'=> 1,
    ]);

    alert()->success('Client Booking approved','Successful' )->autoclose(3000);
    return back();
   }

   public function   unapproveBooking($id){


    Booking::where('id',$id)->update([
        'status'=> 0,
    ]);

    alert()->success('Client has been unbooked','Successful' )->autoclose(3000);
    return back();
   }



   public function allPassengerClass(){

    $passengers = Passenger::simplePaginate(5);

    return view('april-travels-passenger-admin.all-passenger')->with('passengers',$passengers);

   }

    public function addPassengerClass(){
      
        return view('april-travels-passenger-admin.create-passenger');

    }


    public function postPassengerClass(Request $request){


        $name = $request->input('name');


        $validatedData = $request->validate([
            'name' => 'required',
       
        ]);

        $PassengerClass = new Passenger();
        $PassengerClass->name = $name;
        $PassengerClass->save();

        
        alert()->success('Passenger Class Saved Successfully','Successful' )->autoclose(3000);
        return back();

    }


    public function editPassengerClass($id){

        $findClass = Passenger::where('id',$id)->firstOrfail();

        return view('april-travels-passenger-admin.edit-passenger')->with('findClass',$findClass);

    }

    public function updatePassengerClass(Request $request , $id){


        $name = $request->input('name');

        $validatedData = $request->validate([
            'name' => 'required',
       
        ]);

        Passenger::where('id',$id)->update([
            'name' => $name,
        ]);

        alert()->success('Passenger Class Updated Successfully','Successful' )->autoclose(3000);
        return back();
    }


    public function publishPassengerClass($id){


        Passenger::where('id', $id)->update([
            'status' => 1,
        ]);

        alert()->success('Passenger Class Published Successfully','Successful' )->autoclose(3000);
        return back();
    }

    public function unpublishPassengerClass($id){


        Passenger::where('id', $id)->update([
            'status' => 0,
        ]);

        alert()->success('Passenger Class has been unpublished','Successful' )->autoclose(3000);
        return back();
    }




    public function allTicketClass(){

        $tickets = Ticket::simplePaginate(5);
    
        return view('april-travels-ticket-admin.all-ticket')->with('tickets',$tickets);
    
       }
    
        public function addTicketClass(){
          
            return view('april-travels-ticket-admin.create-ticket');
    
        }
    
    
        public function postTicketClass(Request $request){
    
    
            $name = $request->input('name');
    
    
            $validatedData = $request->validate([
                'name' => 'required',
           
            ]);
    
            $TicketClass = new Ticket();
            $TicketClass->name = $name;
            $TicketClass->save();
    
            
            alert()->success('Ticket Class Saved Successfully','Successful' )->autoclose(3000);
            return back();
    
        }
    
    
        public function editTicketClass($id){
    
            $findClass = Ticket::where('id',$id)->firstOrfail();
    
            return view('april-travels-ticket-admin.edit-ticket')->with('findClass',$findClass);
    
        }
    
        public function updateTicketClass(Request $request , $id){
    
    
            $name = $request->input('name');
    
            $validatedData = $request->validate([
                'name' => 'required',
           
            ]);
    
           Ticket::where('id',$id)->update([
                'name' => $name,
            ]);
    
            alert()->success('Ticket Class Updated Successfully','Successful' )->autoclose(3000);
            return back();
        }
    
    
        public function publishTicketClass($id){
    
    
            Ticket::where('id', $id)->update([
                'status' => 1,
            ]);
    
            alert()->success('Ticket Class Published Successfully','Successful' )->autoclose(3000);
            return back();
        }
    
        public function unpublishTicketClass($id){
    
    
            Ticket::where('id', $id)->update([
                'status' => 0,
            ]);
    
            alert()->success('Ticket Class has been unpublished','Successful' )->autoclose(3000);
            return back();
        }
        
        public function destroyBooking($id)
            {
        
                Booking::find($id)->delete();
                alert()->success('Booking Deleted Successfully','Successful' )->autoclose(3000);;
                return back();
        
            }

         public function destroyTicket($id)
            {
        
                Ticket::find($id)->delete();
                alert()->success('Ticket Deleted Successfully','Successful' )->autoclose(3000);;
                return back();
        
            }
            
        public function __destruct() {
           
            Session::flush();

        }
}
