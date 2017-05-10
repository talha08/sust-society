@extends('frontend.layouts.default')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">{!! $title !!}</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Album</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <center>
        <br><br>
        <div class="album">
            @foreach($albums as $album)
                @if(Route::currentRouteName() != 'albumFront')
                    @if($album->id == $al->id )
                        <a href="{!! route('albumFront.search',$album->id) !!}"><button class="btn btn-success">{!! $album->album_title !!}</button></a>
                    @else
                        <a href="{!! route('albumFront.search',$album->id) !!}"><button class="btn btn-default">{!! $album->album_title !!}</button></a>
                    @endif
                @else
                    <a href="{!! route('albumFront.search',$album->id) !!}"><button class="btn btn-default">{!! $album->album_title !!}</button></a>
                @endif
            @endforeach
        </div><br>
        Photos From  <b>{!!  $al->album_title or ' All '  !!}</b> Album
        <br>
        <hr>






        <div id="bg-primary" class="panel-collapse collapse in">
            <div class="portlet-body">
                <!-- Internal panel Start -->
                <div class="row">
                    <div class="">
                        <div class="widget-panel widget-style-2 white-bg">
                            @if(!empty(count($photos)))
                                @foreach($photos as $photo)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="hovereffect">
                                            <img class="img-responsive id_check test" data-target="#myModal_{!!$photo->id!!}" data-toggle="modal"   height="200" width="220" src="{!!asset($photo->album_photo)!!}" alt="">
                                            <div class="overlay">
                                                <h2>Album - {!! $photo->album->album_title !!}</h2>
                                                <a  data-target="#myModal_{!!$photo->id!!}" data-toggle="modal" class="info">Full View</a>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- Modal -->
                                    <div id="myModal_{!!$photo->id!!}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content" >
                                                <center>
                                                    <br>
                                                    Album : {!! $photo->album->album_title !!}<br><br>
                                                    <img height="400" width="480" src='{!!asset($photo->album_photo)!!}' alt='' />
                                                </center>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info btn-xs btn-archive" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--modal -->
                                @endforeach
                            @else
                                No Photo Found!!
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Internal panel end -->
            </div>
        </div>

        <br><br><br><br>


    </center>






@stop
@section('style')
    {!! Html::style('css/album.css') !!}
@stop

@section('script')
    {{--{!! Html::script('js/multipleImage.js') !!}--}}
@stop

