@extends('master')
@section('content')

<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="source/images/web-logo.png" class="w-75" alt="Logo"> </span><br/>
                        <span class="logo_title mt-5"> Đăng nhập </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->

        </div>
        <div class="card-body">
            <form action="{{route('dangnhap')}}" method="post">
                @csrf
                @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                @endif
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection