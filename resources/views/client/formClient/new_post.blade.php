@extends('client.layouts.master')
@section('title', 'new-post')
@section('content')
    <div class="user-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3 card-style" style="max-width: 100%;">
                        <div class="card-header">
                            <h5 style="margin-left: 10%;"> Đăng bài tuyển dụng </h5>
                        </div>
                        <div class="card-body" id="card-body-form">
                            <form method="post" enctype="multipart/form-data" action="{{route('user.post-store')}}">
                                @csrf
                                <div class="form-group">
                                    <label> Tiêu đề công việc </label>
                                    <span class="text-danger">(*)</span>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Tiêu đề công việc">
                                    @if($errors->first('title'))
                                        <span class="text-danger"> {{$errors->first('title')}} </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label> Danh mục công việc </label>
                                    <span class="text-danger">(*)</span>
                                    <select class="form-control" name="category_id">
                                        @foreach($category as $ca)
                                            <option value="{{$ca->id}}">{{$ca->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label> Thoi Gian Bat Dau </label>
                                        <span class="text-danger">(*)</span>
                                        <div class="form-group">
                                            <input type="datetime-local" name="start_time" class="form-control" id="time-day" value="{{old('start_time')}}">
                                        </div>
                                        @if($errors->first('start_time'))
                                            <span class="text-danger"> {{$errors->first('start_time')}} </span>
                                        @endif
                                    </div>

                                    <div class="col-6">
                                        <label> Thoi Gian Ket Thuc </label>
                                        <span class="text-danger">(*)</span>
                                        <div class="form-group">
                                            <input type="datetime-local" name="end_time" class="form-control" value="{{old('end_time')}}">
                                        </div>
                                        @if($errors->first('end_time'))
                                            <span class="text-danger"> {{$errors->first('end_time')}} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label> Số lượng người thuê </label>
                                        <span class="text-danger">(*)</span>
                                        <div class="form-group">
                                            <input type="number" name="amount" placeholder="Số lượng người thuê" class="form-control" id="people-number" value="{{old('amount')}}">
                                        </div>
                                        @if($errors->first('amount'))
                                            <span class="text-danger"> {{$errors->first('amount')}} </span>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label> Giới tính </label>
                                            <span class="text-danger">(*)</span>
                                            <select class="form-control" name="gender">
                                                <option value="1" > Nam </option>
                                                <option value="2" > Nữ </option>
                                                <option value="3" > Khong yeu cau </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Quan/Huyen </label>
                                    <span class="text-danger">(*)</span>
                                    <select class="form-control" name="location_id">
                                        @foreach($location as $lo)
                                            <option value="{{$lo->id}}">
                                                {{$lo->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> Địa chỉ </label>
                                    <span class="text-danger">(*)</span>
                                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="{{old('address')}}">
                                    @if($errors->first('address'))
                                        <span class="text-danger"> {{$errors->first('address')}} </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label> Tiền lương </label>
                                    <span class="text-danger">(*)</span>
                                    <input type="number" name="price" class="form-control" placeholder="Tính theo giờ vd: 35k/1h">
                                    @if($errors->first('price'))
                                        <span class="text-danger"> {{$errors->first('price')}} </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label> Mô tả chi tiết công việc </label>
                                    <span class="text-danger"> (*) </span>
                                    <textarea name="detail" rows="10" class="form-control" placeholder="Mô tả chi tiết công việc" data-value="{{old('detail')}}"></textarea>
                                    @if($errors->first('detail'))
                                        <span class="text-danger"> {{$errors->first('detail')}} </span>
                                    @endif
                                </div>

                                    <button type="submit" class="btn btn-danger btn-sm"> Đăng Tin </button>
                                    <a href="#" class="btn btn-warning btn-sm text-light"> Hủy </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
