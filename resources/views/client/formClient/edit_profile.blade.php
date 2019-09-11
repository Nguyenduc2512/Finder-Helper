@extends('client.layouts.master')
@section('title', 'Edit-Profile')
@section('content')
    <div class="container" style="margin-top: 3%">
        <div class="row">
            <div class="col-md-4">
                @include('client.layouts.menu_bar')
            </div>
            <div class="col-md-8" id="my-profile">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-header">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body" id="card-body-profile">
                        <form action="{{ route('user.update-profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset(Auth::user()->id))
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                            @endif
                            <img src="{{ asset(Auth::user()->avatar) }}" 
                                id="avatar-profile" class="img-responsive">
                            <div class="form-group" id="form-profile">
                                @if($errors->first('avatar'))
                                    <span class="text-danger"> {{$errors->first('avatar')}} </span>
                                @endif
                                <input type="file" name="avatar" id="" class="btn btn-outline-info">
                            </div>
                            <div class="row">
                                <div class="col-md-9" style="margin-top : 5%;">
                                    <div class="form-group">
                                        <span>Name</span>
                                        <input type="text" name="name" class="form-control" placeholder="Name" 
                                            value="{{ Auth::user()->name }}" rows="10">
                                        @if($errors->first('name'))
                                            <span class="text-danger"> {{$errors->first('name')}} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <span>Email</span>
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                            value="{{ Auth::user()->email }}">
                                        @if($errors->first('email'))
                                            <span class="text-danger"> {{$errors->first('email')}} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <span>Phone</span>
                                        <input type="number" name="phone" class="form-control" placeholder="Phone"
                                            value="{{ Auth::user()->phone }}" id="phone">
                                        <span id="err" class="text-danger"></span>
                                        @if($errors->first('phone'))
                                            <span class="text-danger"> {{$errors->first('phone')}} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <span>Date of Birth</span>
                                        <input type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth"
                                            value="{{ Auth::user()->date_of_birth }}">
                                        @if($errors->first('date_of_birth'))
                                            <span class="text-danger"> {{$errors->first('date_of_birth')}} </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <span>Gender</span><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" 
                                                @if (Auth::user()->gender == $gender['gender_type_male'] )
                                                    Checked
                                                @endif
                                                value="1">
                                            <label class="form-check-label" for="">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" 
                                                @if (Auth::user()->gender == $gender['gender_type_female'] )
                                                    Checked
                                                @endif
                                                value="2">
                                            <label class="form-check-label" for="">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" 
                                                @if (Auth::user()->gender == $gender['gender_type_other'])
                                                    Checked
                                                @endif
                                                value="3">
                                                <label class="form-check-label" for="">Other</label>
                                        </div>
                                            @if($errors->first('gender'))
                                                <span class="text-danger"> {{$errors->first('gender')}} </span>
                                            @endif
                                    </div>
                                       <button type="submit" class="btn btn-outline-danger">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('client.layouts.js')   
@endsection