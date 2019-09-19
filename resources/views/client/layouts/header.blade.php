 <!-- Header-mobile -->
 @include('client.layouts.css')
 @include('client.layouts.script')
 <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<!-- Header -->
<header class="site-navbar py-1" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0"><a href="{{route('home')}}" class="text-black h2 mb-0">Finder<strong>Helper</strong></a>
                </h1>
            </div>

            <div class="col-10 col-xl-10 d-none d-xl-block">
                <nav class="site-navigation text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="{{route('home')}}">@lang('messages.home')</a></li>
                        <li>
                            <a href="#">@lang('messages.postJob')</a>
                        </li>
                        <li><a href="about.html">@lang('messages.about')</a></li>
                        <li><a href="contact.html">@lang('messages.contact')</a></li>
                        <li class="has-children">
                            @if (Auth::user())
                                <span class="caret">Hello {{Auth::user()->name}}</span>
                                <ul class="dropdown">
                                    <li><a href="{{route('user.profile')}}">@lang('messages.profile')</a></li>
                                    <li>
                                        <a href="{{ route('user.change-password') }}">@lang('messages.changePassword')</a>
                                    </li>
                                    <li><a href="{{route('logout')}}">@lang('messages.logout')</a></li>
                                </ul>
                            @else
                                <a href="{{route('login')}}"><span class="rounded bg-primary py-2 px-3 text-white">@lang('messages.login')</span></a>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-6 col-xl-2 text-right d-block">

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a></div>

            </div>
        </div>
    </div>

</header>
