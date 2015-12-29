@extends('staff.layout')

@section('content')
    <br>
    <center><h3>Thêm danh mục</h3></center>
    <br>
    <form action="/health4all/staff/add/staff_category" method="post" accept-charset="utf-8" class="form-horizontal" role="form" id="add_staff_category">
        <div class="form-group">
            <div class="col-md-3">
                <label for="first_name" class="control-label">Danh mục</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Staff Category" id="staff_category" name="staff_category" required />
            </div>
        </div>

        <div class="form-group col-md-9">
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Ghi nhận</button>
        </div>
    </form>
@endsection