@extends('layouts.master')
@section('title', 'listapply')
@section('content')
    @include('layouts.search-slide')
    <div class="container content">
        <div class="row justify-content-between">
            <div class="col-6 item-header">
                <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black h4">Clean House</h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Nguyen Phong Sac</a>
                    </div>
                    <div><span class="fl-bigmug-line-big104"></span> <span>Cau Giay - Ha Noi</span></div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-light text-white badge py-2 px-4">
                    <a href="">See more</a>
                </div>
            </div>
            <div class="item-content">
                <span>Name : Nguyen Minh Duc</span><br>
                <span>Date : 25/12/2019</span><br>
                <span>Number : 2</span><br>
                <span>Detail : abc abc</span><br>
            </div>
        </div>
        <div class="row">
            <div class="col-6 item-header">Price : 200000d</div>
            <div class="col-3 text-right">Time : 2h</div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                        </div>
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">Nguyen Minh Duc</h2>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                        Inc.</a></div>
                                <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a href="job-single.html" class="btn btn-primary py-2">Accpect</a>
                            <a href="job-single.html" class="btn btn-danger py-2">Decline</a>
                        </div>
                    </div>
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                        </div>
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">Nguyen Minh Duc</h2>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                        Inc.</a></div>
                                <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a href="job-single.html" class="btn btn-primary py-2">Accpect</a>
                            <a href="job-single.html" class="btn btn-danger py-2">Decline</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 fillter job-post-item bg-white">
                <h3>Fillter</h3>
                <div class="form-group">
                    <label for="inputState">Sex :</label>
                    <select id="inputState" class="form-control">
                        <option selected>Male</option>
                        <option>Female</option>
                    </select>
                    <label for="inputState">Old :</label>
                    <select id="inputState" class="form-control">
                    </select>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                        </div>
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">Nguyen Minh Duc</h2>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                        Inc.</a></div>
                                <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a href="job-single.html" class="btn btn-primary py-2">Accpect</a>
                            <a href="job-single.html" class="btn btn-danger py-2">Decline</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
@endsection