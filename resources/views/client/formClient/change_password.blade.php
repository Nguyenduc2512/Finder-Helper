@extends('client.layouts.master')
@section('title', 'Change password')
@section('content')
    <div class="container" style="margin-top: 3%">
        <div class="row">
            <div class="col-md-4">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>@lang('messages.changePassword')</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                @if (session('errmsg'))
                                    <p class="text-danger"> {{session('errmsg')}} </p>
                                @endif
                                <form action="{{ route('user.save-password') }}" method="post">
                                    @csrf
                                    @if (isset(Auth::user()->id))
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    @endif
                                    <div class="form-group">
                                        <span>@lang('messages.oldPassword')</span><span class="text-danger">*</span>
                                        <input type="password" name="password" class="form-control" placeholder="@lang('messages.oldPassword')">
                                            @if($errors->first('password'))
                                                <span class="text-danger"> {{$errors->first('password')}} </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <span>@lang('messages.newPassword')</span><span class="text-danger">*</span>
                                        <input type="password" name="newpassword" class="form-control" placeholder="@lang('messages.newPassword')" >
                                            @if($errors->first('newpassword'))
                                                <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <span>@lang('messages.rePassword')</span><span class="text-danger">*</span>
                                        <input type="password" name="repassword" class="form-control" placeholder="@lang('messages.rePassword')">
                                            @if($errors->first('repassword'))
                                                <span class="text-danger"> {{$errors->first('repassword')}} </span>
                                            @endif
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" style="margin-left: 83%">
                                        @lang('messages.update')
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
