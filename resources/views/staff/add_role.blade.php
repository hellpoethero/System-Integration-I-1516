@extends('staff.layout')

@section('content')
    <br>
    <center><h3>Thêm vị trí</h3></center>
    <br>
    <form action="https://localhost/health4all/staff/add/staff_role" method="post" accept-charset="utf-8" class="form-horizontal" role="form" id="add_staff_role">
        <div class="form-group">
            <div class="col-md-3">
                <label for="first_name" class="control-label">Vị trí</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Staff Role" id="staff_role" name="staff_role" required />
            </div>
        </div>

        <div class="form-group col-md-9">
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Ghi nhận</button>
        </div>
    </form>
@endsection