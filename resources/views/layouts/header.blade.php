 <!-- Header-mobile -->
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
                <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Finder<strong>Helper</strong></a>
                </h1>
            </div>

            <div class="col-10 col-xl-10 d-none d-xl-block">
                <nav class="site-navigation text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li>
                            <a href="category.html">Category</a>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li>
                            @if(Auth::user())
                                Hello {{Auth::user()->name}}
                        <li> <a href="logout"><span class="rounded bg-danger py-2 px-3 text-white"> Log out </span></a></li>
                            @else
                                <a href="{{route('login')}}"><span class="rounded bg-primary py-2 px-3 text-white"> Sign
                                    In</span></a>
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
