@extends('homepage.layouts')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                 From
            </div>
            <div class="col-sm-12 col-md-4">
                 Received on
            </div>
        </div>
        <div class="row">
               <div class="col-sm-12 col-md-4">
                        @if(count($sitter_messages) > 0)
                        @foreach($sitter_messages as $sitter_message)

                        {{$sitter_message->$sitter_messages_id}}

               </div>
               <div class="col-sm-12 col-md-4">
                        {{$sitter_message->created_at}}

                            @endforeach
                            @else
                        <p>No messages</p>
                    @endif
               </div>
               <div class="col-sm-12 col-md-4">
                    <input class="btn btn-danger" type="reset" value="Delete">
                
           </div>
         </div>








</div>



@endsection

