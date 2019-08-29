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
                        <span>Name : Nguyen Minh Duc</span><br><br>
                        <span>Address : 105 - Nguyen Duc Canh - Hoang Mai - Ha Noi</span><br><br>
                        <span>Phone Number : 01234345323</span><br><br>
                        <span>Card Number : 0382234215</span><br><br>
                        <div class="row">
                            <div class="col-4"> <button class="btn btn-danger">Edit</button></div>
                            <div class="col-4"><button class="btn btn-primary">Post Job</button></div>
                            <div class="col-4"><button class="btn btn-dark">Add coid</button></div>
                        </div><br>
                        <hr>
                    </div>
                    <div class="col-5">
                        <div class="col-1"><img src="{{asset('img/avatar-default-icon.png')}}" class="avatarProfile" width="200"><br></div>
                        <div class="row">
                            <div class="col-6"><img src="{{asset('img/avatar-default-icon.png')}}" alt="" class="card" width="100"></div>
                            <div class="col-6"><img src="{{asset('img/avatar-default-icon.png')}}" alt="" class="card" width="100"></div>
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