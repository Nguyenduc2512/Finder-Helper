@extends('client.layouts.login')
@section('content')
    <div class="center-sign">

        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><a href="{{route('home')}}">Finder-Helper</a></h2>
            </div>

            <div class="card-body">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <span class="text-danger">(*)</span>
                        <div class="input-group">
                            <input name="email" type="text" class="form-control form-control-lg"/>
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    @if (session('errmsg'))
                        <p class="text-danger"> {{session('errmsg')}} </p>
                    @endif

                    @if($errors->first('email'))
                        <span class="text-danger"> {{$errors->first('email')}} </span>
                    @endif

                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left">@lang('messages.password') *</label>
                        </div>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control form-control-lg"/>
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    @if($errors->first('password'))
                        <span class="text-danger"> {{$errors->first('password')}} </span>
                    @endif

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe" class="card-link">@lang('messages.savePassword')</label>

                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary mt-2">@lang('messages.login')</button>
                            <a href="{{route('password.request')}}" style="color: #999" class="float-right">@lang('messages.forgotPassword')</a>

                        </div>
                    </div>

                    <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                    <div class="mb-1 text-center">
                        <a class="btn btn-facebook mb-3 ml-1 mr-1" href="{{ url('/auth/redirect/facebook') }}">@lang('messages.login') <i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-google mb-3 ml-1 mr-1" href="#">@lang('messages.login') <i class="fab fa-google"></i></a>
                    </div>

                    <p class="text-center">Bạn đã có tài khoản <a href="index.html">@lang('messages.login')</a></p>

                </form>
            </div>
        </div>

    </div>
@endsection
