@extends('patient.layout')

@section('content')

    <br>
    <a title="Thêm bệnh nhân" href="/patient/add" class="btn btn-primary square-btn-adjust"> Thêm bệnh nhân </a>

    <h3 class="col-md-12" align="center">Danh sách bệnh nhân</h3>
    <table class="table table-bordered table-striped tablesorter tablesorter-default hasFilters hasStickyHeaders" id="table-sort">
        <thead>
        <tr class="tablesorter-headerRow" role="row">
            <th style="text-align: center;">ID</th>
            <th style="text-align: center;">Họ tên</th>
            <th style="text-align: center;">Số điện thoại</th>
            <th style="text-align: center;">Phụ trách</th>
        </tr>
        </thead>
        <tbody aria-live="polite" aria-relevant="all" id="myTBody">
        </tbody>
    </table>

    </div>

    <script>
        var tBody = document.getElementById("myTBody");
        var url = "http://localhost/chikitsa/index.php/getData";

        $.getJSON(url, function(data) {
            var i;
            for (i=0; i< data.length; i++) {
                var row = tBody.insertRow(i);
                var id = row.insertCell(0);
                var name = row.insertCell(1);
                var phone = row.insertCell(2);
                var reference = row.insertCell(3);

                id.setAttribute('align', 'center');
                id.innerHTML = data[i]['display_id'];
                name.innerHTML = '<a href="patient/'+data[i]['patient_id']+'/dicom">'+data[i]['display_name']+'</a>';
                phone.innerHTML = data[i]['phone_number'];
                reference.innerHTML = data[i]['reference_by'];
            }
        });
    </script>
@endsection