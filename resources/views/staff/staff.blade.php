@extends('staff.layout')

@section('content')

    <br>
    <a title="Thêm nhân viên" href="/staff/add" class="btn btn-primary square-btn-adjust"> Thêm nhân viên </a>

    <h3 class="col-md-12" align="center">Danh sách nhân viên</h3>
    <table class="table table-bordered table-striped tablesorter tablesorter-default hasFilters hasStickyHeaders" id="table-sort">
        <thead>
        <tr class="tablesorter-headerRow" role="row">
            <th style="text-align: center;">S.no</th>
            <th style="text-align: center;">Department</th>
            <th style="text-align: center;">Designation</th>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Gender</th>
            <th style="text-align: center;">Phone</th>
        </tr>
        </thead>
        <tbody aria-live="polite" aria-relevant="all" id="myTBody">
        </tbody>
    </table>

    </div>

    <script>
        var tBody = document.getElementById("myTBody");
        var url = "http://localhost/health4all/getData";

        $.getJSON(url, function(data) {
            var i;
            for (i=0; i< data['staff'].length; i++) {
                var row = tBody.insertRow(i);
                var no = row.insertCell(0);
                var department = row.insertCell(1);
                var designation = row.insertCell(2);
                var name = row.insertCell(3);
                var gender = row.insertCell(4);
                var phone = row.insertCell(5);
                no.innerHTML = data['staff'][i]['staff_id'];
                department.innerHTML = data['staff'][i]['department'];
                designation.innerHTML = data['staff'][i]['designation'];
                name.innerHTML = data['staff'][i]['last_name'];
                gender.innerHTML = data['staff'][i]['gender'];
                phone.innerHTML = data['staff'][i]['phone'];
            }
        });
    </script>
@endsection