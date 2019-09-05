@include('admin.layouts.css')
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.header')
    <!-- /.navbar -->
    @include('admin.layouts.slide_bar')

    @yield('content')

    @include('admin.layouts.footer')
</div>
@include('admin.layouts.style')
