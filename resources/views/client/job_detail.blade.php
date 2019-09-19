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
            <a class="nav-link text-info" href="#">@lang('messages.detail')</a>
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
                            </p>
                        </div>
                    </div>
                    <div class="card border-light mb-3" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-info">
                            <h5>@lang('messages.contact')</h5>
                        </div>
                        <div class="flex-container-contact">
                            <div class="card-body">
                                <p class="card-text"><b>@lang('messages.recruiter') : </b></p>
                                <p class="card-text"><b>@lang('messages.phone'): </b></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$users->name}}</p>
                                <p class="card-text">{{$users->phone}}</p>
                                <a href="#" class="btn btn-danger btn-apply">@lang('messages.apply')</a>
                            </div>

                        </div>
                    </div>
                </div>
            <div class="col-lg-4">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>@lang('messages.job-same')</h5>
                    </div>
                    @foreach($postsSameCategory as $postSameCategory)
                        <div class="card-body" id="card-body">
                            <a class="nav-link" style="font-size: 18px;" href="{{ URL::to('/user/detail-post/'.$postSameCategory->id) }}" data-toggle="tooltip" title="Giúp việc nhà">{{$postSameCategory->title}}<br>
                                <span class="text-dark" style="font-size: 15px;">{{$postSameCategory->detail}}.</span>
                            </a>
                            <p class="card-text"><span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>{{$postSameCategory->price}}</span>
                                <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>{{$postSameCategory->created_at}}</span>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
