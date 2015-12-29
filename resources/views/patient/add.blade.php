@extends('patient.layout')

@section('content')

    <div id="page-wrapper">
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {//Check if input has files.
                    var reader = new FileReader(); //Initialize FileReader.

                    reader.onload = function (e) {
                        $('#PreviewImage').attr('src', e.target.result);
                        $("#PreviewImage").resizable({ aspectRatio: true, maxHeight: 300 });
                    };
                    reader.readAsDataURL(input.files[0]);
                }else {
                    $('#PreviewImage').attr('src', "#");
                }
            }

            $(window).load(function(){
                $('#dob').datetimepicker({
                    timepicker:false,
                    format: 'd-m-Y',

                });

                function convertDateFormat(dateString){
                    if('d-m-Y' == 'd-m-Y'){
                        var dateArray = dateString.split("-");
                        var d = new Date(dateArray[2], dateArray[1], dateArray[0]);
                        var newDateString = d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate();
                    }else if('d-m-Y' == 'Y-m-d'){
                        var dateArray = dateString.split("-");
                        var d = new Date(dateArray[0], dateArray[1], dateArray[2]);
                        var newDateString = d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate();
                    }
                    return newDateString;
                }
                function calculate_age() {
                    var dateString = $('#dob').val();
                    dateString = convertDateFormat(dateString);

                    var now = new Date();
                    var today = new Date(now.getYear(),now.getMonth(),now.getDate());

                    var yearNow = now.getYear();
                    var monthNow = now.getMonth();
                    var dateNow = now.getDate();

                    var dateArray = dateString.split("-");
                    var dob = new Date(dateArray[0], dateArray[1]-1, dateArray[2]);


                    var yearDob = dob.getYear();
                    var monthDob = dob.getMonth();
                    var dateDob = dob.getDate();
                    var age = {};
                    var ageString = "";
                    var yearString = "";
                    var monthString = "";
                    var dayString = "";


                    yearAge = yearNow - yearDob;

                    if (monthNow >= monthDob)
                        var monthAge = monthNow - monthDob;
                    else {
                        yearAge--;
                        var monthAge = 12 + monthNow -monthDob;
                    }

                    if (dateNow >= dateDob)
                        var dateAge = dateNow - dateDob;
                    else {
                        monthAge--;
                        var dateAge = 31 + dateNow - dateDob;

                        if (monthAge < 0) {
                            monthAge = 11;
                            yearAge--;
                        }
                    }

                    age = {
                        years: yearAge,
                        months: monthAge,
                        days: dateAge
                    };

                    if ( age.years > 1 ) yearString = " years";
                    else yearString = " year";
                    if ( age.months> 1 ) monthString = " months";
                    else monthString = " month";
                    if ( age.days > 1 ) dayString = " days";
                    else dayString = " day";


                    if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
                        ageString = age.years + yearString + ", " + age.months + monthString + ", and " + age.days + dayString + " old.";
                    else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
                        ageString = "Only " + age.days + dayString + " old!";
                    else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
                        ageString = age.years + yearString + " old. Happy Birthday!!";
                    else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
                        ageString = age.years + yearString + " and " + age.months + monthString + " old.";
                    else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
                        ageString = age.months + monthString + " and " + age.days + dayString + " old.";
                    else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
                        ageString = age.years + yearString + " and " + age.days + dayString + " old.";
                    else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
                        ageString = age.months + monthString + " old.";
                    else ageString = "Oops! Could not calculate age!";

                    $('#age').val(ageString);

                }

                calculate_age();

                $('#dob').change(function(){
                    calculate_age();
                });

            });
        </script>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 align="center">Thêm bệnh nhân</h3>
                        <div class="panel-body">
                            <form action="http://localhost/chikitsa/index.php/patient/edit/0/patient" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label for="first_name">Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="input" name="first_name" class="form-control" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="input" name="middle_name" class="form-control" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="input" name="last_name" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p></p>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="display_id">Patient ID</label>
                                            <input type="input" name="display_id" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="display_name">Display Name</label>
                                            <input type="input" name="display_name" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <input type="radio" name="gender" value="male">Male
                                            <input type="radio" name="gender" value="female">Female
                                        </div>
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth</label>
                                            <input type="text" name="dob" id="dob" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="input" name="age" id="age" class="form-control" value="" readonly="">
                                        </div>
                                        <div class="form-group">
                                            <label for="reference_by">Reference By</label>
                                            <input type="input" name="reference_by" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="input" name="phone_number" class="form-control" value=""><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="input" name="email" class="form-control" value=""><br>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                            <a class="btn btn-primary" href="http://localhost/chikitsa/index.php/patient/index">Back</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <img id="PreviewImage" src="http://localhost/chikitsa/images/Profile.png" alt="Profile Image" height="100" width="100">
                                            <input type="file" id="userfile" name="userfile" class="form-control" size="20" onchange="readURL(this);">
                                            <input type="hidden" id="src" name="src" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Address Type</label>
                                            <select name="type" class="form-control">
                                                <option></option>
                                                <option value="Home">Home</option>
                                                <option value="Office">Office</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Address Line 1</label>
                                            <input type="input" class="form-control" name="address_line_1" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="type"></label>
                                            <input type="input" class="form-control" name="address_line_2" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="input" class="form-control" name="city" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="input" class="form-control" name="state" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="input" class="form-control" name="postal_code" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="input" class="form-control" name="country" value="">
                                        </div>
                                    </div>
                                </div>
                            </form>				</div>
                    </div>
                </div>
            </div>
        </div></div>
@endsection