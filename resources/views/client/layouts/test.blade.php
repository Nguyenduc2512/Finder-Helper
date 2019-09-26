<!DOCTYPE html>
<html>

<!-- Mirrored from grandetest.com/theme/jobhunt-html/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 15:49:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/chosen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
</head>
<body>

<div class="theme-layout" id="scrollup">

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
                    <span class="text-dark" style="font-size: 17px"><img src="{{ asset('images/profile.jpg') }}" alt="">
                        <i class="fas fa-caret-down" style="font-size: 14px"></i>{{ Auth::user()->name }}
                    </span>
                        <ul style="display: none;">
                            <li>
                                <a href="employer_profile.html" title=""><i class="far fa-user"></i>Thông tin cá nhân</a>
                            </li>
                            <li>
                                <a href="employer_manage_jobs.html" title=""><i class="fas fa-clipboard-list"></i></i>Quản lí công việc</a>
                            </li>
                            <li>
                                <a href="employer_change_password.html" title=""><i class="fas fa-unlock-alt"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}" title=""><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="btn-extars">
                        <ul class="account-btns">
                            <li><a href="#">Đăng Kí</a></li>
                            <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                        </ul>
                    </div><!-- Btn Extras -->
                @endif
                <nav>
                    <ul>
                        <li class="menu-item">
                            <a href="#" title="">Trang Chủ</a>
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
                </nav>
            </div>
        </div>
    </header>

    <section>
        <div class="block no-padding overlape">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec style3">
                            <img src="{{ asset('images/sn1.jpg') }}" alt="" height="500px" />
                            <div class="job-search-sec style3">
                                <div class="job-search style2">
                                    <h3>Find the career you deserve</h3>
                                    <span>Your job search starts and ends with us.</span>
                                    <div class="search-job2 style2">
                                        <form>
                                            <div class="row no-gape">
                                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="job-field">
                                                        <label>Địa điểm làm việc</label>
                                                        <input type="text" placeholder="Hà Nội" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="job-field">
                                                        <label>Ngành Nghề</label>
                                                        <select  class="chosen-city">
                                                            <option>Banking</option>
                                                            <option>Estate</option>
                                                            <option>Retail</option>
                                                            <option>Agency</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                    <button type="submit">
                                                        <i class="fas fa-search"></i>Tìm Kiếm
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- Job Search 2 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')

    <footer class="style2" style="margin-top: 10%">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <div class="about_widget">
                                <p class="text-light">Thông tin liên hệ</p>
                                <span>Địa chỉ: 107 Nguyễn Phong Sắc, Hà Nội</span>
                                <span>Điện thoại: 0123456789</span>
                                <span>Email: Email@gmail.com</span>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <h3 class="footer-title">Menu</h3>
                            <div class="link_widgets3 nolines">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" title="">Trang Chủ </a>
                                        <a href="#" title="">Công Việc</a>
                                        <a href="#" title="">Giới Thiệu</a>
                                        <a href="#" title="">Liên Hệ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 column">
                        <div class="widget">
                            <h3 class="footer-title">Google Map</h3>
                            <div class="subscribe_widget">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8103267498295!2d105.78820931535475!3d21.04027399276012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab36e43cf6eb%3A0xc420d35b1d1a47ac!2zMTA3IE5ndXnhu4VuIFBob25nIFPhuq9jLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1566091545149!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<script src="{{ asset('js/client/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/client/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/client/select-chosen.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/client/script.js') }}" type="text/javascript"></script>
</body>

</html>

