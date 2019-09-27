@extends('client.layouts.test')
@section('title', 'profile')
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
@section('script')
    @include('client.layouts.success')
@stop
@endsection
