@extends('layouts.master')
@section('title', 'job-detail')
@section('content')
<div class="menuDetail">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-info" href="#">Trang chủ </a>
        </li>
        <li class="nav-item" id="nav-reponsive">
            <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-info" href="#">Chi tiết công việc</a>
        </li>
        <li class="nav-item" id="nav-reponsive">
            <a class="nav-link">/</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Dọn nhà, nấu cơm cho gia đình</a>
        </li>
    </ul>
</div>
<!--detail-job -->
<div class="detail-job">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Thông tin tuyển nhanh</h5>
                    </div>
                    <div class="flex-container">
                        <div class="card-body">
                            <p class="card-text"><b>Nghề nghiệp:</b> Giúp việc nhà</p>
                            <p class="card-text"><b>Yêu cầu giới tính:</b> Nữ</p>
                            <p class="card-text"><b>Số lượng:</b> 2</p>
                            <p class="card-text"><b>Địa điểm:</b> Cầu Giấy, Hà Nội</p>
                            <p class="card-text"><b>Số điện thoại: </b>0123456789</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Yêu cầu giới tính:</b> Nữ</p>
                            <p class="card-text"><b>Thời gian:</b> 8h</p>
                            <p class="card-text"><b>Ngày đăng tuyển:</b> 20/08/2019</p>
                            <a href="#" class="btn btn-danger btn-apply">Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Mô tả công việc</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="line-height: 30px;">
                            - Dọn nhà 3 tầng, giặt chăn ga gối đệm.<br>
                            - Nấu cơm trưa.<br>
                            - Chiều đón cháu nhỏ học ở trường mẫu giáo.
                        </p>
                    </div>
                </div>
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Quyền lợi được hưởng</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="line-height: 30px;">
                            - Lương : 30k/ 1h.<br>
                            - Ăn trưa cùng gia đình.<br>
                            - Nhận quà từ gia đình sau khi tan làm.<br>
                            - Có thể về sớm nếu làm xong việc sớm, hết giờ thì về không bắt buộc làm thêm giờ.
                        </p>
                    </div>
                </div>
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Yêu cầu công việc</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="line-height: 30px;">
                            - Nữ tuổi từ 18-22.<br>
                            - Nhanh nhẹn, nhiệt tình.<br>
                            - Nấu ăn ngon.<br>
                            - Trung thực, thật thà.
                        </p>
                    </div>
                </div>
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Thông tin liên hệ</h5>
                    </div>
                    <div class="flex-container-contact">
                        <div class="card-body">
                            <p class="card-text"><b>Người tuyển dụng: </b></p>
                            <p class="card-text"><b>Địa điểm:</b></p>
                            <p class="card-text"><b>Số điện thoại: </b></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Nguyễn thị A</p>
                            <p class="card-text">Cầu Giấy, Hà Nội</p>
                            <p class="card-text">0123456789</p>
                            <a href="#" class="btn btn-danger btn-apply">Ứng tuyển ngay</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header bg-transparent border-info">
                        <h5>Danh sách công việc tương tự</h5>
                    </div>
                    <div class="card-body" id="card-body">
                        <a class="nav-link" style="font-size: 18px;" href="#" data-toggle="tooltip" title="Giúp việc nhà">Giúp việc nhà <br>
                            <span class="text-dark" style="font-size: 15px;">Cần người giúp việc nhà, nấu cơm...</span>
                        </a>
                        <p class="card-text"><span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>&nbsp;35k/1h</span>
                        <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>&nbsp;20/08/2019</span>
                        </p>
                    </div>
                    <div class="card-body" id="card-body">
                
                        <a class="nav-link" style="font-size: 18px;" href="#" data-toggle="tooltip" title="Giúp việc nhà">Giúp việc nhà <br>
                                <span class="text-dark" style="font-size: 15px;">Cần người giúp việc nhà, nấu cơm...</span>
                        </a>
                        <p class="card-text">
                            <span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>&nbsp;35k/1h</span>
                        <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>&nbsp;20/08/2019</span>
                        </p>
                    </div>
                    <div class="card-body" id="card-body">
                        <a class="nav-link" style="font-size: 18px;" href="#" data-toggle="tooltip" title="Giúp việc nhà">Giúp việc nhà <br>
                            <span class="text-dark" style="font-size: 15px;">Cần người giúp việc nhà, nấu cơm...</span>
                        </a>
                        <p class="card-text">
                            <span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>&nbsp;35k/1h</span>
                            <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>&nbsp;20/08/2019</span>
                        </p>
                    </div>
                    <div class="card-body" id="card-body">
                        <a class="nav-link" style="font-size: 18px;" href="#" data-toggle="tooltip" title="Giúp việc nhà">Giúp việc nhà <br>
                            <span class="text-dark" style="font-size: 15px;">Cần người giúp việc nhà, nấu cơm...</span>
                        </a>
                        <p class="card-text">
                            <span class="text-danger" id="span-card-text"><i class="fas fa-dollar-sign"></i>&nbsp;35k/1h</span>
                            <span class="text-danger" id="span-time"><i class="fas fa-clock"></i>&nbsp;20/08/2019</span>
                        </p>
                        <a href="#" class="nav-link">Xem tất cả..</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection