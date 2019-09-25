@extends('admin.layouts.main')
@section('title', 'Quản lí liên hệ')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="card-title">
                    Quản lí liên hệ
                </h3>
            </div>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contact as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->content }}</td>
                        <td class="text-center">
                            @if ( $item->status == Config::get('helper.contact_type_error') )
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#contact" data-id="{{ $item->id }}"
                                        data-status="{{ $item->status }}">
                                    Chưa liên hệ
                                </button>
                            @elseif ( $item->status == Config::get('helper.contact_type_success'))
                                <label class="btn btn-success btn-sm">
                                    Đã liên hệ
                                </label>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Đã liên hệ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Xác nhận đã liên hệ thành công
                    <form action="{{ route('contact.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="status" value="1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('script')
    @include('admin.layouts.success')
    <script>
        $('#contact').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')

            var modal = $(this)
            modal.find('.modal-body #id').val(id)
        })
    </script>
@stop
@endsection

