@extends('admin.layouts.main')
@section('title', 'Quản lí nạp tiền')
@section('titlePage', 'Quản lí nạp tiền')
@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Nạp tiền cho tài khoản</h3>
        </div>
        <form role="form" action="{{ route('coins.update') }}" method="post">
            @csrf
            @if (isset($coin))
                <input type="hidden" name="id" value="{{ $coin->id }}">
            @endif
                <input type="hidden" name="user_id" value="{{ $coin->user_id }}">
                <input type="hidden" name="status" value="1">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Số tài khoản</label>
                    <input type="text" class="form-control" id="" name="bank" value="{{ $coin->bank }}" readonly>
                </div>
                <div class="form-group">
                    <label for="">Ngân hàng</label>
                    <input type="text" class="form-control" id="" readonly value="{{ $coin->banks['name'] }}">
                </div>
                <div class="form-group">
                    <label for="">Tiền nạp</label>
                        <input type="text" class="form-control" id="" name="money" value="{{ $coin->money }}" readonly>
                </div>
                <div class="form-group">
                    <label for="">Tiền Coin</label>
                    <input type="text" class="form-control" name="coin" id="" value="{{ $ratio }}" readonly>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Nạp tiền</button>
                <a href="{{ route('coins.index') }}" class="btn btn-warning btn-cancel">Hủy</a>
            </div>
        </form>
    </div>
@section('script')
    <script>
        $('.btn-cancel').on('click', function(){
            swal({
                text: "@lang('messages.error')",
                icon: "success",
                button: true,
                dangerMode: true,

            });
        });
    </script>
@stop
@endsection
