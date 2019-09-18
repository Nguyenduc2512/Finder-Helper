@extends('admin.layouts.main')
@section('title', 'Duyệt bài đăng')
@section('titlePage', 'Duyệt bài đăng')
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
          <th>Lương</th>
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
            <td>{{ $item->status == Config::get('helper.post_type_inActive') ? 'Chờ duyệt' : '' }}</td>
            <td> 
              <a href="{{ route('posts.edit', $item->id) }}" class="btn btn-info btn-sm">Duyệt bài</a>
              <a href="javascript:;" class="btn btn-danger btn-sm btn-remove"
                linkurl="{{ route('posts.destroy', $item->id) }}">
                <i class="far fa-trash-alt"></i>
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