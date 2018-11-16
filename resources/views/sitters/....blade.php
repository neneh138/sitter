@extends('homepage.layouts')
@section('content')

<div class="container">

<form action="{{action('SittersController@store')}}" method="post" enctype="multipart/form-data">
















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
                    <label for="driverLicence"class="font-weight-bold mt-3">Driver licence</label>
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
                    <label for="smoker"class="font-weight-bold mt-3">Smoker</label>
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
            <div class="form-group mb-1 col-sm-12 col-md-12 id=images" >
                <label for="images"class="font-weight-bold mt-3">Images</label>
            </div>
        </div>
        <div class="form-group mb-2 custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <div class="container">
        <div class="form-row">
            <div class="form-group mb-1 col-sm-12 col-md-12 id=documents" >
                <label for="documents"class="font-weight-bold mt-3">Documents</label>
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
