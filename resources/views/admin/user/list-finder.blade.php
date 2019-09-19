@extends('admin.layouts.main')
@section('title', 'List cate')
@section('titlePage', 'Quản lí danh mục')
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
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>AVATAR</th>
                    <th>GENDER</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td><img src="{{ asset($item->avatar) }}" alt="" width="100px"></td>
                        <td>
                            @if ( $item->gender == $gender['gender_type_male'] )
                                Male
                            @elseif ( $item->gender == $gender['gender_type_female'] )
                                FeMale
                            @else
                                Other
                            @endif
                        </td>
                        <td>
                            <a href="javascript:;" class="btn btn-danger btn-sm btn-remove"
                               linkurl="#">
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
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>AVATAR</th>
                    <th>GENDER</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{--    @include('admin.user.list_user')--}}

@endsection
