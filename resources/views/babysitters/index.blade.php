@extends('homepage.layouts')
@section('content')

<div class="container">
    <h1>{{$title}}</h1>
    <p>How are you today?</p>


    @if(count($families) > 0)
    @foreach($families as $family)
    <div class="d-flex justify-content-around row-hl">
        <div class="p-4 item-hl"><h3><a href="/parents/{{$family->id}}"></a> {{$family->name}}</h3></div>
    <small>Registered since{{$family->created_at}}</small>
    </div>
    @endforeach
        @else
    <p>No results found</p>
@endif






</div>

@endsection
