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
                @foreach($applies as $apply)
                    @php
                        $userApplies = $apply->success;
                        foreach ($userApplies as $userApply) {
                            if ($userApply->user_id == Auth::id()) {
                                $status = $userApply->status;
                            }
                        }
                    @endphp
                    <tr>
                        <td>{{ $apply->user['name'] }}</td>
                        <td>{{ $apply->title }}</td>
                        <td>{{ $apply->amount }}</td>
                        <td>{{ $apply->price }}k/h</td>
                        <td>{{ $apply->address }}</td>
                        <td class="text-center">
                            @if($apply->status == $success['post_type_success'] && $status == $success['post_type_unSuccess'])
                                <div class="text-danger"><i>Công việc đã kết thúc</i></div>
                            @elseif($apply->status == $success['post_type_success'])
                                <a href="{{route('post-detail', ['id' => $apply->id])}}" class="btn btn-success py-2 text-white" style="width: 150px">Đã hoàn thành</a>
                            @else
                                @if( $status == $success['post_type_unSuccess'])
                                    <a href="{{route('user.confirm-success', ['id' => $apply->id])}}" class="btn btn-primary py-2 text-white" style="width: 150px">Đã Ứng tuyển</a>
                                @elseif($status == $success['post_type_confirm'])
                                    <a href="{{route('user.confirm-success', ['id' => $apply->id])}}" class="btn btn-warning py-2 text-white" style="width: 150px">Đã xác nhận</a>
                                @endif
                            @endif
                        </td>
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
