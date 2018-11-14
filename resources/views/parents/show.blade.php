@extends('homepage.layouts')
@section('content')

<div class="container">\
 <a href="parents/index" class="btn btn-default">Back</a>
<img src="{{$sitter->sitter_id}}" alt="">
<p>{{$sitter->name}}</p>
<p>{{$sitter->description}}</p>


review
message_me
certificates
driver_licenses
languages
smokers
special__needs
</div>

@endsection

