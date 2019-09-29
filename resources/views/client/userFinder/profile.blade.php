<div id="history" class="container tab-pane"><br>
    @php
        $applies = $user->post;
    @endphp
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách công việc
            </h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th># Tên người thuê</th>
                    <th>Công việc</th>
                    <th>Số lượng</th>
                    <th>lương</th>
                    <th>Địa Chỉ</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    @php
                        $array = $post->success->pluck('status')->toArray();
                    @endphp
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->amount }}</td>
                        <td>{{ $post->price }}k/h</td>
                        <td>{{ $post->address }}</td>
                        @if($post->status == $success['post_type_inActive'])
                            <td class="text-center">
                                <a href="{{route('user.apply-request', ['id' => $post->id])}}" class="btn btn-danger py-2 text-white" style="width: 150px">Đang chờ duyệt</a>
                            </td>
                            <td>
                                <a href="javascript:;" class="btn btn-danger btn-sm btn-remove"
                                   linkurl="{{ route('user.delete-post', $post->id) }}">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        @elseif($post->status == $success['post_type_active'])
                            <td><a href="{{route('user.apply-request', ['id' => $post->id])}}" class="btn btn-success py-2 text-white" style="width: 150px">Đã được duyệt</a></td>
                            <td></td>
                        @elseif($post->status == $success['post_type_success'])
                            <td><a href="{{route('user.apply-request', ['id' => $post->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">Đã hoàn thành</a></td>
                            <td></td>
                        @else
                            <td><a href="{{route('post-detail', ['id' => $post->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">Không được duyệt</a></td>
                            <td>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
