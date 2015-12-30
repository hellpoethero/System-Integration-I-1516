@extends('dicom.layout')

@section('content')

    <div id="page-inner">
        <div class="row">
            <h3><center>Danh sách DICOM</center></h3>
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <th><center>ID</center></th>
                                <th><center>Thời gian</center></th>
                            </thead>
                            <tbody>
                            <?php foreach($data as $d) {
                                echo '<tr>';
                                echo '<td><center>',$d->{'id'},'</center></td>';
                                echo '<td><center><a href="../../dicom/', $d->{'id'},'">',$d->{'created_at'},'</a></center></td>';
                                echo '</tr>';
                            }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var data = JSON.parse('<?php echo json_encode($data)?>');
        //document.write(data[0]['url']);
    </script>

@endsection