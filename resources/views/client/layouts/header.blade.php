<div class="responsive-header four">
    <div class="responsive-menubar">
        <div class="res-logo"><a href="index-2.html" title=""><img src="{{ asset('images/logo6.png') }}" alt="" /></a></div>
        <div class="menu-resaction">
            <div class="res-openmenu">
                <img src="{{ asset('images/icon5.png') }}" alt="" />
            </div>
            <div class="res-closemenu">
                <img src="{{ asset('images/icon6.png') }}" alt="" />
            </div>
        </div>
    </div>
    <div class="responsive-opensec">
        <div class="btn-extars">
            <ul class="account-btns">
                <li class="signup-popup"><a title=""><i class="fas fa-key"></i>Sign Up</a></li>
                <li class="signin-popup"><a title=""><i class="fas fa-sign-in-alt"></i>Login</a></li>
            </ul>
        </div><!-- Btn Extras -->
        <div class="responsivemenu">
            <ul>
                <li class="menu-item">
                    <a href="#" title="">Trang chủ</a>
                </li>
                <li class="menu-item">
                    <a href="#" title="">Công Việc</a>
                </li>
                <li class="menu-item">
                    <a href="#" title="">Giới Thiệu</a>
                </li>
                <li class="menu-item">
                    <a href="#" title="">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="style4">
    <div class="menu-sec">
        <div class="container">
            <div class="logo">
                <a href="index-2.html" title="">
                    <img src="{{ asset('images/logo6.png') }}" alt=""/>
                </a>
            </div><!-- Logo -->
            @if (Auth::user())
                <div class="btns-profiles-sec">
                    <span class="text-dark" style="font-size: 17px">
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="">
                        <i class="fas fa-caret-down" style="font-size: 14px"></i>{{ Auth::user()->name }}
                    </span>
                    <ul style="display: none;">
                        <li>
                            <a href="{{ route('user.profile') }}" title=""><i class="far fa-user"></i>Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fas fa-clipboard-list"></i></i>Quản lí công việc</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fas fa-dollar-sign"></i>{{ Auth::user()->coin }}</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" title=""><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            @else
                <div class="btn-extars">
                    <ul class="account-btns">
                        <a href="#" title="" class="post-job-btn"><i class="fas fa-plus"></i>Post Jobs</a>
                        <li><a href="#">Đăng Kí</a></li>
                        <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                    </ul>
                </div><!-- Btn Extras -->
            @endif
            <nav>
                <ul>
                    <li class="menu-item">
                        <a href="/" title="">Trang Chủ</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('all-post') }}" title="">Công Việc</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Giới Thiệu</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('user.contact') }}" title="">Liên Hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
