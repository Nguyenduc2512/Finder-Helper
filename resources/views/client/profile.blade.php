@extends('client.layouts.master')
@section('title', 'profile')
@section('content')
<br>
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
                        <span>Name : {{ Auth::user()->name }}</span><br><br>
                        <span>Email : {{ Auth::user()->email }}</span><br><br>
                        <span>Phone Number : {{ Auth::user()->phone }}</span><br><br>
                        <span>Card Number : {{ Auth::user()->identification_code }}</span><br><br>
                        <span>Date of birth : {{ Auth::user()->date_of_birth }}</span><br><br>
                        <span>Coin : {{ Auth::user()->coin }}</span><br><br>
                        <span>Gender :
                            @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                Male
                            @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                Female
                            @else
                                Other
                            @endif
                        </span>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('user.edit-profile')}}" class="btn btn-danger">Edit</a>
                            </div>
                            @if($rule == Auth::user()->rules)
                                <div class="col-4"><a href="{{route('all-post')}}"><button class="btn btn-primary"> Find job </button> </a></div>
                                <div class="col-4"><button class="btn btn-dark">@lang('messages.addCoin')</button></div>
                            @else
                                <div class="col-4"><a href="{{route('user.post-create')}}"><button class="btn btn-primary"> Post job </button> </a></div>
                                <div class="col-4"><a href="{{ route('user.coin') }}" ><button class="btn btn-dark">@lang('messages.addCoin')</button></a></div>
                            @endif
                        </div><br>
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
    @stop
@endsection
