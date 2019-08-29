@extends('layouts.master')
@section('title', 'all-job')
@section('content')
<div class="container">
    <div class="job-search">
        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 col-lg-9 mb-8 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Where are you ?">
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
            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
                                            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
                                            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>
            <div class="job-post-item bg-white p-2 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
                </div>
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                        <h2 class="mr-3 text-black h4">Clean House</h2>
                        <div class="badge-wrap">
                            <span class="bg-danger text-white badge py-2 px-4">Partime</span>
                        </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                        Inc.</a></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Detail : Lau don
                        nha cua , nau nuong...</span></div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-5"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                        1000$</span></div>
                        <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                    </div>
                </div>

                <div class="ml-auto">
                    <a href="job-single.html" class="btn btn-danger py-2">Apply Job</a>
                </div>
            </div>

            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>

    </div>
</div>
<div class="container">



    <div class="job-search">
        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
        <!-- <div class="tab-pane fade show active" id="pills-job" role="tabpanel"
            aria-labelledby="pills-job-tab"> -->
            <h3>Chuyên Mục</h3>
            <div class="d-flex">
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                    <li>Coffee</li>
                    <br>
                    <li>Tea
                    </li>
                    <br>
                    <li>Milk</li>
                </ul>
            </div>
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                    <li>Coffee
                    </li>
                    <br>
                    <li>Tea									
                    </li>
                    <br>
                    <li>Milk
                    </li>
                </ul>
            </div>
                <div class="p-2  flex-fill">
                    <ul class="list-unstyled">
                    <li>Coffee</li><br>
                    <li>Tea
                    </li>
                    <br>
                    <li>Milk</li>
                </ul
                ></div>
            </div>
        </div>
    </div>


</div>
@endsection