@extends('homepage.layouts')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col col-sm-12 col-md-12">
            <h1>Register</h1>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="container">
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <h3>I am a babysitter</h3>
                <a class= "mr-2  btn btn-success btn-md" href="babysitters\create" role="button">Click here</a>
            </div>
            <div class="col">
                <h3>I am looking for a babysitter</h3>
                <a class= "mr-2  btn btn-success btn-md" href="parents\create" role="button">Click here</a>
            </div>
        </div>
    </div>
</div>















@endsection
