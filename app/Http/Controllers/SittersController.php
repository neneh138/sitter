<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Age;
use App\Sitter;
use App\Family;
use App\Location;
use App\SpecialCare;
use App\Language;
use App\Certificate;



class SittersController extends Controller

{

    public function mydata()
    {   $locations =  Location::all();
        $ages =  Age::all();
        $languages = Language::all();
        $specialCares = SpecialCare::all();
        $certificates = Certificate::all();

/*         echo '<pre>';
        print_r($languages);
        echo '</pre>';
           exit(); */

        return view('sitters.create', compact('ages','locations','languages', 'specialCares', 'certificates'));


    }

      public function index()
    {
        $title = 'Hi Sitter';
        $families =  Family::all();
        $locations =  Location::all();

        return view('sitters.index', compact('title', 'families', 'locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('/sitters/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
      /*  */

        //
        $this->validate($request, [

            'name'=> 'required',
            'surname'=> 'required',
            'phoneNumber'=> 'required',
            'description'=>'required',


]);

/*         // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        } */
        $sitter__location = new Sitter__Location;
     //   $sitter__location->location_id = $request->input({{$location->id}});


        $location->save();

        $sitter = new Sitter;


        $sitter->name = $request->input('name');
        $sitter->surname = $request->input('surname');
        $sitter->phone_number= $request->input('phoneNumber');
        $sitter->description= $request->input('description');






        $sitter->save();
        return redirect ('sitters.show')->with('success', 'Profile created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('sitters/show');
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
