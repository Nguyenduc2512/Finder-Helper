@extends('client.layouts.master')
@section('title', 'Chi tiết công việc')
@section('content')
    <!--detail-job -->
    <div class="detail-job" style="padding: 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                    </div>
                    @php
                        $statusOwner = $post->success->pluck('owner_post_status')->toArray();
                    @endphp
                    <h4><b><i>Ứng viên của bạn :</i></b></h4>
                    <div>
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Hành động</th>
                                <th>Trạng thái</th>
                                <th>Đánh giá</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($post->applies as $user)
                                <tr  class="text-center">
                                    <td>{!! $user->name !!}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($countAmount == $post->amount)
                                            @if($user->pivot->status == $status['post_type_confirm'])
                                                <button type="button" onclick="" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            @else
                                            @endif
                                        @else
                                            @if($user->pivot->status == $status['post_type_unSuccess'] && $countAmount < $post->amount)
                                                <form method="post" enctype="multipart/form-data" action="{{route('user.accept-user', ['id' => $user->pivot->id])}}">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                                    <button type="button" onclick="" class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-success btn-sm" type="submit">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </form>
                                            @elseif($countAmount == $post->amount && $user->pivot->owner_post_status == $status['post_type_confirm'])
                                            @elseif($user->pivot->status == $status['post_type_confirm'] && $countAmount == $post->amount)
                                                <form method="post" enctype="multipart/form-data" action="{{route('user.decline-user', ['id' => $user->pivot->id])}}">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                                    <button type="button" onclick="" class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button onclick="" class="btn btn-danger btn-sm" type="submit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <div class="text-danger"> Công việc của bạn chưa đủ người thực hiện</div>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if($countAmount == $post->amount)
                                            @if($user->pivot->owner_post_status == $user->pivot->user_apply_status && $user->pivot->owner_post_status == $status['post_type_confirm'] )
                                                <div class="text-danger "><i>Đã thanh toán</i></div>
                                            @elseif($user->pivot->status == $status['post_type_unSuccess'] )
                                                <div class="text-danger "><i>Bạn không tuyển ứng viên này</i></div>
                                            @elseif($user->pivot->owner_post_status != $user->pivot->user_apply_status && $user->pivot->owner_post_status == $status['post_type_confirm'] )
                                                <div class="text-center" style="max-width: 100%;">
                                                    <div style="padding: 10%">
                                                        <a type="submit"
                                                           class="btn btn-warning py-2 text-white" style="width: 150px; margin: auto">
                                                            Đã hoàn thành
                                                        </a>
                                                    </div>
                                                    <div style="padding: 30px">Chờ người được thuê xác nhận ...</div>
                                                </div>
                                            @else
                                                <div class="text-center" style="max-width: 100%;">
                                                    <div style="padding: 30px">Công việc của bạn đang được thực hiện</div>
                                                    <div style="padding: 10%">
                                                        <a type="submit" href="{{route('user.owner-success', ['id'=>$post->id])}}"
                                                           class="btn btn-success py-2 text-white" style="width: 150px; margin: auto">
                                                            Hoàn thành
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <script>
        function confirm() {
            $('.btn-danger').on('click', function(){
                swal({
                    text: "Bạn có chắc chắn muốn bỏ phê duyệt ứng viên này   ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
            });
        }
    </script>
    <script>
        function showInfo(id) {
            $.ajax({
                url: 'show-info',
                type: "get",
                data: id ,
                success: function (response) {
                    if (data === "success")
                        alert(response);
                    console.log(response);
                },
                error: function (response) {
                    alert('Error' + response);
                    console.log(response);
                }
            });
        }
    </script>
@stop
@endsection
