@extends('layouts.home')

@section('title', 'Đăng nhập')

@section('content')
    <div class="container" style="width:330px;">
        <form action="/auth/login" method="post" accept-charset="utf-8" class="form-signin" role="form" id="form">
            {!! csrf_field() !!}
            <h2 class="form-signin-heading" align="center">Tài khoản</h2>
            <input type="email" class="form-control" name="email" id="email" required autofocus><br />
            <input type="password" class="form-control" name="password" id="password" required><br />
            <div> <input type="checkbox" name="remember"> Ghi nhớ </div> <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button><br>
            <div align="center"><a href="/auth/register">Đăng ký</a></div>
        </form>
    </div>
@endsection