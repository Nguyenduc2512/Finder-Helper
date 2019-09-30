@extends('client.layouts.master')
@section('title', 'Liên hệ')
@section('content')
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 column">
                        <div class="contact-form">
                            <h3>Liên Hệ</h3>
                            <form action="{{ route('user.contact') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Họ và Tên</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Họ và Tên" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Email</span>
                                        <div class="pf-field">
                                            <input type="email" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Số điện thoại</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Số điện thoại" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Cần tư vấn</span>
                                        <div class="pf-field">
                                            <textarea name="content" placeholder="Cần tư vấn" required></textarea>
                                            <input type="hidden" name="status" value="0">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" style="margin-left: 25%">Gửi liên hệ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 column">
                        <div class="contact-textinfo">
                            <h3>Thông tin</h3>
                            <ul>
                                <li><i class="fas fa-phone-volume"></i><span>0934 343 343</span></li>
                                <li><i class="fas fa-envelope-square"></i><span>email@gmail.com</span></li>
                                <li><i class="fas fa-map-marker-alt"></i><span>107 Nguyễn Phong Sắc, Hà Nội</span></li>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8103267498295!2d105.78820931535475!3d21.04027399276012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab36e43cf6eb%3A0xc420d35b1d1a47ac!2zMTA3IE5ndXnhu4VuIFBob25nIFPhuq9jLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1566091545149!5m2!1svi!2s"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('script')
    @include('client.layouts.success')
@stop
@endsection
