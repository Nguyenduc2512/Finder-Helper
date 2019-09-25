@extends('client.layouts.master')
@section('title', 'Contact')
@section('content')
    <div class="container" style="padding-top: 5%">
        <div class="row">
            <div class="col-md-7">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>
                            Liên hệ
                        </h4>
                    </div>
                    <form action="{{ route('user.contact') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Họ và Tên </label><span class="text-danger">*</span>
                                <input type="text" name="name" class="form-control"
                                       value="{{ Auth::user()->name }}"
                                       placeholder="Họ và Tên" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"
                                       value="{{ Auth::user()->email }}" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label><span class="text-danger">*</span>
                                <input type="number" name="phone" class="form-control"
                                       value="{{ Auth::user()->phone }}"
                                       placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <label>Cần hỗ trợ</label><span class="text-danger">*</span>
                                <textarea name="content" class="form-control" style="height: 150px"
                                          placeholder="Cần hỗ trợ" required></textarea>
                                <input type="hidden" name="status" value="0">
                            </div>
                            <button type="submit" class="btn btn-danger">Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-light mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>
                            Thông tin
                        </h4>
                    </div>
                    <div class="card-body" style="padding: 30px">
                        <p class="card-text">
                            <i class="fas fa-phone-volume"></i> Hotline: 09999999999
                        </p>
                        <p class="card-text">
                            <i class="fas fa-envelope-square"></i> Email: finderhelper@gmail.com
                        </p>
                        <p class="card-text">
                            <label>
                                <i class="fas fa-map-marker-alt"></i> 107 Nguyễn Phong Sắc, Hà Nội
                            </label>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8103267498295!2d105.78820931535475!3d21.04027399276012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab36e43cf6eb%3A0xc420d35b1d1a47ac!2zMTA3IE5ndXnhu4VuIFBob25nIFPhuq9jLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1566091545149!5m2!1svi!2s"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    @include('client.layouts.success')
@stop
@endsection
