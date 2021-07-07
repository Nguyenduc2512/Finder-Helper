@extends('admin.layouts.main')
@section('title', 'Dánh sách công việc')
@section('titlePage', 'Quản lí công việc')
@section('content')
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
                    <th>Tên công việc</th>
                    <th># Tên người thuê</th>
                    <th>Danh mục</th>
                    <th>Số lượng</th>
                    <th>lương <i class="fas fa-coins"></i></th>
                    <th>Địa Chỉ</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($post as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->user['name'] }}</td>
                        <td>{{ $item->category['name'] }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->price }} <i class="fas fa-coins"></i></td>
                        <td>{{ $item->address }}</td>
                        <td class="text-center">
                            @if ( $item->status == Config::get('helper.post_type_inActive') )
                                <a href="{{ route('posts.edit', $item->id ) }}" class="btn btn-warning btn-sm text-white">
                                    @lang('messages.errRequest')
                                </a>
                            @elseif ( $item->status == Config::get('helper.post_type_active') )
                                <a href="{{ route('posts.edit', $item->id ) }}" class="btn btn-success btn-sm">
                                    @lang('messages.request')
                                </a>
                            @else
                                <div class="text-danger">Đã hoàn thành</div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', $item->id ) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
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
@stop
@endsection
