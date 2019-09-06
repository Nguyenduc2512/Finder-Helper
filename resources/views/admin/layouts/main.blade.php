@include('admin.layouts.css')
<div class="wrapper" style="height: auto; min-height: 100%;">
    <!-- Navbar -->
    @include('admin.layouts.header')
    <!-- /.navbar -->
    @include('admin.layouts.slide_bar')
<div class="content-wrapper">
    @yield('content')
    </div>
    @include('admin.layouts.footer')
</div>
@include('admin.layouts.style')
