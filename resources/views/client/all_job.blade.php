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
                                            <a href="{{route('post-detail', ['id' => $newPost->id])}}">
                                                 <span class="job-is fill btn-danger" style="width: 150px;">
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
