@extends('client.layouts.test')
@section('title', 'Thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <aside class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </aside>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <div class="cand-single-user" style="margin-top: 10%">
                    <div class="can-detail-s">
                        <div class="cst"><img src="{{ asset(Auth::user()->avatar) }}" alt=""></div>
                        <img src="{{ asset('images/mpf1.jpg') }}" alt="" class="img-cmt">
                        <img src="{{ asset('images/mpf1.jpg') }}" alt="" class="img-cmnd">
                       <div style="margin-top: 15%">
                           <h3>{{ Auth::user()->name }}</h3>
                           <P>
                               Giới tính:
                               @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                   Nam
                               @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                   Nữ
                               @else
                                   Khác
                               @endif
                           </P>
                           <p>Tiền: <i class="fas fa-dollar-sign"></i>{{ Auth::user()->coin }}</p>
                           <span>Số điện thoại: {{ Auth::user()->phone }}</span>
                           <span>Email: {{ Auth::user()->email }}</span>
                           <span>Số CMND: {{ Auth::user()->identification_code}}</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding: 50px">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">@lang('messages.profile')</a>
            </li>
            @if($rule == Auth::user()->rules)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#history">@lang('messages.history')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#coin">@lang('messages.coin')</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#history">@lang('messages.post')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#coin">@lang('messages.coin')</a>
                </li>
            @endif
        </ul>
        <div class="tab-content">
            <div id="profile" class="container tab-pane active"><br>
                <div class="container">
                    <div class="row">
                        <div class="col-7">
                            <span>Tên : {{ Auth::user()->name }}</span><br><br>
                            <span>Email : {{ Auth::user()->email }}</span><br><br>
                            <span>Số điện thoại : {{ Auth::user()->phone }}</span><br><br>
                            <span>Số CMT/CCCD : {{ Auth::user()->identification_code }}</span><br><br>
                            <span>Ngày sinh : {{ Auth::user()->date_of_birth }}</span><br><br>
                            <span>Số dư khả dụng : {{ Auth::user()->coin }}</span><br><br>
                            <span>Giới tính :
                            @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                    Nam
                                @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                    Nữ
                                @else
                                    Khác
                                @endif
                        </span>
                            <br>
                            <div class="row justify-content-around" style="padding: 30px">
                                <div class="col-4">
                                    <a href="{{ route('user.edit-profile')}}" class="btn btn-danger">Sửa thông tin</a>
                                </div>
                                @if($rule == Auth::user()->rules)
                                    <div class="col-3"><a href="{{route('all-post')}}"><button class="btn btn-primary"> Tìm việc </button> </a></div>
                                    <div class="col-4"><button class="btn btn-dark">Tài khoản</button></div>
                                @else
                                    <div class="col-4"><a href="{{route('user.post-create')}}"><button class="btn btn-primary"> Đăng bài viết </button> </a></div>
                                    <div class="col-4"><a href="{{ route('user.coin') }}" ><button class="btn btn-dark">@lang('messages.addCoin')</button></a></div>
                                @endif
                            </div>
                            <br>
                            <hr>
                        </div>
                        <div class="col-5">
                            <div class="col-6" style="margin-left: 20%"><img src="{{ asset(Auth::user()->avatar) }}" class="avatarProfile" width="200"><br></div>
                            <div class="row">
                                <div class="col-6"><img src="{{ asset(Auth::user()->identification) }}" alt="" class="card" width="100"></div>
                                <div class="col-6"><img src="{{ asset(Auth::user()->identification_back) }}" alt="" class="card" width="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($rule == Auth::user()->rules)
                @include('client.userHelper.profile')
            @else
                @include('client.userFinder.profile')
            @endif
        </div>
    </div><br>

@section('script')
    <script>
        @if ( session('success') == true)
        swal({
            text: '{{ session('success') }}',
            icon: "success",
            button: true,
            dangerMode: true,
        });
        @endif
    </script>

    <script>
        $('.btn-remove').on('click', function(){
            swal({
                text: "Bạn có chắc chắn muốn xoá bài viết này ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = $(this).attr('linkurl');
                        swal("Bạn đã xóa thành công bài viết này!", {
                            icon: "success",
                        });
                    }  else {
                        swal("Hủy thành công!");
                    }
                });
        });
    </script>
    @include('client.layouts.success')
@stop
@endsection
