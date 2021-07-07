@extends('auth.layouts.master')
@section('title', 'feedback')
@section('content')
<div class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" id="info-user">
                            <div class="col-6">
                                <div class="row">
                                    <div style="margin-left: 3%;">
                                        <p class="card-text"><b>Họ Và Tên: </b>Nguyễn Thị A</p>
                                        <p class="card-text"><b>Số điện thoại:</b> 0123456789</p>
                                        <p class="card-text"><b>Giới Tính: </b>Nữ</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <p><b>Trạng thái: </b>Đã hoàn thành công việc</p>
                                <p><b>Tiền lương:</b> 100k</p>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                    Nhận xét
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endfeedback -->
<!-- modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" id="width-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feedback helper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">User Name Finder</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="User name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Content feedback</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <section class='rating-widget'>
                        <!-- Rating Stars Box -->
                        <div class='rating-stars'>
                            <ul id='stars'>
                                <label>Vote</label>
                                <li class='star' title='Bạn không hài lòng' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Hài lòng' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Tuyệt' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Tuyệt vời' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Rât tuyệt vời' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                            </ul>
                        </div>

                    </section>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary">Gửi</button>
            </div>
        </div>
    </div>
</div>
@endsection
