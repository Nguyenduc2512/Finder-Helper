@extends('client.layouts.master')
@section('title', 'Home')
@section('content')
@include('client.layouts.search-slide')
<div class="container-fluid" style="padding: 100px">
    <div class="row justify-conten-between">
        <div class="col-6">
            <h3>Need You</h3>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 800px; overflow-y: scroll">
                @foreach($posts as $post)
                    <div class="job-post-item p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <img src="{{ $post->user->avatar }}" alt="" style="width: 70px;">
                        </div>
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">{{$post->title}}</h2>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> Mô tả : {{$post->category->name}} </span>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div>
                                    <span class="fl-bigmug-line-big104"></span>
                                    <span> Địa Chỉ : {{$post->address}}</span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-5">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> Price : {{$post->price}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a href="{{route('user.post-detail', ['id' => $post->id])}}" class="btn btn-danger py-2">Apply Job</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-6">
            <h3>News Job</h3>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 800px; overflow-y: scroll">
                @foreach($newPosts as $newPost)
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                            <div class="mb-4 mb-md-0 mr-5">
                                <img src="{{ $newPost->user->avatar }}" alt="" style="width: 70px;">
                            </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h4 class="mr-3 text-black h4">{{$newPost->title}}</h4>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3">
                                <span class="fl-bigmug-line-portfolio23"></span>
                                <span> Mô tả : {{$newPost->category->name}} </span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div>
                                <span class="fl-bigmug-line-big104"></span>
                                <span>Địa chỉ : {{$newPost->address}}</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-5">
                                <span class="fl-bigmug-line-portfolio23"></span>
                                <span>Price :{{$newPost->price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('user.post-detail', ['id' => $newPost->id])}}" class="btn btn-danger py-2">Apply Job</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<br>
@endsection
