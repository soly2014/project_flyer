<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Flyer;
use App\Photos;
use Image;

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
              ->fit(175)
              ->save($thum);

        \App\Photos::create(['path'=>url('thumnails'.'/'.$name) ,'name'=>$name]);


        return redirect()->back();  

        }




      public function clearImage(Request $request)
    {
        $image = \App\Photos::where('name',$request->file)->first();

        if ($image) {
            
            $image->delete();
        }

        return response()->json(['success'=>true]);
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








