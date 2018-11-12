@extends('homepage.layouts')
@section('content')

<div class="container">

<body>
    <h1>Register</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'POST', 'enctype'=> 'multipart/form-data']) !!}

        <div class="form-group">
                {{Form::label('option', 'Choose one')}} {{--  <label for="option">Choose one</label> --}}
                {{Form::select('option', '', ['class' => 'form-control', 'placeholder' => 'Option'])}}{{--<select class="form-control" id="option1">--}}
                <option>I am a babysitter</option>
                <option>I am looking for a babysitter</option>
            </select>
        </div>

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>

        <div class="form-group">
            {{Form::label('surname', 'Surname')}}
            {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname'])}}
        </div>

        <div class="form-group">
            {{Form::label('surname', 'Surname')}}
            {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname'])}}
        </div>

        <div class="form-group">
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>

        <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>










        <div class="form-group">

                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id'=> 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}

        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>




      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
</body>


</div>

@endsection



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
