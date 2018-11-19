<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Age;
use App\Certificate;
use App\DriverLicense;
use App\Sitter;
use App\Family;
use App\Location;
use App\SpecialCare;
use App\Smoker;
use App\Language;
use App\Favorite;
use App\SitterMessage;
use App\SitterLocation;
use App\SitterAge;
use App\SitterSpecialCare;




class SittersController extends Controller

{



/*         echo '<pre>';
        print_r($languages);
        echo '</pre>';
           exit(); */







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

    {   $locations =  Location::all();
        $ages =  Age::all();
        $languages = Language::all();
        $specialCares = SpecialCare::all();
        $certificates = Certificate::all();
        $driver_licenses = DriverLicense::all();

        return view('sitters.create', compact('ages','locations','languages', 'specialCares', 'certificates'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        return $request->all();

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

     /*    $sitterLocation = new SitterLocation;
        $sitterLocation->location_id = $request->input('location_id');
        $sitterLocation->sitter_id = $request->input('sitter_id');
        $sitterLocation->save(); */

        $sitter_ages = new SitterAge;
        $sitter_ages->age_id = $request->input('age_id');
        $sitter_ages->sitter_id = $request->input('sitter_id');
        $sitter_ages->save();

        $sitterCertificate = new SitterCertificate;
        $sitterCertificate->certificate_id = $request->input('certificate_id');
        $sitterCertificate->sitter_id = $request->input('sitter_id');
        $sitterCertificate->save();

        $sitterLanguage = new SitterLanguage;
        $sitterLanguage->language_id = $request->input('language_id');
        $sitterLanguage->sitter_id = $request->input('sitter_id');
        $sitterLanguage->other_sitter_languages = $request->input('other_sitter_languages');
        $sitterLanguage->save();

        $sitter_special_cares = new SitterSpecialCare;
        $sitter_special_cares->special_cares_id = $request->input('special_cares_id');
        $sitter_special_cares->sitter_id = $request->input('sitter_id');
        $sitter_special_cares->other_sitter_special_cares = $request->input('other_sitter_special_cares');
        $sitter_special_cares->save();




        $sitter = new Sitter;

        $sitter->name = $request->input('name');
        $sitter->surname = $request->input('surname');
        $sitter->phone_number= $request->input('phoneNumber');
        $sitter->description= $request->input('description');
        $post->image = $fileNameToStore;
        $sitter->driver_license_id= $request->input('driver_license_id');
        $sitter->smoker_id= $request->input('smoker_id');
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
