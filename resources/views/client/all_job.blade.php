@extends('client.layouts.master')
@section('title', 'Tất cả công việc')
@section('content')
    @include('client.layouts.search-slide')
{{--    <div class="container">--}}
{{--        <div class="row d-flex flex-column">--}}
{{--            <div class="col-lg">--}}
{{--                <h3>Job</h3>--}}
{{--                @foreach($newPosts as $newPost)--}}
{{--                    @php--}}
{{--                        $applies = $newPost->applies->pluck('id')->toArray();--}}
{{--                    @endphp--}}
{{--                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">--}}
{{--                        <div class="mb-4 mb-md-0 mr-5">--}}
{{--                            <img src="{{$newPost->user->avatar}}" alt="" style="width: 70px;">--}}
{{--                        </div>--}}
{{--                        <div class="mb-4 mb-md-0 mr-5">--}}
{{--                            <div class="job-post-item-header d-flex align-items-center">--}}
{{--                                <h4 class="mr-3 text-black h4">{{$newPost->title}}</h4>--}}
{{--                            </div>--}}
{{--                            <div class="job-post-item-body d-block d-md-flex">--}}
{{--                                <div><span class="fl-bigmug-line-big104"></span> <span></span></div>--}}
{{--                            </div>--}}
{{--                            <div class="job-post-item-body d-block d-md-flex">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <span class="fl-bigmug-line-portfolio23"></span>--}}
{{--                                    <span> Mô tả : {{$newPost->category->name}} </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="job-post-item-body d-block d-md-flex">--}}
{{--                                <div><span--}}
{{--                                        class="fl-bigmug-line-big104"></span><span>Địa chỉ : {{$newPost->address}}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <div class="job-post-item-body d-block d-md-flex">--}}
{{--                                <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span>--}}
{{--                                    <span>Price :{{$newPost->price}}</span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-auto">--}}
{{--                            @if(Auth::check())--}}
{{--                                @if(in_array(Auth::id(), $applies))--}}
{{--                                    <a href="{{route('user.post-detail', ['id' => $newPost->id])}}"--}}
{{--                                       class="btn btn-danger py-2 text-white"--}}
{{--                                       style="width: 150px">  @lang('messages.cancel')</a>--}}
{{--                                @else--}}
{{--                                    <a href="{{route('user.post-detail', ['id' => $newPost->id])}}"--}}
{{--                                       class="btn btn-warning py-2 text-white"--}}
{{--                                       style="width: 150px">  @lang('messages.detail')</a>--}}
{{--                                @endif--}}
{{--                            @else--}}
{{--                                <a href="{{route('user.new-post', ['id' => $newPost->id])}}"--}}
{{--                                   class="btn btn-warning py-2 text-white"--}}
{{--                                   style="width: 150px">  @lang('messages.detail')</a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <section style="margin-top: 10%">
        <div class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 column">
                        <div class="heading left">
                            <h4>Tất cả công việc</h4>
                        </div><!-- Heading -->
                        @foreach($newPosts as $newPost)
                            @php
                                $applies = $newPost->applies->pluck('id')->toArray();
                            @endphp
                            <div class="job-listings-sec style2">
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="{{ asset('images/em4.jpg') }}" alt=""> </div>
                                        <h3><a href="#" title="">{{$newPost->title}}</a></h3>
                                        <span>{{$newPost->category->name}}</span>
                                        <span class="job-lctn text-danger">
                                            Địa chỉ: {{$newPost->address}}
                                        </span>
                                    </div>
                                    @if(Auth::check())
                                        @if(in_array(Auth::id(), $applies))
                                            <a href="{{route('user.post-detail', ['id' => $newPost->id])}}">
                                                 <span class="job-is fill btn-danger" style="width: 150px;">
                                                @lang('messages.cancel')
                                            </span>
                                            </a>
                                        @else
                                            <a href="{{route('user.post-detail', ['id' => $newPost->id])}}">
                                                <span class="job-is fill btn-warning" style="width: 150px">
                                                @lang('messages.detail')
                                            </span>
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{route('user.new-post', ['id' => $newPost->id])}}">
                                            <span class="job-is fill btn-warning" style="width: 150px">
                                                @lang('messages.detail')
                                            </span>
                                        </a>
                                    @endif

                                </div><!-- Job -->
                            </div>
                        @endforeach
                        {{ $newPosts->links() }}
                    </div>
                    <div class="col-lg-3 column">
                        <div class="heading left">
                            <h4>Danh mục công việc</h4>
                        </div><!-- Heading -->
                        <div class="widget">
                            <div class="specialism_widget">
                                @foreach($categories as $category)
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" href="#">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@stop
@endsection
