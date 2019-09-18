@extends('client.layouts.master')
@section('title', 'all-job')
@section('content')
<div class="container">
    <div class="job-search">
        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 mb-8 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Where are you ?">
                        </div>
                        <div class="col-md-3 col-lg-3 mb-8 mb-lg-0">
                            <select name="cate" class="form-control" id="">
                                @foreach($categories as $ca)
                                    <option value="">{{$ca->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-lg-3 mb-8 mb-lg-0">
                            <select name="cate" class="form-control" id="">
                                @foreach($locations as $lo)
                                    <option value="">{{$lo->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <input type="submit" class="btn btn-primary btn-block" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex flex-column">
        <div class="col-lg">
            <h3>Job</h3>
            @foreach($newPosts as $npo)
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    @foreach($users as $us)
                        @if($us->id == $npo->user_id)
                            <div class="mb-4 mb-md-0 mr-5">
                                <img src="{{$us->avatar}}" alt="" style="width: 70px;">
                            </div>
                        @endif
                    @endforeach
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h4 class="mr-3 text-black h4">{{$npo->title}}</h4>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div><span class="fl-bigmug-line-big104"></span> <span></span></div>
                        </div>
                        @foreach($categories as $ca)
                            @if($ca->id == $npo->category_id)
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3">
                                        <span class="fl-bigmug-line-portfolio23"></span>
                                        <span> Mô tả : {{$ca->name}} </span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="job-post-item-body d-block d-md-flex">
                            <div><span class="fl-bigmug-line-big104"></span><span>Địa chỉ : {{$npo->address}}</span></div>
                        </div>
                        <br>
                        <br>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :{{$npo->price}}</span></div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('user.post-detail')}}" class="btn btn-danger py-2">Apply Job</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<div class="container">



    <div class="job-search">
        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
            <h3>Danh Mục</h3>
            <div class="d-flex">
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                        <li>
                            Coffee
                        </li>
                        <br>
                        <li>
                            Tea
                        </li>
                        <br>
                        <li>
                            Milk
                        </li>
                    </ul>
            </div>
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                        <li>
                            Coffee
                        </li>
                        <br>
                        <li>
                            Tea
                        </li>
                        <br>
                        <li>
                            Milk
                        </li>
                    </ul>
            </div>
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                        <li>
                            Coffee
                        </li>
                        <br>
                        <li>
                            Tea
                        </li>
                        <br>
                        <li>
                            Milk
                        </li>
                    </ul
                ></div>
            </div>
        </div>
    </div>


</div>
@endsection
