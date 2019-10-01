@extends('client.layouts.master')
@section('title', 'Nạp tiền')
@section('content')
    <div class="container" style="margin-top: 10%; padding: 50px">
        <div class="row">
            <div class="col-lg-3 column border-right">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-lg-9 column">
                <div class="profile-title">
                    <h3>@lang('messages.coin')</h3>
                </div>
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" style="margin-left: 3%">
                    @csrf
                    @if (isset(Auth::user()->id))
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @endif
                    <input type="hidden" name="ratio_id" value="1">
                    <div class="form-group">
                        <span class="pf-title">Số tài khoản <span class="text-danger">*</span></span>
                        <input type="number" name="bank" class="form-control"
                               placeholder="Số tài khoản ngân hàng" required>
                        @if($errors->first('bank'))
                            <span class="text-danger"> {{$errors->first('bank')}} </span>
                        @endif
                    </div>
                    <span class="pf-title">Tên Ngân Hàng <span class="text-danger">*</span></span>
                    <div class="pf-field">
                        <select data-placeholder="Please Select Specialism" class="chosen"
                                name="bank_id" style="display: none;">
                            @foreach($banks as $bank)
                                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="status" value="0">
                    <div class="form-group">
                        <span class="pf-title">Số tiền nạp <span class="text-danger">*</span></span>
                        <input type="text" name="money" class="form-control"
                               placeholder="Số tiền nạp"  onkeyup="this.value=FormatNumber(this.value);" required>
                        @if($errors->first('money'))
                            <span class="text-danger"> {{$errors->first('money')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <span class="pf-title">Ảnh hóa đơn <span class="text-danger">*</span></span>
                        <input type="file" name="image" class="form-control">
                        @if($errors->first('image'))
                            <span class="text-danger"> {{$errors->first('image')}} </span>
                        @endif
                    </div>
                    <div class="button-coin">
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            Hướng Dẫn
                        </button>
                        <button type="submit" class="btn btn-success btn-xs">
                            @lang('messages.coin')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hướng dẫn nạp tiền</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@section('script')
    @include('client.layouts.success')
    @include('client.layouts.format_money')
@stop
@endsection
