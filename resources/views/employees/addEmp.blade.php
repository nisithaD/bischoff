@extends('layout.header')

@section('content')
    <div class="container col-12">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 p-3 pb-0 mt-3 mb-3">
                    <h2 id="heading">Add new employee</h2>
                    <p>Fill all form field to go to next step</p>
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                    <form id="msform" action="/addNewEmp" method="post">
                    @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Personal Details</strong></li>
                            <li id="personal"><strong>Emergency Info</strong></li>
                            <li id="payment"><strong>Job Information</strong></li>
                            <li id="confirm"><strong>Submit</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="" style="font-size: 15px">Account Information</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <hr>
                                <label class="fieldlabels">First name:*</label> <input class="form-control" type="text" name="fName"
                                                                                        placeholder="First name"/> <label
                                    class="fieldlabels">Last Name:*</label> <input class="form-control" type="text" name="lName"
                                                                                   placeholder="Last name"/>
                                <label
                                    class="fieldlabels">NIC: *</label> <input class="form-control" type="text" name="nicNo"
                                                                                   placeholder="NIC Number"/>

                                    <label for="birthDate"  class="fieldlabels">Date of Birth*</label>
                                        <input class="form-control" name="dob" type="date" id="birthDate">
                                <label for="gender_select">Gender</label>
                                <select class="form-control mb-4" name="gender" id="gender_select">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <label
                                    class="fieldlabels">Phone No:*</label> <input class="form-control" type="text" name="phoneNo"
                                                                                   placeholder="Phone number"/>
                                <br>
                                <h2 class="" style="font-size: 15px">Residential Information</h2>
                                <hr>
                                <label
                                    class="fieldlabels">Permanent Address:*</label> <input class="form-control" type="text" name="permanantAddress"
                                                                                  placeholder="Address"/>
                                <label
                                    class="fieldlabels">City:</label> <input class="form-control" type="text" name="city"
                                                                              placeholder="City"/>
                                <label for="gender_select">District:</label>
                                <select class="form-control mb-4" name="district" id="district_select">
                                    <option>Kandy</option>
                                </select>
                                <label
                                    class="fieldlabels">PHI Area:*</label> <input class="form-control" type="text" name="phiArea"
                                                                                           placeholder="PHI Area"/>
                                <label
                                    class="fieldlabels">Police Area:*</label> <input class="form-control" type="text" name="policeArea"
                                                                                           placeholder="Police Area"/>
                                <label
                                    class="fieldlabels">GS Division:*</label> <input class="form-control" type="text" name="gsDivision"
                                                                                           placeholder="GS Devision"/>
                                <label for="gender_select">Currently living at the permanent address:</label>
                                <select class="form-control mb-4" name="stayPermanent" id="stayPermanent">
                                    <option>Select an option</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>

                                <div id="temporyResSec" style="display: none">
                                <br>
                                <h2 class="" style="font-size: 15px">Temporary Residential Information</h2>
                                <hr>
                                <label
                                    class="fieldlabels">Temporary Address:</label> <input class="form-control" type="text" name="tempAddress"
                                                                                           placeholder="Address"/>
                                <label
                                    class="fieldlabels">City:</label> <input class="form-control" type="text" name="tempCity"
                                                                             placeholder="City"/>
                                <label for="gender_select">District:</label>
                                <select class="form-control mb-4" name="tempDistrict" id="district_select">
                                    <option>Kandy</option>
                                </select>
                                <label
                                    class="fieldlabels">PHI Area:</label> <input class="form-control" type="text" name="tempPhiArea"
                                                                                  placeholder="PHI Area"/>
                                <label
                                    class="fieldlabels">Police Area:</label> <input class="form-control" type="text" name="tempPoliceArea"
                                                                                     placeholder="Police Area"/>
                                <label
                                    class="fieldlabels">GS Division:</label> <input class="form-control" type="text" name="tempGsDivision"
                                                                                     placeholder="GS Division"/>
                                <label
                                    class="fieldlabels">Boarding owner name:</label> <input class="form-control" type="text" name="bOwnerName"
                                                                                     placeholder="Boarding owner name"/>
                                <label
                                    class="fieldlabels">Boarding owner contact:</label> <input class="form-control" type="text" name="bOwnerContact"
                                                                                             placeholder="Boarding owner contact"/>
                                <label
                                    class="fieldlabels">Boardimaites count:</label> <input class="form-control" type="number" name="bordimaitesCount"
                                                                                            placeholder="Bordimaites count"/>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Emergency Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Emergency Contact Person: *</label> <input type="text" name="emergencyName"
                                                                                        placeholder="Name"/>
                                <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="emergencyPhno"
                                                                                      placeholder="Contact No."/> <label
                                    class="fieldlabels">Alternate Contact No.: *</label> <input type="text"
                                                                                                name="emergencyPhno2"
                                                                                                placeholder="Alternate Contact No."/>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next"/> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Employee Job Information </h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">EPF No: *</label> <input type="text" name="epfNo"
                                                                                                      placeholder="EPF Number"/>
                                <label for="department_select">Department:</label>
                                <select class="form-control mb-4" name="department" id="department_select">
                                    <option>Kandy</option>
                                </select>
                                <label
                                    class="fieldlabels">Designation: *</label> <input type="text" name="designation"
                                                                                      placeholder="Designation"/>
                                <label for="dateOfJoined" class="fieldlabels">Date of joined*</label>
                                <input class="form-control" name="dateOfJoined" type="date" id="dateOfJoined">

                                <label for="department_select">Shift:</label>
                                <select class="form-control mb-4" name="shift" id="shift">
                                    <option>Day</option>
                                </select>
                                <label
                                    class="fieldlabels">Start time: *</label> <input type="text" name="startTime"
                                                                                      placeholder="Enter start time"/>
                                <label for="transportMethod">Transport method:</label>
                                <select class="form-control mb-4" name="transportMethod" onchange="getTransportType()" id="transportMethod">
                                    <option value="" selected>Select transport method</option>
                                    <option value="1">Office</option>
                                    <option value="2">Public</option>
                                    <option value="3">Own</option>
                                </select>
                                <label for="transportMethod">Vehicle number:</label>
                                <select class="form-control mb-4" name="vehicleNumber"  id="vehicleNumber" disabled>
                                    <option value="" selected>Select vehicle number</option>
                                    <option value="1">KC-7763</option>
                                </select>
                                <label for="transportMethod">Transport Root:</label>
                                <select class="form-control mb-4" name="transportRoot"  id="transportRoot" disabled>
                                    <option value="" selected>Select transport root</option>
                                    <option value="1">Awissawella</option>
                                </select>
                            </div>
                            <input type="submit" name="next" class="next action-button" value="Submit"/> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

//Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
            next_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

//Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
            previous_fs.show();

//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function () {
            return false;
        })

    });

    function getTransportType(){
        var transportType=document.getElementById('transportMethod').value;
        console.log(transportType);
        if (transportType==1){
            document.getElementById('vehicleNumber').disabled=false;
            document.getElementById('transportRoot').disabled=false;
        }
        else if(transportType==2 || transportType==3){
            document.getElementById('vehicleNumber').disabled=true;
            document.getElementById('transportRoot').disabled=true;
        }
    }

    $(function() {
        $('#stayPermanent').change(function(){
            $('#temporyResSec')[ ($("option[value='0']").is(":checked"))? "show" : "hide" ]();
        });
    });

</script>
