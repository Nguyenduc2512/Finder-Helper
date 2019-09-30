@extends('auth.layouts.login')
@section('title', 'Đăng nhập')
@section('content')
<div class="center-sign">

    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label>Email *</label>
                    <div class="input-group">
                        <input name="email" type="text" class="form-control form-control-lg" />
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">Password *</label>


                    </div>
                    <div class="input-group">
                        <input name="pwd" type="password" class="form-control form-control-lg" />
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="checkbox-custom checkbox-default">
                            <input id="RememberMe" name="rememberme" type="checkbox"/>
                            <label for="RememberMe" class="card-link">Remember Me</label>

                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                        <a href="" style="color: #999" class="float-right">Lost Password?</a>

                    </div>
                </div>

                <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                    <span>or</span>
                </span>

                <div class="mb-1 text-center">
                    <a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-google mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-google"></i></a>
                </div>

                <p class="text-center">Don't have an account yet? <a href="index.html">Sign Up!</a></p>

            </form>
        </div>
    </div>


</div>
@endsection
