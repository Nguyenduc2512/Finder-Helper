@include('admin.layouts.css')
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.header')
    <!-- /.navbar -->
    @include('admin.layouts.slide_bar')
<div class="content-wrapper" style="min-height: 1017.2px;">
    <div class="content-header">
        <div class="container-fluid">
            @yield('content')</div>
        </div>
    </div>
    @include('admin.layouts.footer')
</div>
@include('admin.layouts.style')
