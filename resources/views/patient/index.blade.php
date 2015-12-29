@extends('patient.layout')

@section('content')

    <div id="page-wrapper">
        <script type="text/javascript" charset="utf-8">
            $( window ).load(function() {

                $('.confirmDelete').click(function(){
                    return confirm("Are you sure you want to delete?");
                })

                $("#patient_table").dataTable({
                    "pageLength": 50
                });
            });
        </script>

        <br>
        <a title="Thêm bệnh nhân" href="/patient/add" class="btn btn-primary square-btn-adjust"> Thêm bệnh nhân </a>


        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                        <div class="panel-body"> <p></p>
                            <div class="table-responsive">
                                <div id="patient_table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="patient_table_length"><label><select name="patient_table_length" aria-controls="patient_table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-6"><div id="patient_table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="patient_table"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable no-footer" id="patient_table" aria-describedby="patient_table_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id: activate to sort column ascending" style="width: 49px;">Id</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 117px;">Name</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Display Name: activate to sort column ascending" style="width: 50px;">Display Name</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 95px;">Phone Number</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Reference By: activate to sort column ascending" style="width: 68px;">Reference By</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Visit: activate to sort column ascending" style="width: 42px;">Visit</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Follow Up: activate to sort column ascending" style="width: 123px;">Follow Up</th><th class="sorting" tabindex="0" aria-controls="patient_table" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 55px;">Delete</th></tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="patient_table_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="patient_table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="patient_table" tabindex="0" id="patient_table_previous"><a href="http://localhost/chikitsa/index.php/patient/index#">Previous</a></li><li class="paginate_button active" aria-controls="patient_table" tabindex="0"><a href="http://localhost/chikitsa/index.php/patient/index#">1</a></li><li class="paginate_button next disabled" aria-controls="patient_table" tabindex="0" id="patient_table_next"><a href="http://localhost/chikitsa/index.php/patient/index#">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>

    </div>

@endsection