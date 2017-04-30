<!DOCTYPE html>
<html lang="en">

@include('includes.header')
<body class="pace-done fixed-sidebar skin-4">

<div id="wrapper">
@include('includes.sideBar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('includes.topMenu')

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                @if(Auth::user()->hasRole('admin'))
                    <h2 class="text-center"><b>{!! $title or "SUSTSOCIETY" !!}</b>  <br> <small>{!! Auth::user()->dept->name !!} - (Admin) </small></h2>
                @elseif(Auth::user()->hasRole('teacher'))
                    <h2 class="text-center"><b>{!! $title or "SUSTSOCIETY" !!}</b>  <br> <small>{!! Auth::user()->dept->name !!} - (Faculty)</small></h2>
                @elseif(Auth::user()->hasRole('student'))
                    <h2 class="text-center"><b>{!! $title  or "SUSTSOCIETY" !!}</b>  <br> <small>{!! Auth::user()->dept->name !!} - (Student)</small></h2>
                @endif



            </div>
        </div>


        <br><br>
         @yield('content')

         @include('includes.footer')


    </div>
</div>
      @include('includes.js')
</body>
</html>