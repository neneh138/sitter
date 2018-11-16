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
                    <div class="form-group mb-1 col-sm-12 col-md-12" id="ageCategories " >
                        <label for="Age categories" class="font-weight-bold mt-5">Location</label>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="form-row">
                    <div class="form-group mb-1 col-sm-12 col-md-12" id="ageCategories " >
                        <label for="Age categories" class="font-weight-bold mt-5">Age categories</label>
                    </div>
                </div>


                <div class=" form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ageCategories0-1" value="age_0-1" name="age_0-1">
                    <label class="form-check-label" for="ageCategories0-1"  id="ageCategories0-1">0-1</label>
                </div>

                <div class=" form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ageCategories1-3" value="age_1-3" name="age_1-3">
                    <label class="form-check-label" for="ageCategories1-3" id="ageCategories1-3">1-3</label>
                </div>

                <div class="form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ageCategories3-6" value="age_3-6" name="age_3-6" >
                    <label class="form-check-label" for="ageCategories3-6" id="ageCategories3-6">3-6</label>
                </div>

                <div class="form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ageCategories6-10" value="age_6-10" name="age_6-10" >
                    <label class="form-check-label" for="ageCategories6-10" id="ageCategories6-10" >6-10</label>
                </div>

                <div class="form-group form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ageCategories10-14" value="age_10-14" name="age_10-14" >
                    <label class="form-check-label" for="ageCategories10-14" id="ageCategories10-14">10-14</label>
                </div>
            </div>


            <div class="container">
                <div class="form-row">
                    <div class="form-group mb-1 col-sm-12 col-md-12" id="specialNeeds " >
                        <label for="Special Needs" class="font-weight-bold mt-3">Special Needs</label>
                    </div>
                </div>
            <div class="form-group form-check form-check-inline">
                <input class=" Form-check-input" type="checkbox" id="specialNeedADHD" value="adhd" name="adhd" >
                <label class="form-check-label" for="specialNeedADHD">ADHD</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="specialNeedAsthma" value="asthma" name="asthma" >
                <label class="form-check-label" for="specialNeedAsthma">Asthma</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="specialNeedAutism" value="autism" name="autism" >
                <label class="form-check-label" for="specialNeedAutism">Autism</label>
            </div>

            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="specialNeedDiabetes" value="diabetes" name="diabetes" >
                <label class="form-check-label" for="specialNeedDiabetes">Diabetes</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="specialNeedDownsyndrome" value="Down_s_syndrome" name="Down_s_syndrome" >
                <label class="form-check-label" for="specialNeedDownsyndrome">Down's syndrome</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="specialNeedEpilepsy" value="epilepsy" name="epilepsy" >
                <label class="form-check-label" for="specialNeedEpilepsy">Epilepsy</label>
            </div>

            <div class="form-group form-check form-check-inline">
                <label for="Other">Other</label>
                <input type="text" class="form-control" id="specialNeedDownsyndrome" value="" name="Other" >
            </div>
        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12" >
                    <label for="Language"class="font-weight-bold mt-3">Language</label>
                </div>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageČeština" value="čeština" name="čeština" >
                <label class="form-check-label" for="languageČeština">Čeština</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageEnglish" value="english" name="english" >
                <label class="form-check-label" for="languageEnglish">English</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageSlovenčina" value="slovenčina" name="slovenčina">
                <label class="form-check-label" for="languageSlovenčina">Slovenčina</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageDeutsch" value="deutsch" name="deutsch">
                <label class="form-check-label" for="languageDeutsch">Deutsch</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageEspañol"  value="español" name="español">
                <label class="form-check-label" for="languageEspañol">Español</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageFrançais" value="français" name="français">
                <label class="form-check-label" for="languageFrançais">Français</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languageItaliano" value="italiano" name="italiano">
                <label class="form-check-label" for="languageItaliano">Italiano</label>
            </div>
            <div class="form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="languagePусский" value="pусский" name="pусский">
                <label class="form-check-label" for="languagePусский">Pусский</label>
            </div>
        </div>

        <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=certificate" >
                    <label for="Certificate"class="font-weight-bold mt-3">Certificate</label>
                </div>
            </div>
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="certificateFirstAid"  value="first aid" name="first aid">
                <label class="form-check-label" for="certificateFirstAid">First Aid</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="certificateMontessori" value="montessori" name="montessori">
                <label class="form-check-label" for="certificateMontessori">Montessori</label>
            </div>
            <div class="form-check form-check-inline">
                <label for="Other">Other</label>
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
    </form>










</div>

@endsection

