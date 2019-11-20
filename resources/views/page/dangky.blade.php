@extends('master')
@section('content')

<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="source/images/web-logo.png" class="w-75" alt="Logo"> </span><br/>
                        <span class="logo_title mt-5"> Đăng Ký </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->

        </div>
        <div class="card-body">
            <form action="{{route('register')}}" method="post">
                @csrf
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($$errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="ten" class="form-control" placeholder="Tên">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="sodienthoai" class="form-control" placeholder="Số điện thoại">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password1" class="form-control" placeholder="Nhập lại Password">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value="Register" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection