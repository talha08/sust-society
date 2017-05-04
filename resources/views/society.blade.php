@extends('frontend.layouts.default')
@section('content')



    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                @foreach($department as $dept)
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                    <div class="content-box big ch-item bottom-pad-small">
                        <div class="content-box-info">
                            <img src="{!! asset($dept->logo_path) !!}"  width="130px" height="170px" alt="">
                            <br>
                            <h4><a href="{!! route('department', $dept->id) !!}">{!! $dept->name !!}</a></h4>
                            <div class=" text-center">
                                <span> Total {!! \App\User::where('dept_id', $dept->id )->count() !!} Member('s)</span>
                            </div><!-- end shop-meta -->
                        </div>
                        <div class="border-bottom margin-top30">
                        </div>
                        <div class="border-bottom">
                        </div>
                    </div>
                </div>
                @endforeach
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

