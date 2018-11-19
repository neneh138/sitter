@extends('homepage.layouts')
@section('content')

<div class="container">

    <form action="{{action('SittersController@store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (count($errors)> 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
        @endif

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="First name">First name</label>
                <input type="text" class="form-control" placeholder="First name" name="name" id="name" value=""?>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="Last name">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" name="surname">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="Phone number">Phone number</label>
                <input type="tel" class="form-control" placeholder="Phone number" name="phoneNumber"  >
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
                        <select multiple class="form-control"  size="8" name="locations[]">

                        @foreach($locations as $location)
                        <option value="{{$location->location_id}}">{{$location->city_location}} - {{$location->city_part}}</option>
                        @endforeach

                        </select>
                        </div>

                </div>
                    <div class="col-sm-12 col-md-4 my-1">
                    <div name="{{$location->location_id}}" id="{{$location->location_id}}"></div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" >
             <label class="font-weight-bold mt-5">Age categories</label>
            </div>
        </div>

        @foreach($ages as $age)
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="age_id[]"  value="{{ $age->age_id }}">
                <label class="form-check-label" >{{$age->age_category}}</label>

            </div>
        @endforeach
    </div>


    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12">
                <label class="font-weight-bold mt-3">Special Needs</label>
            </div>
        </div>
            @foreach($specialCares as $specialCare)
            <div class="form-group form-check form-check-inline">
                <input class=" Form-check-input" type="checkbox" name="{{$specialCare->special_cares_id}}" >
                <label class="form-check-label">{{$specialCare->special_cares_category}}</label>
            </div>
            @endforeach

            <div class="form-row">
                    <label for="Other">if other specify</label>
                    <input type="text" class="form-control" name="other_sitter_special_cares">
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
                    <input class="form-check-input" type="checkbox" name="{{$language->language_id}}" >
                        <label class="form-check-label" >{{$language->langauge_category}}</label>
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
                        <input class="form-check-input" type="checkbox" name="{{$certificate->certificate_id}}">
                        <label class="form-check-label" >{{$certificate->certificate_category}}</label>

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
                <input class="form-check-input" type="radio" id="driverLicenceYes" value="Yes" name="driver_license_id">
                <label class="form-check-label" for="driverLicenceYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="radio" id="driverLicenceNo" value="No" name="driver_license_id">
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
                <input class="form-check-input" type="radio" id="smokerYes"  value="Yes" name="smoker_id">
                <label class="form-check-label" for="smokerYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="radio" id="smokerNo" value="No" name="smoker_id">
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
                <input type="file" class="custom-file-input" id="customFile"value="images" name="images" multiple>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <script src="js\app.js"></script>
    </form>
</div>

@endsection

