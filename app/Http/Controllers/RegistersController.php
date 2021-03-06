<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register/create');

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
            'sitter'=>'required',
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

            $sitter = new Sitter;
            $sitter->sitter = $request->input('option');
            $sitter->name = $request->input('name');
            $sitter->surname = $request->input('surname');
            $sitter->user_id = auth()->user()->id;
            $sitter->image = $fileNameToStore;

            $sitter->phoneNumber = $request->input('phoneNumber');
            $sitter->description = $request->input('description');
            $sitter->ageCategories = $request->input('ageCategories');
            $sitter->location = $request->input('location');

            $sitter->availabity = $request->input('availabity');
            $sitter->specialNeeds = $request->input('specialNeeds');
            $sitter->language = $request->input('language');
            $sitter->certificate = $request->input('certificate');


            $sitter->smoker = $request->input('smoker');
            $sitter->emergencyFullName = $request->input('emergencyFullName');
            $sitter->emergencyContact = $request->input('emergencyContact');



            $sitter->save();
            return redirect ('babysitters')->with('success', 'Profile created');



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
