@extends('admin.layouts.main')
@section('title', 'Dánh sách thành viên')
@section('titlePage', 'Quản lí thành viên')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách thành viên
            </h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th># Tên </th>
                    <th>Email</th>
                    <th>@lang('messages.phone')</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>Tài Khoản</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->date_of_birth}}</td>
                        <td>
                            @if ( $item->gender == $gender['gender_type_male'] )
                                @lang('messages.male')
                            @elseif ( $item->gender == $gender['gender_type_female'] )
                                @lang('messages.male')
                            @else
                                Other
                            @endif
                        </td>

                        <td >
                            @if ( $item->rules == $gender['user_type_finder'] )
                                <label class="btn btn-danger">@lang('messages.helper')</label>
                            @elseif ( $item->rules == $gender['user_type_helper'] )
                                <label class="btn btn-success">@lang('messages.finder')</label>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
@stop
@endsection
