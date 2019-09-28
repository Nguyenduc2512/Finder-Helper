@extends('client.layouts.test')
@section('title', 'Thông tin cá nhân')
@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <aside class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </aside>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>Lịch sử</h3>
                </div>
                <div class="cand-single-user" style="margin-top: 10%">
                    <div class="can-detail-s">
                        @if($rule == Auth::user()->rules)
                            @include('client.userHelper.profile')
                        @else
                            @include('client.userFinder.profile')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
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
