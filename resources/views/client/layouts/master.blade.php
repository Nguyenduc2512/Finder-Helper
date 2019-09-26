@include('client.layouts.css')
@include('client.layouts.header')
<section class="content" style="background: #F6F6F6">
    @yield('content')
</section>
<!-- Footer -->
@include('client.layouts.footer')
@include('client.layouts.script')
@yield('script')
