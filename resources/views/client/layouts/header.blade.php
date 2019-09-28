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
                            <a href="{{route('user.history')}}" title=""><i class="fas fa-clipboard-list"></i></i>Quản lí công việc</a>
                        </li>
                        <li>
                            <a href="{{route('user.coin')}}" title=""><i class="fas fa-coins"></i></i>{{ Auth::user()->coin }}</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" title=""><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            @else
                <div class="btn-extars">
                    <ul class="account-btns">
                        <li><a href="{{route('sign')}}">Đăng Kí</a></li>
                        <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                    </ul>
                </div><!-- Btn Extras -->
            @endif
            <nav>
                <ul>
                    <li class="menu-item">
                        <a href="{{route('home')}}" title="">Trang Chủ</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('all-post') }}" title="">Công Việc</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" title="">Giới Thiệu</a>
                    </li>
                    <li class="menu-item">

                        <a href="{{route('user.contact')}}" title="">Liên Hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
