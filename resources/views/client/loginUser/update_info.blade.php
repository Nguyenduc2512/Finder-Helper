@extends('client.layouts.login')
@section('title', 'sign-up')
@section('content')
<div class="center-sign">

    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title font-weight-bold m-0"><i class="fas fa-user mr-1"></i>Update Info</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('user.add-info') }}" method="post">
                @csrf
                @if (isset(Auth::user()->id ))
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                @endif
                <div class="form-group mb-3">
                    <label>Tên hiển thị *</label>
                    <div class="input-group">
                        <input name="name" type="text" class="form-control form-control-lg" value="{{ Auth::user()->name }}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Email *</label>
                    <div class="input-group">
                        <input name="email" type="email" class="form-control form-control-lg" value="{{ Auth::user()->email }}"/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt trước CMT/CCCD</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">

                    <div class="form-check p-2">
                        
                        <label class="form-check-label" for="exampleRadios2">
                            <a href=""><i class="far fa-file-image"></i> Chọn từ thư viện</a>
                        
                        </label>
                    </div>
                    
                    <div class="form-check p-2 ml-auto ">
                            
                        <label class="form-check-label" for="exampleRadios2"><i class="fas fa-camera"></i>
                            Chụp ảnh
                        </label>
                        <!-- <input type="file" name=""> -->

                        </div>

                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Mặt sau CMT/CCCD</label>
                    </div>
                    <div class="d-flex justify-content-between6 ">

                    <div class="form-check p-2">
                        
                        <label class="form-check-label" for="exampleRadios2">
                            <a href=""><i class="far fa-file-image"></i> Chọn từ thư viện</a>
                        
                        </label>
                    </div>
                    
                    <div class="form-check p-2 ml-auto ">
        
                        <label class="form-check-label" for="exampleRadios2"><i class="fas fa-camera"></i>
                            Chụp ảnh
                        </label>

                        </div>

                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Giới Tính</label>
                    </div>
                    <div class="d-flex justify-content-around">
                    

                    <div class="form-check p-2">
                        <input class="form-check-input" type="radio" name="" id="" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Nam
                        </label>
                    </div>
                    <div class="form-check p-2">
                        <input class="form-check-input " type="radio" name="" id="" value="option2">
                        <label class="form-check-label" for="">
                            Nữ
                        </label>
                    </div>
                    <div class="form-check p-2">
                        <input class="form-check-input " type="radio" name="" id="" value="option2">
                        <label class="form-check-label" for="">
                            Tùy chọn khác
                        </label>

                        </div>

                    </div>
                </div>
                    <div class="form-group mb-3 ">
                    <div class="clearfix">
                        <label class="float-left">Bạn Là:</label>
                    </div>
                    <div class="d-flex justify-content-around">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rules" id="" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            Hepler
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input " type="radio" name="rules" id="" value="1">
                        <label class="form-check-label" for="exampleRadios2">
                            Finder
                        </label>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary mt-2">Update Info</button>
                    </div>
                </div>
                <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                    <span>or</span>
                </span>
            </form>
        </div>
    </div>


</div>
@endsection