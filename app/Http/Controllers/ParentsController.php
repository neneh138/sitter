<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitter;
use App\Family;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hi Parent';
        $sitters = Sitter::all();

        return view('parents.index', compact('title', 'sitters'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'family'=>'required',
            'name'=> 'required',
            'surname'=> 'required',
            'phoneNumber'=> 'required',
            'description'=> 'required',
            'ageCategories' => 'required',
            'location'=> 'required',
            'availabity'=> 'required',
            'specialNeeds'=> 'required',
            'language'=> 'required',
            'certificate'=> 'required',
            'driverLicence'=> 'required',
            'smoker'=> 'required',
            'image' => 'image|nullable|max:1999',
            'emergencyFullName'=> 'required',
            'emergencyContact'=> 'required'
]);

        // Handle File Upload
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
}

        $family = new family;
        $family->family = $request->input('option');
        $family->name = $request->input('name');
        $family->surname = $request->input('surname');
        $family->user_id = auth()->user()->id;
        $family->image = $fileNameToStore;

        $family->phoneNumber = $request->input('phoneNumber');
        $family->description = $request->input('description');
        $family->ageCategories = $request->input('ageCategories');
        $family->location = $request->input('location');

        $family->availabity = $request->input('availabity');
        $family->specialNeeds = $request->input('specialNeeds');
        $family->language = $request->input('language');
        $family->certificate = $request->input('certificate');


        $family->smoker = $request->input('smoker');
        $family->emergencyFullName = $request->input('emergencyFullName');
        $family->emergencyContact = $request->input('emergencyContact');



        $sitter->save();
        return redirect ('/parents')->with('success', 'Profile created');
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