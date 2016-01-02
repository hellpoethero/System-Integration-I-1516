@extends('staff.layout')

@section('content')
    <br>
    <a title="Thêm danh mục" href="/staff/category/add" class="btn btn-primary square-btn-adjust"> Thêm danh mục </a>

    <h3 class="col-md-12" align="center">Danh sách vị trí</h3>
    <table class="table table-bordered table-striped tablesorter tablesorter-default hasFilters hasStickyHeaders" id="table-sort">
        <thead>
        <tr class="tablesorter-headerRow" role="row">
            <th style="text-align: center;">S.no</th>
            <th style="text-align: center;">Vị trí</th>
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
            for (i=0; i< data['staff_category'].length; i++) {
                var row = tBody.insertRow(i);
                var no = row.insertCell(0);
                var staffcategory = row.insertCell(1);
                no.setAttribute('align', 'center');
                no.innerHTML = data['staff_category'][i]['staff_category_id'];
                staffcategory.innerHTML = data['staff_category'][i]['staff_category'];
            }
        });
    </script>
@endsection