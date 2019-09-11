@extends('client.layouts.master')
@section('title', 'Home')
@section('content')
@include('client.layouts.search-slide')
<div class="container">
    <div class="row justify-conten-between">
        <div class="col">
            <h3>News Job</h3>
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                                nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                                nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                                Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                                nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection