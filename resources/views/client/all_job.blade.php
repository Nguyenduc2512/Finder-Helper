@extends('client.layouts.master')
@section('title', 'Tất cả công việc')
@section('content')
    @include('client.layouts.search-slide')
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
                            <div class="job-listing wtabs">
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
                        {{$newPosts->links()}}
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
