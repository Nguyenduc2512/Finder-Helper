@extends('client.layouts.master')
@section('title', 'Đổi mật khẩu')
@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>@lang('messages.changePassword')</h3>
                </div>
                @if (session('errmsg'))
                    <p class="text-danger"> {{session('errmsg')}} </p>
                @endif
                <form action="{{ route('user.save-password') }}" method="post" style="margin-left: 3%">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    @endif
                    <div class="form-group">
                        <span class="pf-title">@lang('messages.oldPassword')</span>
                        <input type="password" name="password" class="form-control"
                               placeholder="@lang('messages.oldPassword')">
                        @if($errors->first('password'))
                            <span class="text-danger"> {{$errors->first('password')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">@lang('messages.newPassword')</span>
                        <input type="password" name="newpassword" class="form-control"
                               placeholder="@lang('messages.newPassword')">
                        @if($errors->first('newpassword'))
                            <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">@lang('messages.rePassword')</span>
                        <input type="password" name="repassword" class="form-control"
                               placeholder="@lang('messages.rePassword')">
                        @if($errors->first('repassword'))
                            <span class="text-danger"> {{$errors->first('repassword')}} </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-xs">
                        @lang('messages.update')
                    </button>
                </form>

            </div>
        </div>
    </div>
@section('script')
    @include('client.layouts.success')
@stop
@endsection
