@extends('layouts.main')

@section('sidebar')
<ul class="nav nav-sidebar">
    <li class="nav-header">Add</li>
    <li class="active"><a href="http://localhost/health4all/staff/add/staff">Staff</a></li>
    <li><a href="http://localhost/health4all/staff/add/staff_role">Staff Role</a></li>
    <li><a href="http://localhost/health4all/staff/add/staff_category"> Staff Category</a></li>
    <li class="nav-header">Edit</li>
    <li><a href="http://localhost/health4all/staff/edit/staff">Staff</a></li>
    <li><a href="http://localhost/health4all/staff/edit/staff_role">Staff Role</a></li>
    <li><a href="http://localhost/health4all/staff/edit/staff_category">Staff Category</a></li>
</ul>
@endsection

@section('content')
    <div>
        <center>
                    <strong></strong>
                    <h3>Add Staff Details</h3>
                </center><br>

                <center>
                </center>
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
                            <span class="Zebra_DatePicker_Icon_Wrapper" style="display: block; position: relative; float: none; top: auto; right: auto; bottom: auto; left: auto;"><input type="text" class="form-control date" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth" readonly="readonly" style="position: relative; top: auto; right: auto; bottom: auto; left: auto;"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="hospital" class="control-label">Hospital</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="hospital" name="hospital">
                                <option value="">Hospital</option>
                                <option value="1">Rajiv Gandhi Institute of Medical Sciences</option>			</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="department" class="control-label">Department</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="department" name="department">
                                <option value="" disabled="disabled" style="display: none;">Department</option>
                                <option value="1" class="1" disabled="disabled" style="display: none;">Anatomy</option><option value="2" class="1" disabled="disabled" style="display: none;">Anesthesia</option><option value="35" class="1" disabled="disabled" style="display: none;">ART</option><option value="3" class="1" disabled="disabled" style="display: none;">BioChemistry</option><option value="4" class="1" disabled="disabled" style="display: none;">Blood Bank</option><option value="6" class="1" disabled="disabled" style="display: none;">Cardio-Thoracic Surgery</option><option value="5" class="1" disabled="disabled" style="display: none;">Cardiology</option><option value="7" class="1" disabled="disabled" style="display: none;">Casualty</option><option value="38" class="1" disabled="disabled" style="display: none;">Child Heart Care</option><option value="8" class="1" disabled="disabled" style="display: none;">Community Medicine</option><option value="9" class="1" disabled="disabled" style="display: none;">Dental</option><option value="10" class="1" disabled="disabled" style="display: none;">Dermatology</option><option value="11" class="1" disabled="disabled" style="display: none;">Endocrinology</option><option value="12" class="1" disabled="disabled" style="display: none;">ENT</option><option value="13" class="1" disabled="disabled" style="display: none;">Forensic  Medicine</option><option value="14" class="1" disabled="disabled" style="display: none;">Gastroenterology</option><option value="15" class="1" disabled="disabled" style="display: none;">General Medicine</option><option value="16" class="1" disabled="disabled" style="display: none;">General Surgery</option><option value="22" class="1" disabled="disabled" style="display: none;">Gynecology and Obstetrics</option><option value="17" class="1" disabled="disabled" style="display: none;">Hospital Administration</option><option value="36" class="1" disabled="disabled" style="display: none;">ICTC</option><option value="37" class="1" disabled="disabled" style="display: none;">Medical Records</option><option value="18" class="1" disabled="disabled" style="display: none;">MicroBiology</option><option value="19" class="1" disabled="disabled" style="display: none;">Nephrology</option><option value="20" class="1" disabled="disabled" style="display: none;">Neurology</option><option value="21" class="1" disabled="disabled" style="display: none;">Neurosurgery</option><option value="23" class="1" disabled="disabled" style="display: none;">Ophthalmology</option><option value="24" class="1" disabled="disabled" style="display: none;">Orthopedics</option><option value="25" class="1" disabled="disabled" style="display: none;">Pathology</option><option value="26" class="1" disabled="disabled" style="display: none;">Pediatric Surgery</option><option value="27" class="1" disabled="disabled" style="display: none;">Pediatrics</option><option value="28" class="1" disabled="disabled" style="display: none;">Pharmacology</option><option value="29" class="1" disabled="disabled" style="display: none;">Physiology</option><option value="30" class="1" disabled="disabled" style="display: none;">Plastic Surgery</option><option value="31" class="1" disabled="disabled" style="display: none;">Psychiatry</option><option value="32" class="1" disabled="disabled" style="display: none;">Radiology</option><option value="34" class="1" disabled="disabled" style="display: none;">TB&amp;CD</option><option value="33" class="1" disabled="disabled" style="display: none;">Urology</option>			</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="unit" class="control-label">Unit</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="unit" name="unit" disabled="">
                                <option value="">Unit</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="area" class="control-label">Area</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="area" name="area" disabled="">
                                <option value="">Area</option>
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
                                <option value="1">Bac si</option><option value="2">def</option>			</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="staff_category" class="control-label">Staff Category</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="staff_category" name="staff_category">
                                <option value="">Staff Category</option>
                                <option value="1">abc</option>			</select>
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
                        <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Submit</button>
                    </div>
                </form>
    </div>
@endsection