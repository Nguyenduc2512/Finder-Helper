@extends('client.layouts.master')
@section('title', 'job-detail')
@section('content')
    <div class="detail-job">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
                            <h5>@lang('messages.info')</h5>
                        </div>
                        <div class="flex-container">
                            <div class="card-body">
                                <p class="card-text"><b>@lang('messages.job') : </b>{{$post->title}}</p>
                                <p class="card-text">
                                    <b>@lang('messages.sex') : </b>
                                    @if($post->gender == $gender['gender_type_male'])
                                        @lang('messages.male')
                                    @elseif($post->gender == $gender['gender_type_female'])
                                        @lang('messages.female')
                                    @else
                                        @lang('messages.nope')
                                    @endif
                                </p>
                                <p class="card-text"><b>@lang('messages.amount') : </b>{{$post->amount}}</p>
                                <p class="card-text"><b>@lang('messages.address') : </b> {{$post->address}}</p>
                                <p class="card-text"><b>@lang('messages.posted') : </b>{{$post->created_at}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><b>@lang('messages.start') : </b>{{$post->start_time}}</p>
                                <p class="card-text"><b>@lang('messages.end') : </b>{{$post->start_time}}</p>
                            </div>
                        </div>
                        <div class="card border-light mb-3" style="max-width: 100%;">
                            <div class="card-header bg-transparent border-info">
                                <h5>@lang('messages.description')</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="line-height: 30px;">
                                    {{$post->detail}}
                                </p>
                            </div>
                        </div>
                        <div class="card border-light mb-3" style="max-width: 100%;">
                            <div class="card-header bg-transparent border-info">
                                <h5>@lang('messages.interest')</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="line-height: 30px;">
                                    - @lang('messages.price') : {{$post->price}}
                            </div>
                        </div>
                        <div class="card border-light mb-3" style="max-width: 100%;">
                            <div class="card-header bg-transparent border-info">
                                <h5>@lang('messages.contact')</h5>
                            </div>
                            <div class="flex-container-contact">
                                <div class="card-body">
                                    <p class="card-text"><b>@lang('messages.recruiter') : </b></p>
                                    <p class="card-text"><b>@lang('messages.address'): </b></p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$users->name}}</p>
                                    <p class="card-text">{{$post->address}}</p>
                                </div>
                            </div>
                        </div>
                        @php
                            $applies = $post->applies->pluck('id')->toArray();
                        @endphp
                        <form method="post" enctype="multipart/form-data" action="{{route('user.apply-job')}}">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="apply_time" value="{{$post->start_time}}">
                            <input type="hidden" name="status" value="0">
                            @if($rule == Auth::user()->rules)
                                @if(in_array(Auth::id(), $applies))
                                    <a href="javascript:;" linkurl="{{route('user.cancel-apply', ['id' => $post->id])}}"
                                       class="btn btn-danger py-2 text-white"
                                       style="margin: 20px; margin-left: 300px; width: 120px">@lang('messages.cancel')</a>
                                @else
                                    <button class="btn btn-warning py-2 text-white" type="submit"
                                            style="margin: 20px; margin-left: 300px; width: 120px">@lang('messages.apply')</button>
                                @endif
                            @else
                                <a href="{{route('user.post-store')}}" class="btn btn-warning py-2 text-white"
                                   style="width: 150px"> Đăng công việc của bạn</a>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
                            <h5>@lang('messages.job-same')</h5>
                        </div>
                        @foreach($postsSameCategory as $postSameCategory)
                            <div>
                                <div class="card-body" id="card-body">
                                    <a class="nav-link" style="font-size: 18px;"
                                       href="{{ URL::to('/user/detail-post/'.$postSameCategory->id) }}"
                                       data-toggle="tooltip" title="Giúp việc nhà">{{$postSameCategory->title}}<br>
                                        <span class="text-info"
                                              style="font-size: 15px;">{{$postSameCategory->detail}}.</span>
                                    </a>
                                    <p class="card-text"><span class="text-danger" id="span-card-text"><i
                                                class="fas fa-dollar-sign"></i>{{$postSameCategory->price}}</span>
                                        <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>{{$postSameCategory->created_at}}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script>
        $('.btn-danger').on('click', function () {

            swal({
                text: "Bạn có chắc chắn muốn bỏ ứng tuyển công việc này ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,

            })
                .then((willDelete) => {

                    if (willDelete) {

                        window.location.href = $(this).attr('linkurl');
                    }
                });
        });
    </script>
@stop
@endsection
