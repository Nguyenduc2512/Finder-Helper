@extends('layouts.master')
@section('title', 'Change password')
@section('content')
    <div class="container" style="padding: 5%">
        <div class="row">
            <div class="col-6" style="margin-left: 30%">
                <h4>Đổi mật khẩu</h4><hr>
                @if (session('errmsg'))
                    <p class="text-danger"> {{session('errmsg')}} </p>
                @endif
                <form action="{{ route('user.save-password') }}" method="post">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    @endif
                    <div class="form-group">
                        <span>Mật khẩu cũ</span><span class="text-danger">*</span>
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu cũ">
                        @if($errors->first('password'))
                            <span class="text-danger"> {{$errors->first('password')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span>Mật khẩu mới</span><span class="text-danger">*</span>
                        <input type="password" name="newpassword" class="form-control" placeholder="Mật khẩu mới" >
                        @if($errors->first('newpassword'))
                            <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span>Nhập lại mật khẩu mới</span><span class="text-danger">*</span>
                        <input type="password" name="repassword" class="form-control" placeholder="Nhập mật khẩu mới">
                        @if($errors->first('repassword'))
                            <span class="text-danger"> {{$errors->first('repassword')}} </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-danger">Lưu</button>
                    <a href="{{ route('profile')}}" class="btn btn-info">Hủy</a>
                </form>
               
            </div>
        </div>
    </div>

@endsection