@extends('frontend.layouts.default')
@section('content')

    <section class="grey section">
        <div class="container">
            <div class="row">


                @foreach($department as $dept)
                <div class="col-md-2 col-sm-6 col-xs-12 last">
                    <div class="shop-item-list entry">
                        <div class="">
                            <img src="{!! asset($dept->logo_path) !!}" width="80px" height="200px" alt="">

                        </div>
                        <div class="shop-item-title clearfix">
                            <h4><a href="{!! route('department', $dept->id) !!}">{!! $dept->name !!}</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left"> Total {!! \App\User::where('dept_id', $dept->id )->count() !!} Member('s)</span>
                            </div><!-- end shop-meta -->
                            <br>
                        </div><!-- end shop-item-title -->
                    </div><!-- end relative -->
                    <hr><hr>
                </div><!-- end col -->
                @endforeach



                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->



@stop
@section('style')
<style>
    .shop-item-list img{
        background: #59889a;
    }
</style>
@stop

@section('script')
@stop

