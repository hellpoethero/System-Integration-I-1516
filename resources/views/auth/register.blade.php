{{--<!-- resources/views/auth/register.blade.php -->--}}

{{--<form method="POST" action="/auth/register">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div>--}}
        {{--Name--}}
        {{--<input type="text" name="name" value="{{ old('name') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Email--}}
        {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Password--}}
        {{--<input type="password" name="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--Confirm Password--}}
        {{--<input type="password" name="password_confirmation">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit">Register</button>--}}
    {{--</div>--}}
{{--</form>--}}

@extends('layouts.home')

@section('title', 'Đăng nhập')

@section('content')
    <div class="container" style="width:330px;">
        <form action="/auth/register" method="post" accept-charset="utf-8" class="form-signin" role="form" id="form">
            {!! csrf_field() !!}
            <h2 class="form-signin-heading" align="center">Thông tin đăng ký</h2>
            <input type="text" class="form-control" placeholder="Tên" name="name" required autofocus><br>
            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required autofocus><br />
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password" required><br />
            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation"><br>
            <div> <input type="checkbox" name="remember"> Ghi nhớ </div><br>
            <div> <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng ký</div>
        </form>
    </div>
@endsection