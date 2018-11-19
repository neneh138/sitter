
@extends('homepage.layouts')
@section('content')

<div class="container">

                <div class="row">
                  <div class="col-sm-12 col-md-6">
                     {{-- {{$family->name}}}   --}}
                  </div>
                  <div class="col-sm-12 col-md-6">
                    {{--    {{$sitter->name}}} --}}
                  </div>
                  

                </div>
</div>
<div class="container">
        <div class="form-row">
                <div class="form-group col-sm-12 col-md-12 mt-3">
                    <label for="description">Your message</label>
                    <textarea class="form-control " id="message" rows="5 "name="message" value={{$sitter_messages->message}} ></textarea>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
</div>











@endsection
