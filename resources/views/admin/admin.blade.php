@extends('admin.layouts.main')
@section('content')

    Login success {{ auth('admin')->user()->name }}

@endsection
