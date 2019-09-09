@extends('layouts.master')
@section('title', 'Change password')
@section('content')
    <div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="card-body">
                        
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-list"></i>&nbsp; List Posts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-notes-medical"></i>&nbsp; Post a New Job
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="far fa-id-card"></i></i>&nbsp; Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-history"></i>&nbsp; History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-key"></i>&nbsp; Change Password
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-dollar-sign"></i>&nbsp; Add Coin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-info" href="#">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp; Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                @if (session('errmsg'))
                                    <p class="text-danger"> {{session('errmsg')}} </p>
                                @endif
                                <form action="{{ route('user.save-password') }}" method="post">
                                    @csrf
                                    @if (isset(Auth::user()->id))
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                    @endif
                                    <div class="form-group">
                                        <span>Old Password</span><span class="text-danger">*</span>
                                        <input type="password" name="password" class="form-control" placeholder="Old password">
                                            @if($errors->first('password'))
                                                <span class="text-danger"> {{$errors->first('password')}} </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <span>New Password</span><span class="text-danger">*</span>
                                        <input type="password" name="newpassword" class="form-control" placeholder="New passwords" >
                                            @if($errors->first('newpassword'))
                                                <span class="text-danger"> {{$errors->first('newpassword')}} </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <span>Confirm Password</span><span class="text-danger">*</span>
                                        <input type="password" name="repassword" class="form-control" placeholder="Confirm password">
                                            @if($errors->first('repassword'))
                                                <span class="text-danger"> {{$errors->first('repassword')}} </span>
                                            @endif
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger btn-lg" style="margin-left: 83%">
                                        Update
                                    </button>
                                </form> 
                            </div>
                        </div>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection