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
                                    <input type="text" class="form-control" value="{{ $post->title }}" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Danh mục công việc
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ $post->category['name']}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        Tiền lương
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ $post->price }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Thời gian bắt đầu
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="time-day" value="{{ $post->start_time }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        Thời gian kết thúc
                                        <div class="form-group">
                                            <input type="text"  class="form-control" value="{{ $post->end_time }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        Số lượng người thuê
                                        <div class="form-group">
                                            <input type="number" class="form-control" value="{{ $post->amount }}" readonly>
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
                                            readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    Địa chỉ
                                    <input type="text" class="form-control"  value="{{ $post->address }}" readonly>
                                </div>
                                <div class="form-group">
                                    Mô tả chi tiết công việc
                                    <textarea  rows="10" class="form-control" readonly>{{ $post->detail }}</textarea>
                                </div>
                                <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-danger btn-sm">Duyệt bài</button>
                                    <a href="{{ route('posts.request') }}" class="btn btn-warning btn-sm text-light btn-cancel"> Hủy </a>
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
