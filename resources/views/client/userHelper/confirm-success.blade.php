@extends('client.layouts.master')
@section('title', 'job-detail')
@section('content')
    @php
        $statusOwner = $post->success->pluck('owner_post_status')->toArray();
    @endphp
    <div class="menuDetail">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-info" href="#">@lang('messages.home')</a>
            </li>
            <li class="nav-item" id="nav-reponsive">
                <a class="nav-link">/</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="">
                    {{$post->category->name}}
                </a>
            </li>
            <li class="nav-item" id="nav-reponsive">
                <a class="nav-link">/</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="">
                    {{$post->title}}
                </a>
            </li>
            <li class="nav-item" id="nav-reponsive">
                <a class="nav-link">/</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="#">@lang('messages.detail')</a>
            </li>
        </ul>
    </div>
    <!--detail-job -->
    <div class="detail-job">
        <div class="container">
            <div class="row">
                <div class="col">
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
                            <div class="card-body">
                                @if($countAmount < $post->amount && in_array($check['post_type_unSuccess'], $statusOwner))
                                    @if($userApplyById->status == $check['post_type_unSuccess'])
                                        <div class="card border-light mb-3 text-center" style="max-width: 100%;">
                                            <div style="padding: 10%">
                                                <a type="submit"
                                                   class="btn btn-primary py-2 text-white" style="width: 150px; margin: auto">
                                                    Đã ứng tuyển
                                                </a>
                                            </div>
                                        </div>
                                    @elseif($userApplyById->status == $check['post_type_confirm'])
                                        <div class="card border-light mb-3 text-center" style="max-width: 100%;">
                                            <div style="padding: 10%">
                                                <a type="submit"
                                                   class="btn btn-warning py-2 text-white" style="width: 150px; margin: auto">
                                                    Đã xác nhận
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                @elseif($userApplyById->status == $check['post_type_unSuccess'] && in_array($check['post_type_confirm'], $statusOwner))
                                    <div class="text-danger "><i>Công việc đã kết thúc</i></div>
                                @else
                                    @if($userApplyById->user_apply_status == $check['post_type_confirm'] && $userApplyById->user_apply_status != $userApplyById->owner_post_status)
                                        <div class="card border-light mb-3 text-center" style="max-width: 100%;">
                                            <div style="padding: 10%">
                                                <a type="submit"
                                                   class="btn btn-warning py-2 text-white" style="width: 150px; margin: auto">
                                                    Đã hoàn thành
                                                </a>
                                            </div>
                                            <div style="padding: 30px">Đang chờ xác nhận ...</div>
                                        </div>

                                    @elseif($userApplyById->user_apply_status == $check['post_type_unSuccess'] && $userApplyById->status == $check['post_type_confirm'])
                                        <div>Công việc đang thực hiện</div>
                                        <div class="card border-light mb-3 text-center" style="max-width: 100%;">
                                            <div style="padding: 10%">
                                                <a href="{{route('user.helper-confirm', ['id'=> $userApplyById->id])}}" type="submit"
                                                   class="btn btn-success py-2 text-white" style="width: 150px; margin: auto">
                                                    Hoàn thành
                                                </a>
                                            </div>
                                        </div>
                                    @elseif($userApplyById->status == $check['post_type_unSuccess'])
                                        <div class="text-danger "><i>Bạn không được tuyển ở công việc này</i></div>
                                    @else
                                        <div class="text-danger "><i>Đã thanh toán</i></div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding: 50px"></div>
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
