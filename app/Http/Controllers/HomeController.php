<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Flyer;
use App\Photos;
use Image;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



    public function addOffer()
    {

        Session::set('images',[]);
        return view('add_offer');

    }




    public function postOffer(Request $request, Flyer $flyer)
    {

        $file = $request->file('file');

        $name = $file->getClientOriginalName();

        $file->move('uploads',$name);


        $url  = public_path('uploads'.'/'.$name);
        $thum = public_path('thumnails'.'/'.$name);

        $img = Image::make($url)
              ->resize(230,173)
              ->save($thum);



         $old = Session::get('images');
        Session::set('images',array_prepend($old,$name));


       // \App\Photos::create(['path'=>url('thumnails'.'/'.$name) ,'name'=>$name]);


     return Session::get('images');

        }



    public function postOffers(Request $request)
      {
          
          if (count(Session::get('images')) > 0) {

              $images = Session::get('images');

              foreach ($images as $key => $value) {

                 \App\Photos::create(['path'=>url('thumnails'.'/'.$value) ,'name'=>$value]);

                Session::flash('added','added successfully');
                return redirect()->back();

              }

          } else {

                Session::flash('no_images','No Images');
                return redirect()->back();
          }
          

      }  



      public function clearImage(Request $request)
    {


     $filename = $request->file;
     $new_session = Session::get('images');

     foreach ($new_session as $key => $value) {

            if(in_array($filename, array_values($new_session))) {

                unset($new_session[$key]);

            }

     }

     Session::set('images',$new_session);

     return Session::get('images');



    }  




    public function showOffers()
    {
        $photos = \App\Photos::pluck('path')->toArray();

        return view('offers',compact('photos'));
    }


    public function addNotification()
    {
        
        return view('add_notification');

    }



    public function postNotification(Request $request)
    {
       
       $all = $request->all();

         // API access key from Google API's Console
        define( 'API_ACCESS_KEY', 'AAAA4IvHsck:APA91bFMRstb3aLluTvqtBcXU-s4H34qqkPRUcPMxSkjvtxUJ0zZgCxG8AXGw_f8E1gKLBkAxfw7s3BWApxFLjP4yWO1rl-h1lXmdmD_1l1rcwqGKLbTkx2uzH5ocCVZk82jmynMg7J_' );
        $registrationIds = array( $_GET['id'] );
        // prep the bundle
        var_dump($_GET['id']);

        $msg = array
        (
          'body'  => 'you have new order',
          'title'   => 'welcome firebase',
          'vibrate' => 1,
          'sound'   => 1,
        );

        $fields = array
        (
          'registration_ids'  => $registrationIds,
          'notification'      => $msg
        );
         
        $headers = array
        (
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
        );
         
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        echo $result;      

    }





}









