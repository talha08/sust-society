<!DOCTYPE html>
@include('frontend.includes.header')
{{--<body class="home">--}}
<body class="home boxed" data-gr-c-s-loaded="true" style=" overflow-y: auto; background-image: url({!! asset('frontend/img/whitey.png'); !!})" >

    <!-- Loader -->
    <div class="page-mask">
        <div class="page-loader">
            <div class="spinner"></div>
            Loading...
        </div>
    </div>
    <!-- /Loader -->

    <!-- Wrap -->
    <div class="wrap">
        @include('frontend.includes.navbar')
         <!-- Main Section -->
         <section id="main">
             {{--Web content Here--}}
             @yield('content')
         </section>
        <!-- /Main Section -->
        @include('frontend.includes.footer')
        @include('frontend.includes.regisLoginModal')
                <!-- Scroll To Top -->
        <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- /Wrap -->

    {{--@include('frontend.includes.style')--}}
    @include('frontend.includes.js')
</body>
</html>