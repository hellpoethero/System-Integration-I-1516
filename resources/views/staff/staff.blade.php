@extends('staff.layout')

@section('content')
    <br>
    <a title="Thêm nhân viên" href="/staff/add" class="btn btn-primary square-btn-adjust"> Thêm nhân viên </a>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/theme.default.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('js/jquery.tablesorter.widgets.min.js') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('js/jquery.tablesorter.min.js') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('js/jquery.tablesorter.colsel.js') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('js/jquery.tablesorter.print.js') !!}">

    <script type="text/javascript">
        $(function(){
            var options = {
                widthFixed : true,
                showProcessing: true,
                headerTemplate : '{content} {icon}', // Add icon for jui theme; new in v2.7!

                widgets: [ 'default', 'zebra', 'print', 'stickyHeaders','filter'],

                widgetOptions: {

                    print_title      : 'table',          // this option > caption > table id > "table"
                    print_dataAttrib : 'data-name', // header attrib containing modified header name
                    print_rows       : 'f',         // (a)ll, (v)isible or (f)iltered
                    print_columns    : 's',         // (a)ll, (v)isible or (s)elected (columnSelector widget)
                    print_extraCSS   : '.table{border:1px solid #ccc;} tr,td{background:white}',          // add any extra css definitions for the popup window here
                    print_styleSheet : '', // add the url of your print stylesheet
                    // callback executed when processing completes - default setting is null
                    print_callback   : function(config, $table, printStyle){
                        // do something to the $table (jQuery object of table wrapped in a div)
                        // or add to the printStyle string, then...
                        // print the table using the following code
                        $.tablesorter.printTable.printOutput( config, $table.html(), printStyle );
                    },
                    // extra class name added to the sticky header row
                    stickyHeaders : '',
                    // number or jquery selector targeting the position:fixed element
                    stickyHeaders_offset : 0,
                    // added to table ID, if it exists
                    stickyHeaders_cloneId : '-sticky',
                    // trigger "resize" event on headers
                    stickyHeaders_addResizeEvent : true,
                    // if false and a caption exist, it won't be included in the sticky header
                    stickyHeaders_includeCaption : false,
                    // The zIndex of the stickyHeaders, allows the user to adjust this to their needs
                    stickyHeaders_zIndex : 2,
                    // jQuery selector or object to attach sticky header to
                    stickyHeaders_attachTo : null,
                    // scroll table top into view after filtering
                    stickyHeaders_filteredToTop: true,

                    // adding zebra striping, using content and default styles - the ui css removes the background from default
                    // even and odd class names included for this demo to allow switching themes
                    zebra   : ["ui-widget-content even", "ui-state-default odd"],
                    // use uitheme widget to apply defauly jquery ui (jui) class names
                    // see the uitheme demo for more details on how to change the class names
                    uitheme : 'jui'
                }
            };
            $("#table-sort").tablesorter(options);
            $('.print').click(function(){
                $('#table-sort').trigger('printTable');
            });
        });
    </script>

    <div>
        <h3 class="col-md-12" align="center">Danh sách nhân viên</h3>
        <table class="table table-bordered table-striped tablesorter tablesorter-default hasFilters hasStickyHeaders" id="table-sort" role="grid"><colgroup><col style="width: 7%;"><col style="width: 27.7%;"><col style="width: 14.9%;"><col style="width: 19%;"><col style="width: 10.2%;"><col style="width: 9.2%;"></colgroup>
            <thead>
            <tr class="tablesorter-headerRow" role="row"><th style="text-align: center; -webkit-user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="S.no : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">S.no <i class="tablesorter-icon"></i></div></th>
                <th style="text-align: center; -webkit-user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="Department : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Department <i class="tablesorter-icon"></i></div></th>
                <th style="text-align: center; -webkit-user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="Designation : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Designation <i class="tablesorter-icon"></i></div></th>
                <th style="text-align: center; -webkit-user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="Name : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Name <i class="tablesorter-icon"></i></div></th>
                <th style="text-align: center; -webkit-user-select: none;" data-column="4" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="Gender : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Gender <i class="tablesorter-icon"></i></div></th>
                <th style="text-align: center; -webkit-user-select: none;" data-column="5" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="table-sort" unselectable="on" aria-sort="none" aria-label="Phone : No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Phone <i class="tablesorter-icon"></i></div></th>

            </tr>
            <tr class="tablesorter-filter-row">
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="0" data-lastsearchtime="1451391482483"></td>
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="1" data-lastsearchtime="1451391482483"></td>
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="2" data-lastsearchtime="1451391482483"></td>
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="3" data-lastsearchtime="1451391482483"></td>
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="4" data-lastsearchtime="1451391482483"></td>
                <td><input type="search" placeholder="" class="tablesorter-filter" data-column="5" data-lastsearchtime="1451391482483"></td>
            </tr>
            </thead>
            <tbody aria-live="polite" aria-relevant="all">
            </tbody>
        </table>

        {{--<table class="table table-bordered table-striped" id="table-sort">--}}
            {{--<thead>--}}
            {{--<th style="text-align:center">S.no</th>--}}
            {{--<th style="text-align:center">Department</th>--}}
            {{--<th style="text-align:center">Designation</th>--}}
            {{--<th style="text-align:center">Name</th>--}}
            {{--<th style="text-align:center">Gender</th>--}}
            {{--<th style="text-align:center">Phone</th>--}}
            {{--</thead>--}}
            {{--<tbody>--}}

            {{--</tbody>--}}
        {{--</table>--}}

    </div>

@endsection