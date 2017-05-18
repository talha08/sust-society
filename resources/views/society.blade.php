@extends('frontend.layouts.default')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Society List</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li></li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Society</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                @foreach($society as $dept)
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                    <div class="content-box big ch-item bottom-pad-small">
                        <div class="content-box-info">
                            <img src="{!! asset($dept->logo_path) !!}"  width="170px" height="170px" alt="">
                            <br>
                            <h4><a href="{!! route('department', $dept->id) !!}">{!! $dept->name !!}</a></h4>
                            <div class=" text-center">
                                <span> Total {!! \App\User::where('dept_id', $dept->id )->count() !!} Member('s)</span>

                                 @if($dept->status == true)
                                    <p>Society Status:<em> Rnning</em></p>
                                 @else
                                    <p>Society Status: <em> Initialized</em> </p>
                                 @endif

                            </div><!-- end shop-meta -->

                        </div>
                        <div class="border-bottom margin-top30">
                        </div>
                        <div class="border-bottom">
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    {!! $society->render() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->





@stop
@section('style')
<style>
    .author-content, div.content-box.big, #cn-tabs .service, .comment-des, .contact-box{
        background: #ddd;
    }
</style>
@stop

@section('script')
@stop

