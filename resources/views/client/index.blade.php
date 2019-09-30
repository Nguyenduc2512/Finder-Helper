@extends('client.layouts.master')
@section('title', 'Trang chủ')
@section('content')
    @include('client.layouts.search-slide')
    <section>
        <div class="block" style="margin-top: 5%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Việc làm gấp</h4>
                        <div  data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 920px; overflow-y: scroll; border-radius: 7px; -webkit-overflow-scrolling: none">
                        @foreach($posts as $post)
                            @php
                                $applies = $post->applies->pluck('id')->toArray();
                            @endphp
                            <div class="job-listing wtabs">
                                <div class="job-title-sec">
                                    <div class="c-logo"><img src="{{ $post->user->avatar }}" alt=""width="300px" /></div>
                                    <h3><a href="#" title="">{{$post->title}}</a></h3>
                                    <span>{{$post->category->name}}</span>
                                    <div class="job-lctn text-danger">
                                    <i class="fas fa-map-marker"></i>{{$post->address}}
                                        <div style="margin-left: 20px">Lương: {{$post->price}}<i class="fas fa-coins" style="margin-left: 7px"></i></div>
                                </div>
                            </div>
                            <div class="job-style-bx">
                                @if(Auth::check())
                                    @if(in_array(Auth::id(), $applies))
                                        <span class="job-is fill btn-primary" style="width: 150px;">
                                            <a href="{{route('post-detail', ['id' => $post->id])}}">@lang('messages.cancel')</a>
                                            </span>
                                    @else
                                        <a href="{{route('post-detail', ['id' => $post->id])}}">
                                            <span class="job-is fill btn-warning" style="width: 150px;">
                                                @lang('messages.detail')
                                            </span>
                                        </a>
                                    @endif
                                @else
                                    <a href="{{route('post-detail', ['id' => $post->id])}}">
                                        <span class="job-is fill btn-warning" style="width: 150px;">
                                            @lang('messages.detail')
                                        </span>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <h4>Việc làm lâu dài</h4>
                        <div  data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 920px; overflow-y: scroll; border-radius: 7px">
                        @foreach($newPosts as $newPost)
                        @php
                            $applies = $newPost->applies->pluck('id')->toArray();
                        @endphp
                        <div class="job-listing wtabs" >
                            <div class="job-title-sec">
                                <div class="c-logo"><img src="{{ $newPost->user->avatar }}"></div>
                                <h3><a href="#" title="">{{$newPost->title}}</a></h3>
                                <span>{{$newPost->category->name}}</span>
                                <div class="job-lctn text-danger">
                                    <i class="fas fa-map-marker"></i>{{$newPost->address}} <br>
                                    <div style="margin-left: 100px">Lương: {{$newPost->price}}<i class="fas fa-coins" style="margin-left: 7px"></i></div>
                                </div>
                            </div>
                            <div class="job-style-bx">
                                @if(Auth::check())
                                    @if(in_array(Auth::id(), $applies))
                                        <a href="{{route('post-detail', ['id' => $newPost->id])}}">
                                            <span class="job-is fill btn-primary" style="width: 150px;">
                                                @lang('messages.cancel')
                                            </span>
                                        </a>
                                    @else
                                        <a href="{{route('post-detail', ['id' => $newPost->id])}}">
                                            <span class="job-is fill btn-warning" style="width: 150px">
                                                @lang('messages.detail')
                                            </span>
                                        </a>
                                    @endif
                                @else
                                    <a href="{{route('post-detail', ['id' => $newPost->id])}}">
                                        <span class="job-is fill btn-warning" style="width: 150px">
                                            @lang('messages.detail')
                                        </span>
                                    </a>
                                @endif
                                <a href="#">
                                </a>
                            </div>
                        </div>
                    @endforeach
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 column">
                    <h4>Việc làm lương cao</h4>
                    <div class="job-list-modern">
                        <div  data-spy="scoll" data-target=".navbar" data-offset="50" style="height: 920px; overflow-y: scroll; border-radius: 7px">
                        @foreach($postsPriceHigh as $postPriceHigh)
                            @php
                                $applies = $postPriceHigh->applies->pluck('id')->toArray();
                            @endphp
                            <div class="job-listings-sec">
                                <div class="job-listing wtabs">
                                    <div class="job-title-sec">
                                        <div class="c-logo"><img src="{{$postPriceHigh->user->avatar}}"></div>
                                        <h3><a href="#" title="">{{$postPriceHigh->title}}</a></h3>
                                        <span>{{$postPriceHigh->category->name}}</span>
                                        <div class="job-lctn text-danger">
                                            <i class="fas fa-map-marker"></i>{{$postPriceHigh->address}} <br>
                                            Lương : {{$postPriceHigh->price}}<i class="fas fa-coins" style="margin-left: 7px"></i>
                                        </div>
                                    </div>
                                    <div class="job-style-bx">
                                        @if(Auth::check())
                                            @if(in_array(Auth::id(), $applies))
                                                <span class="job-is fill btn-primary text-white" style="width: 150px;">
                                                    <a href="{{route('post-detail', ['id' => $newPost->id])}}">@lang('messages.cancel')</a>
                                                </span>
                                            @else
                                                <a href="{{route('post-detail', ['id' => $postPriceHigh->id])}}">
                                                <span class="job-is btn-warning" style="width: 150px;">
                                                    @lang('messages.detail')
                                                </span>
                                                </a>
                                            @endif
                                        @else
                                            <a href="{{route('post-detail', ['id' => $postPriceHigh->id])}}">
                                            <span class="job-is btn-warning" style="width: 150px;">
                                                @lang('messages.detail')
                                            </span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <aside class="col-lg-3 column" style="border-left: 1px solid #e8ecec;">
                    <div class="widget">
                        <h4>Danh mục công việc</h4>
                        <div class="specialism_widget">
                            @foreach($categories as $category)
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-primary" href="{{route('post-category', ['id' => $category->id])}}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section style="margin-top: 5%">
        <div class="block gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <span><h2>Nhà tuyển dụng hàng đầu</h2></span>
                        </div>
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-2">
                                <img src="{{ asset('images/em4.jpg') }}" alt=""/>
                            </div>
                            <div class="col-lg-2">
                                <img src="{{ asset('images/em4.jpg') }}" alt=""/>
                            </div>
                            <div class="col-lg-2">
                                <img src="{{ asset('images/em4.jpg') }}" alt=""/>
                            </div>
                            <div class="col-lg-2">
                                <img src="{{ asset('images/em4.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
