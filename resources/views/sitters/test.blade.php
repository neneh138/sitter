@extends('homepage.layouts')
@section('content')

<div class="container">

<form action="{{action('SittersController@store')}}" method="post" enctype="multipart/form-data">

    @foreach($families as $family)
    <div class="d-flex justify-content-around row-hl">
        <div class="p-4 item-hl"><h3><a href="/parents/{{$family->id}}"></a> {{$family->name}}</h3></div>
    <small>Registered since{{$family->created_at}}</small>
    </div>
    @endforeach
@endsection
