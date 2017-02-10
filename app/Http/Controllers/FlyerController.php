<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;
use App\Flyer;
use App\Photos;
use Image;

class FlyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /* adding photo */

    public function addPhoto(Request $request, $zip , $street)
    {

       // $this->validate($request,);

        $file = $request->file('file');

        $name = str_random(4).$file->getClientOriginalName();

        $file->move('uploads',$name);

        $flyer = Flyer::locatedAt($zip, $street);

        $url  = public_path('uploads'.'/'.$name);
        $thum = public_path('thumnails'.'/'.$name);

        $img = Image::make($url)
              ->fit(175)
              ->save($thum);

        $flyer->photo()->create(['path'=>url('thumnails'.'/'.$name) ]);


        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request,Flyer $flyer)
    {
        
        Flyer::create($request->all());//lol

        session()->flash('flyer_created','flyer created successfully');

        return redirect()->back()->withFlashMessage('flyer_created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip,$street,Flyer $flyers)
    {

        $street = str_replace('-', ' ',$street);
        
        $flyer =  Flyer::locatedAt($zip,$street);

        $count = $flyer->photo->count();

        $array =[];

        for ($x=0; $x<$count ; $x++ ) {
            
              array_push( $array,$flyer->photo->toArray()[$x]['path']) ;    
        }
        
        return view('flyer')->with('flyer',$flyer)->with('photos',$array);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    


}
