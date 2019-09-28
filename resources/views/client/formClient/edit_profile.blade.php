@extends('client.layouts.test')
@section('title', 'Chỉnh sửa thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-lg-9 column" id="my-profile">
                <div class="profile-title">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <form action="{{ route('user.update-profile') }}" method="post" enctype="multipart/form-data"
                        style="margin-left: 3%">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset(Auth::user()->avatar) }}"
                                 id="avatar-profile" class="img-responsive">
                            @if($errors->first('avatar'))
                                <span class="text-danger"> {{$errors->first('avatar')}} </span>
                            @endif
                        </div>
                        <div class="form-group col-4" id="form-profile">
                            <input type="file" name="avatar" id="my-profile" class="btn btn-outline-info">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9" style="margin-top : 5%;">
                            <div class="form-group">
                                <span class="pf-title">Họ Và Tên</span>
                                    <input type="text" name="name" class="form-control"
                                           value="{{ Auth::user()->name }}" rows="10">
                                @if($errors->first('name'))
                                    <span class="text-danger"> {{$errors->first('name')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Email</span>
                                <input type="text" name="email" class="form-control"
                                       value="{{ Auth::user()->email }}">
                                @if($errors->first('email'))
                                    <span class="text-danger"> {{$errors->first('email')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Số điện thoại</span>
                                <input type="number" name="phone" class="form-control"
                                       value="{{ Auth::user()->phone }}" id="phone">
                                <span id="err" class="text-danger"></span>
                                @if($errors->first('phone'))
                                    <span class="text-danger"> {{$errors->first('phone')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Ngày sinh</span>
                                <input type="date" name="date_of_birth" class="form-control"
                                       value="{{ Auth::user()->date_of_birth }}">
                                @if($errors->first('date_of_birth'))
                                    <span class="text-danger"> {{$errors->first('date_of_birth')}} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <span class="pf-title">Giới Tính</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_male'] )
                                           Checked
                                           @endif
                                           value="1" id="inlineRadio1">
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_female'] )
                                           Checked
                                           @endif
                                           value="2" id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                           @if (Auth::user()->gender == $gender['gender_type_other'])
                                           Checked
                                           @endif
                                           value="3" id="inlineRadio3">
                                    <label class="form-check-label" for="inlineRadio3">Khác</label>
                                </div>
                                @if($errors->first('gender'))
                                    <span class="text-danger"> {{$errors->first('gender')}} </span>
                                @endif
                            </div>
                            <div class="form-control">
                                <button type="submit" class="btn btn-outline-success btn-xs">
                                    @lang('messages.update')
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('script')
    @include('client.layouts.js')
@stop
@endsection
