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
                    <th>Công việc</th>
                    <th>Số lượng</th>
                    <th>lương</th>
                    <th>Địa Chỉ</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
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
<div id="coin" class="container tab-pane"><br>
    <div class="col">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
            <div class="mb-4 mb-md-0 mr-5">
                <img src="{{asset('img/avatar-default-icon.png')}}" alt="" style="width: 100px;">
            </div>
            <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black h4"></h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook,
                            Inc.</a></div>
                    <div><span class="fl-bigmug-line-big104"></span> <span>My Dinh, Ha Noi</span></div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <span>Price :
                                    1000$</span></div>
                    <div><span class="fl-bigmug-line-big104"></span> <span>2h/2m</span></div>
                </div>
                <div class="" job-post-item-body>
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23">Help : Nguyen Minh Duc</span>
                    </div>
                </div>
                <div class="" job-post-item-body>
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"><a href="">See
                                        More</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
