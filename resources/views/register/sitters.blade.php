@extends('homepage.layouts')
@section('content')

<div class="container">

<form>
    <div class="container">
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="First name">First name</label>
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="Last name">Last name</label>
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="Phone number">Phone number</label>
                <input type="text" class="form-control" placeholder="Phone number">
            </div>
{{--             <div class="form-group col-sm-12 col-md-6">
                    <label for="Location">Location</label>
                    <select class="form-control" id="Location">
                      <option>Prague 1</option>
                      <option>Prague 2</option>
                      <option>Prague 3</option>
                      <option>Prague 4</option>
                      <option>Prague 5</option>
                      <option>Prague 6</option>
                      <option>Prague 7</option>
                      <option>Prague 8</option>
                      <option>Prague 9</option>
                      <option>Prague 10</option>
                    </select>
            </div> --}}
        </div>

        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="Emergency contact full name">Emergency contact full name</label>
                <input type="text" class="form-control" placeholder="Emergency contact full name">
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="Emergency contact phone number">Emergency contact phone number</label>
                <input type="text" class="form-control" placeholder="Emergency contact phone number">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" id="location " >
                <label for="Location" class="font-weight-bold mt-5">Location</label>
            </div>
        </div>
        <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 1</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 2</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 3</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 4</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 5</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 6</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 7</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 8</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 9</label>
         </div>
         <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="locationPrague1" value="locationPrague1">
            <label class="form-check-label" for="locationPrague1-1"  id="locationPrague1">Prague 10</label>
         </div>
    </div>


    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" id="ageCategories " >
                <label for="Age categories" class="font-weight-bold mt-5">Age categories</label>
            </div>
        </div>


        <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ageCategories0-1" value="option1">
            <label class="form-check-label" for="ageCategories0-1"  id="ageCategories0-1">0-1</label>
        </div>

        <div class=" form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ageCategories1-3" value="option2">
            <label class="form-check-label" for="ageCategories1-3" id="ageCategories1-3">1-3</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ageCategories3-6" value="option2">
            <label class="form-check-label" for="ageCategories3-6" id="ageCategories3-6">3-6</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ageCategories6-10" value="option2">
            <label class="form-check-label" for="ageCategories6-10" id="ageCategories6-10" >6-10</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ageCategories10-14" value="option2">
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
            <input class=" form-check-input" type="checkbox" id="specialNeedNone" value="specialNeedNone">
            <label class="form-check-label" for="specialNeedNone">None</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialNeedAutism" value="specialNeedAutism">
            <label class="form-check-label" for="specialNeedAutism">Autism</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialNeedDiabetes" value="specialNeedDiabetes">
            <label class="form-check-label" for="specialNeedDiabetes">Diabetes</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialNeedAsthma" value="specialNeedAsthma">
            <label class="form-check-label" for="specialNeedAsthma">Asthma</label>
        </div>

        <div class="form-group form-check form-check-inline">
            <input class=" Form-check-input" type="checkbox" id="specialNeedADHD" value="specialNeedADHD">
            <label class="form-check-label" for="specialNeedADHD">ADHD</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialNeedEpilepsy" value="specialNeedEpilepsy">
            <label class="form-check-label" for="specialNeedEpilepsy">Epilepsy</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialNeedDownsyndrome" value="specialNeedDownsyndrome">
            <label class="form-check-label" for="specialNeedDownsyndrome">Down's syndrome</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <label for="Other">Other</label>
            <input type="text" class="form-control" id="specialNeedDownsyndrome" >
        </div>
    </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 font-weight-bold mt-3">
                <label for="description">Description</label>
                <textarea class="form-control " id="description" rows="5"></textarea>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12" >
                <label for="Language"class="font-weight-bold mt-3">Language</label>
            </div>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageEnglish" value="languageEnglish">
            <label class="form-check-label" for="languageEnglish">English</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageDeutsch" value="languageDeutsch">
            <label class="form-check-label" for="languageDeutsch">Deutsch</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageEspañol" value="languageEspañol">
            <label class="form-check-label" for="languageEspañol">Español</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageFrançais" value="languageFrançais">
            <label class="form-check-label" for="languageFrançais">Français</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageItaliano" value="languageItaliano">
            <label class="form-check-label" for="languageItaliano">Italiano</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageČeština" value="languageČeština">
            <label class="form-check-label" for="languageČeština">Čeština</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languageSlovenčina" value="languageSlovenčina">
            <label class="form-check-label" for="languageSlovenčina">Slovenčina</label>
        </div>
        <div class="form-group form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="languagePусский" value="languagePусский">
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
            <input class="form-check-input" type="checkbox" id="certificateFirstAid" value="certificateFirstAid">
            <label class="form-check-label" for="certificateFirstAid">First Aid</label>
        </div>
        <div class="form-group  form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="certificateMontessori" value="certificateMontessori">
            <label class="form-check-label" for="certificateMontessori">Montessori</label>
        </div>
        <div class="form-check form-check-inline">
            <label for="Other">Other</label>
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=driverLicence" >
                    <label for="Certificate"class="font-weight-bold mt-3">Driver licence</label>
                </div>
            </div>
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="driverLicenceYes" value="driverLicenceYes">
                <label class="form-check-label" for="driverLicenceYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="driverLicenceNo" value="driverLicenceNo">
                <label class="form-check-label" for="driverLicenceNo">No</label>
            </div>
    </div>
    <div class="container">
            <div class="form-row">
                <div class="form-group mb-1 col-sm-12 col-md-12 id=smoker" >
                    <label for="Certificate"class="font-weight-bold mt-3">Smoker</label>
                </div>
            </div>
            <div class=" form-group form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="smokerYes" value="smokerYes">
                <label class="form-check-label" for="smokerYes">Yes</label>
            </div>
            <div class="form-group  form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="smokerNo" value="smokerNo">
                <label class="form-check-label" for="smokerNo">No</label>
            </div>
    </div>
    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12 id=smoker" >
                <label for="Certificate"class="font-weight-bold mt-3">Images</label>
            </div>
        </div>
        <div class="form-group mb-2 custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12 id=smoker" >
                <label for="Certificate"class="font-weight-bold mt-3">Documents</label>
            </div>
        </div>
        <div class="form-group mb-2 custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group mt3- col-sm-12 col-md-12">
             <label for="Availabity" class="font-weight-bold mt-5">Availabity</label>
            </div>
        </div>
    </div>

















    <div class="container">
        <div class="form-row">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>

                   <tbody>
                        <tr>
                            <th scope="row">Morning</th>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">06:00 - 09:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">09:00 - 12:00</label>
                            </td>
                        </tr>

                        <tr>
                                <th scope="row">Afternoon</th>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">12:00 - 15:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">15:00 - 18:00</label>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Evening</th>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                            <td>
                                <label class="checkbox-inline"><input type="checkbox" value="">18:00 - 21:00</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">21:00 - 00:00</label>
                            </td>
                        </tr>

                     </tbody>
                </table>
            </div>
        </div>
    </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
