@extends('admin.layouts.main')
@section('title', 'Quản lí danh mục')
@section('titlePage', 'Quản lí danh mục')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title" style="float: right">
        Danh sách danh mục
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
        data-target="#addCate" >
          Thêm danh mục
        </button>
      </h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Tên danh mục</th>
          <th>Ngày tạo</th>
          <th>Hành dộng</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($category as $cate)
          <tr>
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->created_at }}</td>
            <td>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                  data-target="#edit" data-cate-id="{{ $cate->id }}" data-cate-name="{{ $cate->name}}">
                  <i class="fa fa-edit"></i>
              </button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@include('admin.category.formCate')
@section('script')
    @include('admin.layouts.success')
<script type="text/javascript">

	$('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var name = button.data('cate-name')
        var id = button.data('cate-id')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
  })

</script>

<script>

    (function() {
        'use strict';
        window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {

                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }

                form.classList.add('was-validated');
              }, false);
            });

        }, false);

    })();

</script>
@stop
@endsection
