@extends('homepage.layouts')
@section('content')

<div class="container">

    <form action="{{action('SittersController@store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="First name">First name</label>
                <input type="text" class="form-control" placeholder="First name" name="name">
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="Last name">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" name="surname">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="Phone number">Phone number</label>
                <input type="text" class="form-control" placeholder="Phone number" name="phoneNumber"  >
            </div>
        </div>


            <div class="form-row">
                <div class="form-group col-sm-12 col-md-12 mt-3">
                    <label for="description">Write something about yourself</label>
                    <textarea class="form-control " id="description" rows="5"name="description"  ></textarea>
                </div>
            </div>

        <div class="container">
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6" id="Location " >
                <label for="Age categories" class="font-weight-bold mt-5">Location</label>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="form-row">
                <div class="col-sm-12 col-md-3 my-1">
                        <div class="form-group">
                        (hold "Ctrl" key to select multiple)
                        <select multiple class="form-control"  size="20">

                        @foreach($locations as $location)
                            <option>{{$location->city_location}} - {{$location->city_part}}</option>
                        @endforeach

                        </select>
                        </div>
                        <div class="col-auto my-1">
                         <button  id="btnsubmit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                <div class="col-sm-12 col-md-4 my-1">
                    <div>Selected locations</div>
                </div>
                <div class="col-sm-12 col-md-4 my-1">
                    <div name="{{$location->location_id}}" id="{{$location->location_id}}"></div>
                </div>


            </div>
        </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" id="ageCategories " >
             <label for="Age categories" class="font-weight-bold mt-5">Age categories</label>
            </div>
        </div>

        @foreach($ages as $age)
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="ageCategories0-1" value="age_0-1" name="age_0-1">
                <label class="form-check-label" for="ageCategories0-1"  id="ageCategories0-1">{{$age->age_category}}</label>
            </div>
        @endforeach
    </div>


    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" id="specialNeeds " >
                <label for="Special Needs" class="font-weight-bold mt-3">Special Needs</label>
            </div>
        </div>
            @foreach($specialCares as $specialCare)
            <div class="form-group form-check form-check-inline">
                <input class=" Form-check-input" type="checkbox" id="specialNeedADHD" value="adhd" name="adhd" >
                <label class="form-check-label" for="specialNeedADHD">{{$specialCare->special_cares_category}}</label>
            </div>
            @endforeach

            <div class="form-row">
                    <label for="Other">if other specify</label>
                    <input type="text" class="form-control" value="" name="other">
                    </div>
        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group  col-sm-12 col-md-12" >
                    <label for="Language"class="font-weight-bold mt-3">Language</label>
                </div>
            </div>
            <div class="form-group form-check form-check-inline">
                    @foreach($languages as $language)
                    <div class=" form-group form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="-1" value="" name="" >
                        <label class="form-check-label" for="ageCategories0-1"  id="">{{$language->langauge_category}}</label>
                    </div>
                    @endforeach
            </div>
            <div class="form-row">
                    <label for="Other">if other specify</label>
                    <input type="text" class="form-control" value="" name="other">
            </div>
        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=certificate" >
                    <label for="Certificate"class="font-weight-bold mt-3">Certificate</label>
                </div>
            </div>
            <div class="form-group form-check form-check-inline">
                    @foreach($certificates as $certificate)
                    <div class=" form-group form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="-1" value="" name="" >
                        <label class="form-check-label" for="ageCategories0-1"  id="">{{$certificate->certificate_category}}</label>

                    </div>
                    @endforeach

            </div>
                    <div class="form-row">
                    <label for="Other">if other specify</label>
                    <input type="text" class="form-control" value="" name="other">
                    </div>


        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=driverLicence" >
                    <label for="driverLicence"class="font-weight-bold mt-3">Driver licence</label>
                </div>
            </div>

            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="radio" id="driverLicenceYes" value="Yes" name="Driver licence">
                <label class="form-check-label" for="driverLicenceYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="radio" id="driverLicenceNo" value="No" name="Driver licence">
                <label class="form-check-label" for="driverLicenceNo">No</label>
            </div>
        </div>
        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=smoker" >
                    <label for="smoker"class="font-weight-bold mt-3">Smoker</label>
                </div>
            </div>
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="radio" id="smokerYes"  value="Yes" name="Smoker">
                <label class="form-check-label" for="smokerYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="radio" id="smokerNo" value="No" name="Smoker">
                <label class="form-check-label" for="smokerNo">No</label>
            </div>
        </div>
        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=images" >
                    <label for="images"class="font-weight-bold mt-3">Images</label>
                </div>
            </div>
            <div class="form-group mb-2 custom-file">
                <input type="file" class="custom-file-input" id="customFile"value="images" name="images" >
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  {{--       @if (count($errors)> 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
        @endif --}}
        <script src="js\app.js"></script>
    </form>
</div>

@endsection

