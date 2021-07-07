@extends('client.layouts.master')
@section('title', 'Đăng công việc')
@section('content')
    <div class="container" style="padding: 40px;">
        <div class="row">
            <div class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-lg-9 column">
                <div class="padding-left">
                    <div class="profile-title">
                        <h3>Đăng bài tuyển dụng</h3>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" action="{{route('user.post-store')}}"
                      style="margin-left: 3%">
                    @csrf
                    <div class="form-group">
                       <span class="pf-title">Tiêu đề công việc <span class="text-danger">*</span></span>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}"
                               placeholder="Tiêu đề công việc">
                        @if($errors->first('title'))
                            <span class="text-danger"> {{$errors->first('title')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Ngành nghề <span class="text-danger">*</span></span>
                        <select class="form-control" name="category_id" style="height: 60px;">
                            @foreach($category as $ca)
                                <option value="{{$ca->id}}">{{$ca->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <span class="pf-title">Thời gian bắt đầu <span class="text-danger">*</span></span>
                            <div class="form-group">
                                <input type="datetime-local" name="start_time" class="form-control"
                                       value="{{old('start_time')}}">
                                @if($errors->first('start_time'))
                                    <span class="text-danger"> {{$errors->first('start_time')}} </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-6">
                            <span class="pf-title">Thời gian kết thúc <span class="text-danger">*</span></span>
                            <div class="form-group">
                                <input type="datetime-local" name="end_time" class="form-control"
                                       value="{{old('end_time')}}">
                            </div>
                            @if($errors->first('end_time'))
                                <span class="text-danger"> {{$errors->first('end_time')}} </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <span class="pf-title">Số lượng người thuê <span class="text-danger">*</span></span>
                            <div class="form-group">
                                <input type="number" name="amount" placeholder="Số lượng người thuê"
                                       class="form-control" id="people-number" value="{{old('amount')}}">
                            </div>
                            @if($errors->first('amount'))
                                <span class="text-danger"> {{$errors->first('amount')}} </span>
                            @endif
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <span class="pf-title">Yêu cầu giới tính <span class="text-danger">*</span></span>
                                <select class="form-control" name="gender" style="height: 60px">
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Không yêu cầu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Quận/Huyện <span class="text-danger">*</span></span>
                        <select class="form-control" name="location_id" style="height: 60px">
                            @foreach($location as $lo)
                                <option value="{{$lo->id}}">
                                    {{$lo->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Địa chỉ cụ thể ( Không bao gồm quận huyện )<span class="text-danger">*</span></span>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="{{old('address')}}">
                            </div>
                        @if($errors->first('address'))
                            <span class="text-danger"> {{$errors->first('address')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Tiền lương  <i class="fas fa-coins"></i> <span class="text-danger">*</span> </span>
                        <input type="number" name="price" class="form-control"
                               placeholder="Coin | 1 coin = 10000VND">
                        @if($errors->first('price'))
                            <span class="text-danger"> {{$errors->first('price')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Mô tả chi tiết công việc <span class="text-danger">*</span></span>
                        <textarea name="detail" rows="10" class="form-control"
                                  placeholder="Mô tả chi tiết công việc"
                                  data-value="{{old('detail')}}"></textarea>
                        @if($errors->first('detail'))
                            <span class="text-danger"> {{$errors->first('detail')}} </span>
                        @endif
                    </div>
                    <div class="col-7"><button type="submit" class="btn btn-success btn-xs" style="margin-top: 5%; margin-left: 75%">Đăng Tin</button></div>
                </form>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            $('.btn-remove').on('click', function(){

                swal({
                    text: "Bạn có chắc chắn muốn xoá bài viết này ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,

                })
                    .then((willDelete) => {

                        if (willDelete) {

                            window.location.href = $(this).attr('linkurl');
                            swal("Bạn đã xóa thành công bài viết này!", {
                                icon: "success",
                            });

                        }  else {

                            swal("Hủy thành công!");
                        }
                    });
            });
        </script>
        @stop
@endsection
