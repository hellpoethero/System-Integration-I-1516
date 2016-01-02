@extends('staff.layout')

@section('content')

    <script type="text/javascript">
        $(function(){
            $("#date_of_birth").Zebra_DatePicker({direction:false});
            $("#department option").hide().attr('disabled',true);
            $("#hospital").on('change',function(){
                var hospital_id=$(this).val();
                $("#department option").hide().attr('disabled',true);
                $("#department option[class="+hospital_id+"]").show().attr('disabled',false);
            });
            $("#department").on('change',function(){
                var department_id=$(this).val();
                $("#unit option,#area option").hide();
                $("#unit option[class="+department_id+"],#area option[class="+department_id+"]").show();
            });
        });
    </script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover({trigger:'hover',html:true});
            $("#unit").chained("#department");
            $("#area").chained("#department");
            $("body").css('padding-top',$(".container").height());
            $("body").css('padding-bottom',$("#footer").height());
        });
    </script>

    <script type="text/javascript" src="{!! asset('js/zebra_datepicker.js') !!}"></script>
    <link rel="stylesheet" href="{!! asset('css/metallic.css') !!}">

    <div>
        <h3 align="center">Thêm nhân viên</h3>
        <br>
        <form action="http://localhost/health4all/staff/add/staff" method="post" accept-charset="utf-8" class="form-horizontal" role="form" id="add_staff">
            <div class="form-group">
                <div class="col-md-3">
                    <label for="first_name" class="control-label">First Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="last_name" class="control-label">Last Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label class="control-label">Gender</label>
                </div>
                <div class="col-md-6">
                    <label class="control-label">
                        <input type="radio" name="gender" value="M" checked="">Male
                    </label>
                    <label class="control-label">
                        <input type="radio" name="gender" value="F">Female
                    </label>
                    <label class="control-label">
                        <input type="radio" name="gender" value="O">Other
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="date_of_birth" class="control-label">Date of Birth</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control date" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="hospital" class="control-label">Hospital</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="hospital" name="hospital">
                        <option selected="selected" value="">Hospital</option>
                        <option value="1">Rajiv Gandhi Institute of Medical Sciences</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="department" class="control-label">Department</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="department" name="department">
                        <option selected="selected" disabled="disabled" style="display: none;" value="">Department</option>
                        <option disabled="disabled" style="display: none;" value="1" class="1">Anatomy</option>
                        <option disabled="disabled" style="display: none;" value="2" class="1">Anesthesia</option>
                        <option disabled="disabled" style="display: none;" value="35" class="1">ART</option>
                        <option disabled="disabled" style="display: none;" value="3" class="1">BioChemistry</option>
                        <option disabled="disabled" style="display: none;" value="4" class="1">Blood Bank</option>
                        <option disabled="disabled" style="display: none;" value="6" class="1">Cardio-Thoracic Surgery</option><option disabled="disabled" style="display: none;" value="5" class="1">Cardiology</option>
                        <option disabled="disabled" style="display: none;" value="7" class="1">Casualty</option>
                        <option disabled="disabled" style="display: none;" value="38" class="1">Child Heart Care</option>
                        <option disabled="disabled" style="display: none;" value="8" class="1">Community Medicine</option>
                        <option disabled="disabled" style="display: none;" value="9" class="1">Dental</option>
                        <option disabled="disabled" style="display: none;" value="10" class="1">Dermatology</option>
                        <option disabled="disabled" style="display: none;" value="11" class="1">Endocrinology</option>
                        <option disabled="disabled" style="display: none;" value="12" class="1">ENT</option>
                        <option disabled="disabled" style="display: none;" value="13" class="1">Forensic  Medicine</option>
                        <option disabled="disabled" style="display: none;" value="14" class="1">Gastroenterology</option>
                        <option disabled="disabled" style="display: none;" value="15" class="1">General Medicine</option>
                        <option disabled="disabled" style="display: none;" value="16" class="1">General Surgery</option>
                        <option disabled="disabled" style="display: none;" value="22" class="1">Gynecology and Obstetrics</option>
                        <option disabled="disabled" style="display: none;" value="17" class="1">Hospital Administration</option>
                        <option disabled="disabled" style="display: none;" value="36" class="1">ICTC</option>
                        <option disabled="disabled" style="display: none;" value="37" class="1">Medical Records</option>
                        <option disabled="disabled" style="display: none;" value="18" class="1">MicroBiology</option>
                        <option disabled="disabled" style="display: none;" value="19" class="1">Nephrology</option>
                        <option disabled="disabled" style="display: none;" value="20" class="1">Neurology</option>
                        <option disabled="disabled" style="display: none;" value="21" class="1">Neurosurgery</option>
                        <option disabled="disabled" style="display: none;" value="23" class="1">Ophthalmology</option>
                        <option disabled="disabled" style="display: none;" value="24" class="1">Orthopedics</option>
                        <option disabled="disabled" style="display: none;" value="25" class="1">Pathology</option>
                        <option disabled="disabled" style="display: none;" value="26" class="1">Pediatric Surgery</option>
                        <option disabled="disabled" style="display: none;" value="27" class="1">Pediatrics</option>
                        <option disabled="disabled" style="display: none;" value="28" class="1">Pharmacology</option>
                        <option disabled="disabled" style="display: none;" value="29" class="1">Physiology</option>
                        <option disabled="disabled" style="display: none;" value="30" class="1">Plastic Surgery</option>
                        <option disabled="disabled" style="display: none;" value="31" class="1">Psychiatry</option>
                        <option disabled="disabled" style="display: none;" value="32" class="1">Radiology</option>
                        <option disabled="disabled" style="display: none;" value="34" class="1">TB&amp;CD</option>
                        <option disabled="disabled" style="display: none;" value="33" class="1">Urology</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="unit" class="control-label">Unit</label>
                </div>
                <div class="col-md-6">
                    <select disabled="disabled" class="form-control" id="unit" name="unit">
                        <option selected="selected" value="">Unit</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="area" class="control-label">Area</label>
                </div>
                <div class="col-md-6">
                    <select disabled="disabled" class="form-control" id="area" name="area">
                        <option value style="display: none;">Area</option>
                        <option value="1" class="6" style="display: block;">CTRR</option>
                        <option value="2" class="6" style="display: block;">OTs Ward</option>
                        <option value="3" class="6" style="display: block;">AS Ward</option>
                        <option value="4" class="27" style="display: block;">SNCU/NICU</option>
                        <option value="5" class="27" style="display: block;">PICU</option>
                        <option value="6" class="27" style="display: block;">Step Down - PICU</option>
                        <option value="7" class="27" style="display: block;">NRC</option>
                        <option value="8" class="27" style="display: block;">Pediatric Ward</option>
                        <option value="9" class="22" style="display: block;">Labour Room</option>
                        <option value="10" class="22" style="display: block;">AnteNatal</option>
                        <option value="11" class="22" style="display: block;">PostNatal</option>
                        <option value="12" class="22" style="display: block;">Gynic Ward</option>
                        <option value="13" class="15" style="display: block;">Meco Ward</option>
                        <option value="14" class="15" style="display: block;">AMC</option>
                        <option value="15" class="15" style="display: block;">Male Medical Ward</option>
                        <option value="16" class="15" style="display: block;">Female Medical Ward</option>
                        <option value="17" class="16" style="display: block;">Male Surgical</option>
                        <option value="18" class="16" style="display: block;">Female Surgical</option>
                        <option value="19" class="7" style="display: block;">Male Burns</option>
                        <option value="20" class="7" style="display: block;">Female Burns</option>
                        <option value="21" class="19" style="display: block;">Male Nephrology</option>
                        <option value="22" class="19" style="display: block;">Female Nephrology</option>
                        <option value="23" class="20" style="display: block;">Male Nuerology</option>
                        <option value="24" class="20" style="display: block;">Female Nuerology</option>
                        <option value="25" class="21" style="display: block;">Male Nuero Surgery</option>
                        <option value="26" class="21" style="display: block;">Female Nuero Surgery</option>
                        <option value="27" class="5" style="display: block;">Male Cardiology</option>
                        <option value="28" class="5" style="display: block;">Female Cardiology</option>
                        <option value="29" class="5" style="display: block;">ICCU</option>
                        <option value="30" class="23" style="display: block;">Male Opthalmology</option>
                        <option value="31" class="23" style="display: block;">Female Opthalmology</option>
                        <option value="32" class="31" style="display: block;">Male Psychiatry</option>
                        <option value="33" class="31" style="display: block;">Female Psychiatry</option>
                        <option value="34" class="33" style="display: block;">Male Urology</option>
                        <option value="35" class="33" style="display: block;">Female Urology</option>
                        <option value="36" class="10" style="display: block;">Male Dermatalogy</option>
                        <option value="37" class="10" style="display: block;">Female Dermatalogy</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="staff_role" class="control-label">Staff Role</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="staff_role" name="staff_role">
                        <option value="">Staff Role</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="staff_category" class="control-label">Staff Category</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="staff_category" name="staff_category">
                        <option value="">Staff Category</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="designation" class="control-label">Designation</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Designation" id="designation" name="designation">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="staff_type" class="control-label">Staff Type</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="staff_type" name="staff_type">
                        <option value="">Staff Type</option>
                        <option value="On Rolls">On Rolls</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="email" class="control-label">Email</label>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="phone" class="control-label">Phone</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="specialisation" class="control-label">Specialisation</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Specialisation" id="specialisation" name="specialisation">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="research_area" class="control-label">Research Areas</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Research Areas" id="research_area" name="research_area">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="research" class="control-label">Research</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Research" id="research" name="research">
                </div>
            </div>
            <div class="form-group col-md-9">
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Ghi nhận</button>
            </div>
        </form>
    </div>

    <script>
        var url = "http://localhost/health4all/getData";
        var staff_role = document.getElementById('staff_role');
        var staff_category = document.getElementById('staff_category');
        var area = document.getElementById('area');

        $.getJSON(url, function(data) {

            var i;

            for (i=0; i<data['staff_role'].length; i++) {
                var option = document.createElement('option');
                option.value = data['staff_role'][i]['staff_role_id'];
                option.text = data['staff_role'][i]['staff_role'];
                staff_role.add(option);
            }

            for (i=0; i<data['staff_category'].length; i++) {
                var option = document.createElement('option');
                option.value = data['staff_category'][i]['staff_category_id'];
                option.text = data['staff_category'][i]['staff_category'];
                staff_category.add(option);
            }
        });
    </script>

@endsection