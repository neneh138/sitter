<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitter;
use App\Family;
use App\SitterMessage;






class SitterMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('sitters/message');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sitters = Sitter::all();
        $families = Family::all();
        $locations =  Location::all();
        $ages =  Age::all();
        $languages = Language::all();
        $specialCares = SpecialCare::all();
        $certificates = Certificate::all();
        $driver_licenses = DriverLicense::all();
        $sitter_messages = Sitter_message::all();

        return view('sitters.message', compact('ages','locations','languages', 'specialCares', 'certificates', 'sitters', 'families'));
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

            'message'=> 'required',

    ]);


        $sitter_messages = new  Sitter_message;
        $sitter_messages->message = $request->input('message');
        $sitter_messages->save();

        return redirect ('parents.show')->with('success', 'Message sent');
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
        $sitter_messages = Sitter_message::all();
        return view ('sitters.show');
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
