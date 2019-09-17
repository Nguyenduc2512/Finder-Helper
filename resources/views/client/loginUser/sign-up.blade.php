@extends('layouts.login')
@section('title', 'sign-up')
@section('content')
<div class="center-sign">

    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign Up</h2>
        </div>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}<br>
            @endforeach
        </div>
        @endif
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label>Tên hiển thị *</label>
                    <div class="input-group">
                    <input name="name" type="text" class="form-control form-control-lg"  value="{{old('name')}}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Email *</label>
                    <div class="input-group">
                    <input name="email" type="text" class="form-control form-control-lg" value="{{old('email')}}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Password *</label>
                    <div class="input-group">
                        <input name="password" type="password" class="form-control form-control-lg" />
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">Nhập lại password *</label>
                    </div>
                    <div class="input-group">
                        <input name="pwd" type="password" class="form-control form-control-lg" />
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">Số CMND/CCCD</label>
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
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt trước CMT/CCCD</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">
                        <div class="form-check p-2">
                            <input type="file" name="identification">
                        </div>

                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt sau CMT/CCCD</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">

                        <div class="form-check p-2">
                            <input type="file" name="identification_back">
                        </div>

                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Giới Tính</label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="form-check p-2">
                            <input class="form-check-input" type="radio" name="gender"  value="1">
                            <label class="form-check-label" for="exampleRadios2">
                                MALE
                            </label>
                        </div>
                        <div class="form-check p-2">
                            <input class="form-check-input " type="radio" name="gender"  value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                FEMALE
                            </label>
                        </div>
                        <div class="form-check p-2">
                            <input class="form-check-input " type="radio" name="gender"  value="3">
                            <label class="form-check-label" for="exampleRadios2">
                                OTHER
                            </label>

                        </div>

                    </div>
                </div>
                    <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Bạn Là:</label>
                    </div>
                    <div class="d-flex justify-content-around">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rules" value="1">
                            <label class="form-check-label" for="exampleRadios2">
                                Hepler
                            </label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input " type="radio" name="rules" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                Finder
                            </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Hepler
                        </label>
                    </div>

                    <div class="form-check ">
                        <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Finder
                        </label>

                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-8">
                        <div class="checkbox-custom checkbox-default">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe">I agree withs term of use</label>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary mt-2">Sign Up</button>


                    </div>
                </div>

                <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                    <span>or</span>
                </span>

                <div class="mb-1 text-center">
                    <a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-google mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-google"></i></a>
                </div>

                <p class="text-center">Don't have an account yet? <a href="sign_in.html">Sign In!</a></p>

            </form>
        </div>
    </div>


</div>
@endsection
