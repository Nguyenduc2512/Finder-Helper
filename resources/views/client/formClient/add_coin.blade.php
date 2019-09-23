@extends('client.layouts.master')
@section('title', 'Nạp tiền')
@section('content')
    <div class="container" style="margin-top: 3%">
        <div class="row">
            <div class="col-md-4">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>Nạp Tiền</h4>
                        @if ( session('succes'))
                            <span class="text-danger">{{ session('succes') }}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                {{--                                @if (session('errmsg'))--}}
                                {{--                                    <p class="text-danger"> {{session('errmsg')}} </p>--}}
                                {{--                                @endif--}}
                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    @if (isset(Auth::user()->id))
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    @endif
                                    <input type="hidden" name="ratio_id" value="1">
                                    {{--                                    @if (isset(Auth::user()->id))--}}
                                    {{--                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">--}}
                                    {{--                                    @endif--}}
                                    <div class="form-group">
                                        <span>Số tài khoản </span><span class="text-danger">*</span>
                                        <input type="number" name="bank" class="form-control"
                                               placeholder="Số tài khoản ngân hàng" required>
                                        {{--                                        @if($errors->first('password'))--}}
                                        {{--                                            <span class="text-danger"> {{$errors->first('password')}} </span>--}}
                                        {{--                                        @endif--}}
                                    </div>
                                    <div class="form-group">
                                        <span>Tên Ngân Hàng </span><span class="text-danger">*</span>
                                        <select name="bank_id" id="" class="form-control" required>
                                            <option>Chọn ngân hàng</option>
                                            @foreach($banks as $bank)
                                                <option value="{{ $bank->id }}" >{{ $bank->name }}</option>
                                            @endforeach
                                        </select>
                                        {{--                                        @if($errors->first('newpassword'))--}}
                                        {{--                                            <span class="text-danger"> {{$errors->first('newpassword')}} </span>--}}
                                        {{--                                        @endif--}}
                                    </div>
                                    <input type="hidden" name="status" value="0">
                                    <div class="form-group">
                                        <span>Số tiền nạp </span><span class="text-danger">*</span>
                                        <input type="number" name="money" class="form-control"
                                               placeholder="Số tiền nạp" required>
                                        {{--                                        @if($errors->first('repassword'))--}}
                                        {{--                                            <span class="text-danger"> {{$errors->first('repassword')}} </span>--}}
                                        {{--                                        @endif--}}
                                    </div>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                            data-target="#exampleModalCenter" style="margin-left: 64%">
                                        Hướng Dẫn
                                    </button>
                                    <button type="submit" class="btn btn-outline-success" >
                                        Nạp Tiền
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
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
@stop
