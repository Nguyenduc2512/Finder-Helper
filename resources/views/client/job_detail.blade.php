@extends('client.layouts.master')
@section('title', 'job-detail')
@section('content')
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
                {{$categories->name}}
            </a>
        </li>
        <li class="nav-item" id="nav-reponsive">
            <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link text-info" href="#">@lang('messages.detail')</a>
=======
            <a class="nav-link text-info" href="#">Chi tiết công việc</a>
>>>>>>>  Show detail post
        </li>
    </ul>
</div>
<!--detail-job -->
<div class="detail-job">
    <div class="container">
        <div class="row">
                <div class="col-lg-8">
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
<<<<<<< HEAD
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
=======
                            <h5>Thông tin tuyển nhanh</h5>
                        </div>
                        <div class="flex-container">
                            <div class="card-body">
                                <p class="card-text"><b>Nghề nghiệp:</b>{{$post->title}}</p>
                                <p class="card-text">
                                    <b>Yêu cầu giới tính:</b>
                                    @if($post->gender == $gender['gender_type_male'])
                                        Nam
                                    @elseif($post->gender == $gender['gender_type_female'])
                                        Nữ
                                    @else
                                        Không yêu cầu
                                    @endif
                                </p>
                                <p class="card-text"><b>Số lượng:</b>{{$post->amount}}</p>
                                <p class="card-text"><b>Địa điểm:</b> {{$post->address}}</p>
                                <p class="card-text"><b>Ngày đăng tuyển:</b>{{$post->created_at}}</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><b>Ngày bắt đầu: </b>{{$post->start_time}}</p>
                                <p class="card-text"><b>Ngày kết thúc: </b>{{$post->start_time}}</p>
                                <a href="#" class="btn btn-danger btn-apply">Ứng tuyển ngay</a>
>>>>>>>  Show detail post
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
<<<<<<< HEAD
                            <h5>@lang('messages.description')</h5>
=======
                            <h5>Mô tả công việc</h5>
>>>>>>>  Show detail post
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="line-height: 30px;">
                               {{$post->detail}}
                            </p>
                        </div>
                    </div>
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
<<<<<<< HEAD
                            <h5>@lang('messages.interest')</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="line-height: 30px;">
                                - @lang('messages.price') : {{$post->price}}
=======
                            <h5>Quyền lợi được hưởng</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="line-height: 30px;">
                                - Lương : {{$post->price}}
>>>>>>>  Show detail post
                            </p>
                        </div>
                    </div>
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
<<<<<<< HEAD
                            <h5>@lang('messages.contact')</h5>
                        </div>
                        <div class="flex-container-contact">
                            <div class="card-body">
                                <p class="card-text"><b>@lang('messages.recruiter') : </b></p>
                                <p class="card-text"><b>@lang('messages.phone'): </b></p>
=======
                            <h5>Thông tin liên hệ</h5>
                        </div>
                        <div class="flex-container-contact">
                            <div class="card-body">
                                <p class="card-text"><b>Người tuyển dụng: </b></p>
                                <p class="card-text"><b>Số điện thoại: </b></p>
>>>>>>>  Show detail post
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$users->name}}</p>
                                <p class="card-text">{{$users->phone}}</p>
<<<<<<< HEAD
                                <a href="#" class="btn btn-danger btn-apply">@lang('messages.apply')</a>
=======
                                <a href="#" class="btn btn-danger btn-apply">Ứng tuyển ngay</a>
>>>>>>>  Show detail post
                            </div>

                        </div>
                    </div>
                </div>
            <div class="col-lg-4">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
<<<<<<< HEAD
                        <h5>@lang('messages.job-same')</h5>
                    </div>
                    @foreach($postsSameCategory as $postSameCategory)
                        <div class="card-body" id="card-body">
                            <a class="nav-link" style="font-size: 18px;" href="{{ URL::to('/user/detail-post/'.$postSameCategory->id) }}" data-toggle="tooltip" title="Giúp việc nhà">{{$postSameCategory->title}}<br>
                                <span class="text-dark" style="font-size: 15px;">{{$postSameCategory->detail}}.</span>
                            </a>
                            <p class="card-text"><span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>{{$postSameCategory->price}}</span>
                                <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>{{$postSameCategory->created_at}}</span>
=======
                        <h5>Danh sách công việc tương tự</h5>
                    </div>
                    @foreach($postsSameCate as $postSameCate)
                        <div class="card-body" id="card-body">
                            <a class="nav-link" style="font-size: 18px;" href="{{ URL::to('/user/detail-post/'.$postSameCate->id) }}" data-toggle="tooltip" title="Giúp việc nhà">{{$postSameCate->title}}<br>
                                <span class="text-dark" style="font-size: 15px;">{{$postSameCate->detail}}.</span>
                            </a>
                            <p class="card-text"><span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>{{$postSameCate->price}}</span>
                                <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>{{$postSameCate->created_at}}</span>
>>>>>>>  Show detail post
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
