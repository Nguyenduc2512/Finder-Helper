@extends('admin.layouts.main')
@section('title', 'Duyệt bài')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3 card-style" style="max-width: 100%;">
                        <div class="card-header">
                            <h4> Duyệt bài đăng</h4>
                        </div>
                        <div class="card-body" id="card-body-form">
                            <form method="post"  action="{{ route('posts.update') }}">
                                @csrf
                                @if (isset($post))
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                @endif
                                <div class="form-group">
                                    Tiêu đề công việc
                                    <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Danh mục công việc
                                        <div class="form-group">
                                            <select class="form-control" name="category_id">
                                                <option value="{{$post->category_id}}">
                                                    {{$post->category->name}}
                                                </option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        Tiền lương
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="price" value="{{ $post->price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Thời gian bắt đầu
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="time-day" name="start_time" value="{{ $post->start_time }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        Thời gian kết thúc
                                        <div class="form-group">
                                            <input type="text"  class="form-control" name="end_time" value="{{ $post->end_time }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Số lượng người thuê
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="amount" value="{{ $post->amount }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        Yêu cầu giới tính
                                        <input type="text" class="form-control"
                                            value=
                                                    @if ($post->gender == Config::get('helper.gender_type_male'))
                                                        Nam
                                                    @elseif($post->gender == Config::get('helper.gender_type_female'))
                                                        Nữ
                                                    @elseif($post->gender == Config::get('helper.gender_type_other'))
                                                        Không
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    Địa chỉ
                                    <input type="text" class="form-control"  value="{{ $post->address }}" name="address">
                                </div>
                                <div class="form-group">
                                    Mô tả chi tiết công việc
                                    <textarea  rows="10" class="form-control" name="detail">{{ $post->detail }}</textarea>
                                </div>
                                @if($post->status == Config::get('helper.post_type_inActive'))
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-success btn-sm">Duyệt bài</button>
                                @elseif($post->status == Config::get('helper.post_type_active'))
                                    <input type="hidden" name="status" value="0">
                                    <button type="submit" class="btn btn-danger btn-sm">Gỡ bài</button>
                                @else
                                @endif
                                <a href="{{ route('posts.index') }}" class="btn btn-warning btn-sm text-light btn-cancel"> Hủy </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@section('script')
<script>
    $('.btn-cancel').on('click', function(){
        swal({
            text: "@lang('messages.errorPost')",
            icon: "success",
            button: true,
            dangerMode: true,

        });
    });
</script>
@stop
@endsection
