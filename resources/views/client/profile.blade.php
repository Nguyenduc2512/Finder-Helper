@extends('client.layouts.test')
@section('title', 'Thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 10%; padding: 50px">
        <div class="row">
            <aside class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </aside>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>Thông tin cá nhân</h3>
                </div>
                <div class="cand-single-user" style="margin-top: 10%">
                    <div class="can-detail-s">
                        <div class="cst"><img src="{{ asset(Auth::user()->avatar) }}" alt=""></div>
                        <img src="{{ asset(Auth::user()->identification_back) }}" alt="" class="img-cmt" width="200">
                        <img src="{{ asset(Auth::user()->identification) }}" alt="" class="img-cmnd" width="200">

                       <div style="margin-top: 15%">
                           <h3>{{ Auth::user()->name }}</h3>
                           <P>
                               Giới tính:
                               @if ( Auth::user()->gender == $gender['gender_type_male'] )
                                   Nam
                               @elseif ( Auth::user()->gender == $gender['gender_type_female'] )
                                   Nữ
                               @else
                                   Khác
                               @endif
                           </P>
                           <p>Tiền: <i class="fas fa-dollar-sign"></i>{{ Auth::user()->coin }}</p>
                           <span>Số điện thoại: {{ Auth::user()->phone }}</span>
                           <span>Email: {{ Auth::user()->email }}</span>
                           <span>Số CMND: {{ Auth::user()->identification_code}}</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>>
@section('script')
    <script>
        $('.btn-remove').on('click', function(){
            swal({
                text: "Bạn có chắc chắn muốn xoá bài viết này ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = $(this).attr('linkurl');
                        swal("Bạn đã xóa thành công bài viết này!", {
                            icon: "success",
                        });
                    }  else {
                        swal("Hủy thành công!");
                    }
                });
        });
    </script>
    @include('client.layouts.success')
@stop
@endsection
