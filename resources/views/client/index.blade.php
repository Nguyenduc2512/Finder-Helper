@extends('client.layouts.master')
@section('title', 'Home')
@section('content')
@include('client.layouts.search-slide')
<div class="container">
    <div class="row justify-conten-between">
        <div class="col-6">
            <h3>Need You</h3>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 500px; overflow-y: scroll">
                @foreach($posts as $po)
                    <div class="job-post-item p-4 d-block d-md-flex align-items-center">
                        @foreach($users as $us)
                            @if($us->id == $po->user_id)
                                <div class="mb-4 mb-md-0 mr-5">
                                    <img src="{{ $us->avatar }}" alt="" style="width: 70px;">
                                </div>
                            @endif
                        @endforeach
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">{{$po->title}}</h2>
                            </div>
                            @foreach($categories as $ca)
                                @if($ca->id == $po->category_id)
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3">
                                            <span class="fl-bigmug-line-portfolio23"></span>
                                            <span> Mô tả : {{$ca->name}} </span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="job-post-item-body d-block d-md-flex">
                                <div>
                                    <span class="fl-bigmug-line-big104"></span>
                                    <span> Địa Chỉ : {{$po->address}}</span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-5">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> Price : {{$po->price}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a href="{{route('user.post-detail')}}" class="btn btn-danger py-2">Apply Job</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-6">
            <h3>News Job</h3>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 500px; overflow-y: scroll">
                @foreach($newPosts as $npo)
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    @foreach($users as $us)
                        @if($us->id == $npo->user_id)
                            <div class="mb-4 mb-md-0 mr-5">
                                <img src="{{ $us->avatar }}" alt="" style="width: 70px;">
                            </div>
                        @endif
                    @endforeach
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h4 class="mr-3 text-black h4">{{$npo->title}}</h4>
                        </div>
                        @foreach($categories as $ca)
                            @if($ca->id == $npo->category_id)
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3">
                                        <span class="fl-bigmug-line-portfolio23"></span>
                                        <span> Mô tả : {{$ca->name}} </span>
                                    </div>
                                </div>
                                @endif
                        @endforeach
                        <div class="job-post-item-body d-block d-md-flex">
                            <div>
                                <span class="fl-bigmug-line-big104"></span>
                                <span>Địa chỉ : {{$npo->address}}</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-5">
                                <span class="fl-bigmug-line-portfolio23"></span>
                                <span>Price :{{$npo->price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('user.post-detail')}}" class="btn btn-danger py-2">Apply Job</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<br>
@endsection
