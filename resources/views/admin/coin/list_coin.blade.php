@extends('admin.layouts.main')
@section('title', 'Quản lí nạp tiền')
@section('titlePage', 'Quản lí nạp tiền')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h3 class="card-title">
                        Danh sách nạp tiền
                    </h3>
                </div>
                <div class="col-4">
                    <div class="row">
                        @foreach($ratio as $ration)
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <span>Tiền (vnd)</span>
                                    <input type="text" class="form-control" value="{{ $ration->money }}"
                                           name="money" disabled>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <span>Coin</span>
                                    <input type="text" class="form-control" value="{{ $ration->coin }}"
                                           name="coin" disabled>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <span>Tỉ lệ</span>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#ration" data-money="{{ $ration->money }}"
                                        data-coin="{{ $ration->coin }}" data-id="{{ $ration->id }}">
                                    <i class="fas fa-cog"></i>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Tài khoản</th>
                    <th>STK</th>
                    <th>Ngân hàng</th>
                    <th>Tiền nạp</th>
                    <th>Ngày</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($coin as $item)
                    <tr>
                        <td>{{ $item->user['name'] }}</td>
                        <td>{{ $item->bank }}</td>
                        <td>{{ $item->banks['name']}}</td>
                        <td>{{ $item->money }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td class="text-center">
                            @if ( $item->status == 0 )
                                <a href="{{ route('coins.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    @lang('messages.errRequest')
                                </a>
                            @elseif ( $item->status == 1)
                                <label class="btn btn-success btn-sm">
                                    @lang('messages.request')
                                </label>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="ration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thay đổi tỉ lệ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('coins.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="" class="col-form-label">Tiền :</label>
                            <input type="number" class="form-control" id="money" name="money" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Coin :</label>
                            <input type="text" class="form-control" id="coin" name="coin" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('script')
    @include('admin.layouts.success')
    <script>
        $('#ration').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var money = button.data('money')
            var coin = button.data('coin')

            var modal = $(this)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #money').val(money)
            modal.find('.modal-body #coin').val(coin)
        })
    </script>
@stop
@endsection

