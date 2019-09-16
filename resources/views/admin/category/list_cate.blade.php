@extends('admin.layouts.main')
@section('title', 'List cate')
@section('titlePage', 'Quản lí danh mục')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Danh sách danh mục
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" 
        data-target="#addCate" >
          Add Category
        </button>
      </h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>Created_at</th>
          <th>Action</th>
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
              <a href="{{ route('admin.delete-cate', $cate->id) }}" class="btn btn-danger btn-sm btn-remove">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Created_at</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
@include('admin.category.formCate')
@endsection