@extends('admin.layouts.main')
@section('content')
@if (Auth::user())
Xin Chào {{ Auth::user()->name }}
@endif
@endsection
