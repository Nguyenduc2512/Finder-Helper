@extends('admin.layouts.main')
@section('title', 'Dánh sách công việc')
@section('titlePage', 'Quản lí công việc')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Danh sách công việc đã duyệt
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
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($post as $item)
          <tr>
            <td>{{ $item->id }}# &nbsp; {{ $item->user['name'] }}</td>
            <td>{{ $item->category['name'] }}</td>
            <td>{{ $item->amount }}</td>
            <td>{{ $item->price }}k/h</td>
            <td>{{ $item->address }}</td>
            <td>
              {{ $item->status == Config::get('helper.post_type_active') ? 'Đã duyệt' : '' }}
            </td>
            <td> 
              <a href="" class="btn btn-info btn-sm">
                Xem chi tiết
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