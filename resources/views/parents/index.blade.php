@extends('homepage.layouts')
@section('content')

<div class="container">

    <h1>{{$title}}</h1>
    <p>choose your babysitter for your family</p>

    @if(count($sitters) > 0)
    @foreach($sitters as $sitter)
    <div class="d-flex justify-content-around row-hl">
        <div class="p-4 item-hl"><h3><a href="/parents/{{$sitter->id}}"></a> {{$sitter->name}}</h3></div>
    <small>Registered since{{$sitter->created_at}}</small>
    </div>
    @endforeach
    {{$sisters->links()}}
        @else
    <p>No results found</p>
    @endif




</div>

@endsection

