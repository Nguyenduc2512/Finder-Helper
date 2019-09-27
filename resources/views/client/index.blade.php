@extends('client.layouts.master')
@section('title', 'Home')
@section('content')
@include('client.layouts.search-slide')
<div class="container-fluid" style="padding: 250px; margin-top: -200px; margin-bottom: -200px">
    <div class="row justify-conten-between">
        <div class="col-7">
            <div style="padding: 30px">
            <h3><strong>@lang('messages.needYou')</strong></h3>
            <hr>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 890px; overflow-y: scroll; border-radius: 7px">
                @foreach($posts as $post)
                    @php
                        $applies = $post->applies->pluck('id')->toArray();
                    @endphp
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
                                    <span> @lang('messages.detail') : {{$post->category->name}} </span>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div>
                                    <span class="fl-bigmug-line-big104"></span>
                                    <span> @lang('messages.address') : {{$post->address}}</span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-5">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> @lang('messages.price') : {{$post->price}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            @if(Auth::check())
                                @if(in_array(Auth::id(), $applies))
                                    <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">  @lang('messages.cancel')</a>
                                @else
                                    <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                                @endif
                            @else
                                <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
            <div style="padding: 30px">
            <h3><strong>@lang('messages.hot')</strong></h3>
            <hr>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 890px; overflow-y: scroll; border-radius: 7px">
                @foreach($posts as $post)
                    @php
                        $applies = $post->applies->pluck('id')->toArray();
                    @endphp
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
                                    <span> @lang('messages.detail') : {{$post->category->name}} </span>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div>
                                    <span class="fl-bigmug-line-big104"></span>
                                    <span> @lang('messages.address') : {{$post->address}}</span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-5">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> @lang('messages.price') : {{$post->price}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto">
                            @if(Auth::check())
                                @if(in_array(Auth::id(), $applies))
                                    <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">  @lang('messages.cancel')</a>
                                @else
                                    <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                                @endif
                            @else
                                <a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        <div class="col-5">
            <div style="padding: 20px">
                <h3><strong>@lang('messages.new')</strong></h3>
                <hr>
                <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 1500px; overflow-y: scroll; border-radius: 7px">
                    @foreach($newPosts as $newPost)
                        @php
                            $applies = $newPost->applies->pluck('id')->toArray();
                        @endphp
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h4 class="mr-3 text-black h4">{{$newPost->title}}</h4>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-2">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span> @lang('messages.detail') : {{$newPost->category->name}} </span>
                                </div>
                            </div>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div>
                                    <span class="fl-bigmug-line-big104"></span>
                                    <span>@lang('messages.address') : {{$newPost->address}}</span>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-5">
                                    <span class="fl-bigmug-line-portfolio23"></span>
                                    <span>@lang('messages.price') :{{$newPost->price}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            @if(Auth::check())
                                @if(in_array(Auth::id(), $applies))
                                    <a href="{{route('post-detail', ['id' => $newPost->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">  @lang('messages.cancel')</a>
                                @else
                                    <a href="{{route('post-detail', ['id' => $newPost->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                                @endif
                            @else
                                <a href="{{route('post-detail', ['id' => $newPost->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div style="padding: 20px">
            <h3>Việc làm theo ngành nghề</h3>
                <hr>
            <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 300px; overflow-y: scroll; border-radius: 7px">
                <div class="bg-white align-items-center text-center">
                    @foreach($categories as $category)
                        <p><a href="">{{$category->name}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>

    <div style="padding: 30px">
        <h3><strong>@lang('messages.highPrice')</strong></h3>
        <hr>
        <div data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 890px; overflow-y: scroll; border-radius: 7px">
            @foreach($postsPriceHigh as $postPriceHigh)
                @php
                    $applies = $postPriceHigh->applies->pluck('id')->toArray();
                @endphp
                <div class="job-post-item p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <img src="{{ $postPriceHigh->user->avatar }}" alt="" style="width: 70px;">
                    </div>
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">{{$postPriceHigh->title}}</h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3">
                                <span class="fl-bigmug-line-portfolio23"></span>
                                <span> @lang('messages.detail') : {{$postPriceHigh->category->name}} </span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div>
                                <span class="fl-bigmug-line-big104"></span>
                                <span> @lang('messages.address') : {{$postPriceHigh->address}}</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-5">
                                <span class="fl-bigmug-line-portfolio23"></span>
                                <span> @lang('messages.price') : {{$postPriceHigh->price}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="ml-auto">
                        @if(Auth::check())
                            @if(in_array(Auth::id(), $applies))
                                <a href="{{route('post-detail', ['id' => $postPriceHigh->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">  @lang('messages.cancel')</a>
                            @else
                                <a href="{{route('post-detail', ['id' => $postPriceHigh->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                            @endif
                        @else
                            <a href="{{route('post-detail', ['id' => $postPriceHigh->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">  @lang('messages.detail')</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <strong><h3>Các đối tác :</h3></strong>
    <div class="row justify-content-around">
        <div class="col-3">
            <img src="images/user/scuti-logo.png">
        </div>
        <div class="col-3">
            <img src="images/user/1200px-Man_Utd_FC_.svg.png" style="width: 300px;">
        </div>
        <div class="col-3">
            <img src="images/user/1200px-Vingroup_logo.svg.png">
        </div>
    </div>
</div>
@endsection
