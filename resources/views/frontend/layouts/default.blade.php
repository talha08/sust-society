<!DOCTYPE html>
@include('frontend.includes.header')
<body>
<div id="loader">
    <div class="loader-container">
        <img src="{!! URL::asset('frontend/images/site.gif') !!}" alt="" class="loader-site">
    </div>
</div>
<div id="wrapper">

    @if(! Auth::user())
        @include('frontend.includes.topbar')
    @endif
    @include('frontend.includes.navbar')

        @yield('content')

    @include('frontend.includes.footer')
</div><!-- end wrapper -->
@include('frontend.includes.js')
</body>
</html>