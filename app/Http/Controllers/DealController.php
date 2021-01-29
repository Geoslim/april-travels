<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Deal;

class DealController extends Controller
{
    //

    public function allDeals(){

        $allDeals = Deal::orderBy('created_at','DESC')->paginate(3);
        // dd($allDeals);
        $countDeals = Deal::all()->count();
        return view('april-travels-deals-admin.all-deals')->with('allDeals',$allDeals)->with('countDeals',$countDeals);
    }

    public function newDeal(){

        return view('april-travels-deals-admin.create-deals');
    }


    public function createDeals(Request $request){

        // dd($request);
        $location = $request->input('location');
        $deals = $request->input('deals');
        $bookings = $request->input('bookings');
        $description = $request->input('description');
        $amount = $request->input('amount');

       


        if($request->hasFile('deals_image')){

                $this->validate($request, [
                    'location' => 'required',
                    'deals' => 'required|integer',
                    'bookings' => 'required|integer',
                    'description' => 'required',
                    'amount'    => 'required|integer',
                    'deals_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
                   
                ]);

            $deals_image = $request->file('deals_image');
              
                   //image resize 

                    $ext = $deals_image->getClientOriginalExtension();
                    $image_resize = Image::make($deals_image->getRealPath());
                    $resize = Image::make($image_resize)->fit(442, 461)->encode($ext);
                    $hash = md5($resize->__toString());
                    $path = "{$hash}.$ext";
                    $url = 'deals/'.$path;
                    Storage::put($url, $resize->__toString());

                   //Thubmnail resize

                    $ext_thumbnail = $deals_image->getClientOriginalExtension();
                    $image_resize_thumbnail = Image::make($deals_image->getRealPath());
                    $resize_thumbnail = Image::make($image_resize_thumbnail)->fit(189, 111)->encode($ext_thumbnail);
                    $hash_thumbnail = md5($resize_thumbnail->__toString());
                    $path_thumbnail = "{$hash_thumbnail}.$ext_thumbnail";
                    $url_thumbnail = 'deals/'.$path_thumbnail;
                    Storage::put($url_thumbnail, $resize_thumbnail->__toString());
             
               $newBookings = new Deal();
               $newBookings->location = $location;
               $newBookings->discount = $deals;
               $newBookings->booking = $bookings;
               $newBookings->description = $description;
               $newBookings->deals_image = $url;
               $newBookings->amount = $amount;
               $newBookings->thumbnail = $url_thumbnail;
               $newBookings->save();

               alert()->success('Deals Saved Successfully ','Successful' )->autoclose(3000);;
               return back();

        }

        alert()->error('All fields are reruired ','Whoops !!!' )->autoclose(3000);;
        return back();
    }


    public function editDeals($id){


        $findDeal = Deal::where('id',$id)->firstOrfail();

        return view('april-travels-deals-admin.edit-deals')->with('findDeal',$findDeal);

    }

    public function updateDeal(Request $request , $id){
     
      
            $location = $request->input('location');
            $deals = $request->input('deals');
            $bookings = $request->input('bookings');
            $description = $request->input('description');
            $amount = $request->input('amount');
        
            if($request->hasFile('deals_image')){

                        $this->validate($request, [
                            'location' => 'required',
                            'deals' => 'required|integer',
                            'bookings' => 'required|integer',
                            'description' => 'required',
                            'amount'    => 'required|integer',
                            'deals_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
                        ]);

                        $deals_image = $request->file('deals_image');
              
                        //image resize 
     
                         $ext = $deals_image->getClientOriginalExtension();
                         $image_resize = Image::make($deals_image->getRealPath());
                         $resize = Image::make($image_resize)->resize(514, 317)->encode($ext);
                         $hash = md5($resize->__toString());
                         $path = "{$hash}.$ext";
                         $url = 'deals/'.$path;
                         Storage::put($url, $resize->__toString());
     
                        //Thubmnail resize
     
                         $ext_thumbnail = $deals_image->getClientOriginalExtension();
                         $image_resize_thumbnail = Image::make($deals_image->getRealPath());
                         $resize_thumbnail = Image::make($image_resize_thumbnail)->resize(189, 111)->encode($ext_thumbnail);
                         $hash_thumbnail = md5($resize_thumbnail->__toString());
                         $path_thumbnail = "{$hash_thumbnail}.$ext_thumbnail";
                         $url_thumbnail = 'deals/'.$path_thumbnail;
                         Storage::put($url_thumbnail, $resize_thumbnail->__toString());



                    Deal::where('id',$id)->update([
                        'location'     => $location,
                        'discount'     => $deals,
                        'booking'      => $bookings,
                        'description'  => $description,
                        'deals_image'  => $url,
                        'amount'       => $amount,
                        'thumbnail'    => $url_thumbnail,

                    ]);

                    alert()->success('Deals & Offers Updated Successfully','Successful' )->autoclose(3000);;
                    return back();
            }else{

                $this->validate($request, [
                    'location' => 'required',
                    'deals' => 'required|integer|max:100',
                    'bookings' => 'required|integer',
                    'description' => 'required',
                    'amount'    => 'required|integer',
                ]);

                Deal::where('id',$id)->update([
                    'location'     => $location,
                    'discount'     => $deals,
                    'booking'      => $bookings,
                    'description'  => $description,
                    'amount'       => $amount,

                ]);

                alert()->success('Deals & Offers Updated Successfully','Successful' )->autoclose(3000);;
                return back();

            }

         
    }



    public function publishDeal($id){


        Deal::where('id', $id)->update([
            'is_published' => 1 ,
        ]);

        alert()->success('Deals & Offers published Successfully','Successful' )->autoclose(3000);;
        return back();

    }

    public function unpublishDeal($id){
       
        Deal::where('id', $id)->update([
            'is_published' => 0 ,
        ]);

        alert()->success('Deals & Offers unpublished Successfully','Successful' )->autoclose(3000);;
        return back();


    }

    public function destroyDeal($id)
    {

        Deal::find($id)->delete();
        alert()->success('Deals & Offers Deleted Successfully','Successful' )->autoclose(3000);;
        return back();

    }
}
