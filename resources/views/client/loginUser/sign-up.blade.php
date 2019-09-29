@extends('client.layouts.login')
@section('title', 'sign-up')
@section('content')
<div class="center-sign">
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up</h2>
        </div>
        <div class="card-body">
            <form action="{{route('sign')}}" method="post" enctype="multipart/form-data" novalidate >
                @csrf
                <div class="form-group mb-3">
                    <label>Tên hiển thị</label>
                    <label class="text-danger">(*)</label>
                    <div class="input-group">
                    <input name="name" type="text" class="form-control form-control-lg"  value="{{old('name')}}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                    @if($errors->first('name'))
                        <span class="text-danger"> {{$errors->first('name')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <label class="text-danger">(*)</label>
                    <div class="input-group">
                    <input name="email" type="text" class="form-control form-control-lg" value="{{old('email')}}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                    @if($errors->first('email'))
                        <span class="text-danger"> {{$errors->first('email')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label>Mật khẩu</label>
                    <label class="text-danger">(*)</label>
                    <div class="input-group">
                        <input name="password" type="password" class="form-control form-control-lg" value="{{old('password')}}" />
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                    @if($errors->first('password'))
                        <span class="text-danger"> {{$errors->first('password')}} </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">Nhập lại password</label>
                        <label class="text-danger">(*)</label>
                    </div>
                    <div class="input-group">
                        <input name="pwd" type="password" class="form-control form-control-lg" value="{{old('pwd')}}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                    @if($errors->first('pwd'))
                        <span class="text-danger"> {{$errors->first('pwd')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">Số CMND/CCCD</label>
                        <label class="text-danger">(*)</label>
                    </div>
                    <div class="input-group">
                    <input name="identification_code" type="text" class="form-control form-control-lg" value="{{old('identification_code')}}" />
                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="d-flex justify-content-between6 ">
                        <div class="form-check p-2"  id="form-profile">
                            <input type="hidden" name="avatar" value="images/user/avatar-default-icon.png" >
                        </div>
                    </div>
                    @if($errors->first('identification_code'))
                        <span class="text-danger"> {{$errors->first('identification_code')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt trước CMT/CCCD</label>
                        <label class="text-danger">(*)</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">
                        <div class="form-check p-2">
                            <input type="file" name="identification" value="{{old('identification')}}">
                        </div>
                    </div>
                    @if($errors->first('identification'))
                        <span class="text-danger"> {{$errors->first('identification')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt sau CMT/CCCD</label>
                        <label class="text-danger">(*)</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">
                        <div class="form-check p-2">
                            <input type="file" name="identification_back" value="{{old('identification_back')}}">
                        </div>
                    </div>
                    @if($errors->first('identification_back'))
                        <span class="text-danger"> {{$errors->first('identification_back')}} </span>
                    @endif
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Giới Tính</label>
                        <label class="text-danger">(*)</label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="form-check p-2">
                            <input class="form-check-input" type="radio" name="gender"  value="1">
                            <label class="form-check-label" for="exampleRadios2">
                                Nam
                            </label>
                        </div>
                        <div class="form-check p-2">
                            <input class="form-check-input " type="radio" name="gender"  value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                Nữ
                            </label>
                        </div>
                        <div class="form-check p-2">
                            <input class="form-check-input " type="radio" name="gender"  value="3">
                            <label class="form-check-label" for="exampleRadios2">
                                Khác
                            </label>
                        </div>
                    </div>
                    @if($errors->first('gender'))
                        <span class="text-danger"> {{$errors->first('gender')}} </span>
                    @endif
                </div>
                    <div class="form-group mb-3 ">
                        <div class="clearfix">
                            <label class="float-left">Bạn Là:</label>
                            <label class="text-danger">(*)</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rules" value="1">
                            <label class="form-check-label" for="exampleRadios2">
                                Người giúp
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input " type="radio" name="rules" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                Người thuê
                            </label>
                        </div>
                     </div>
                    @if($errors->first('rules'))
                        <span class="text-danger"> {{$errors->first('rules')}} </span>
                    @endif
                <br>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="checkbox-custom checkbox-default">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe">Tôi đồng ý với các điều khoản sử dụng</label>
                            </div>
                            @if($errors->first('rememberme'))
                                <span class="text-danger"> {{$errors->first('rememberme')}} </span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary mt-2">Đăng ký</button>


                    </div>
                </div>

                <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                    <span>Hoặc</span>
                </span>

                <div class="mb-1 text-center">
                    <a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Đăng nhập <i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-google mb-3 ml-1 mr-1" href="#">Đăng nhập <i class="fab fa-google"></i></a>
                </div>

                <p class="text-center">Bạn đã có tài khoản<a href="{{route('login')}}">Đăng nhập</a></p>

            </form>
        </div>
    </div>


</div>
@endsection
