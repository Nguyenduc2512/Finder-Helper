<title>@yield('title')</title>
@include('client.layouts.css')
<div class="theme-layout" id="scrollup">
    @include('client.layouts.header')
{{--    @include('client.layouts.search-slide')--}}
    @yield('content')
    @include('client.layouts.footer')
</div>
@include('client.layouts.script')
@yield('script')
