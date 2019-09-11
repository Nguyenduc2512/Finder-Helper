@extends('layouts.master')
@section('title', 'profile')
@section('content')
@include('layouts.search-slide')
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#rented">Rented</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#added">Added coid and payment</a>
        </li>
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
                                Nữ
                            @else
                                Khác
                            @endif
                        </span>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('user.edit-profile')}}" class="btn btn-danger">Edit</a>
                            </div>
                            <div class="col-4"><a href="{{route('post-create')}}"><button class="btn btn-primary"> Post job </button> </a></div>
                            <div class="col-4"><button class="btn btn-dark">Add coid</button></div>
                            <div>
                                @if (session('errmsg'))
                                    <p class="text-danger"> {{session('errmsg')}} </p>
                                @endif
                            </div>
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
        <div id="rented" class="container tab-pane"><br>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Clean House</h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3">
                                <span class="fl-bigmug-line-portfolio23">
                                    <a href="">See More</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Clean House</h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                            </div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Clean House</h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                            </div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Clean House</h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                            </div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="added" class="container tab-pane"><br>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4"></h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                            </div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                    Inc.</a></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                            <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                            </div>
                        </div>
                        <div class="" job-post-item-body>
                            <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
