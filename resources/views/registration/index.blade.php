@extends('frontend.layouts.default')
@section('content')



    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Event Registration</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Event Registration</a></li>
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
                @if($regis->count() != 0)
                    @foreach($regis as $reg)
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn">
                        <div class="content-box big ch-item bottom-pad-small">
                            <div class="content-box-info">
                                <a href="{!! route('registration.show',$reg->id ) !!}">
                                    {!!  Html::image($reg->banner, 'alt', array( 'width' => 600, 'height' => 300 )) !!}
                                    </br></br>
                                    <h3 class="m-b-xs"><strong>{!! $reg->headline !!}</strong></h3>
                                    <div class="font-bold">Venue - {!! $reg->venue !!}</div>
                                    <div class="font-bold">Start at - {!! $reg->start_time !!}</div>
                                    <div class="font-bold">End at - {!! $reg->end_time !!}</div>
                                </a>
                            </div>
                            <div class="border-bottom margin-top30">
                            </div>
                            <div class="border-bottom">
                               <center>
                                   <a class="btn btn-xs btn-white" href="{!! route('event.details',$reg->event_meta_data ) !!}" ><i class="fa fa-envelope"></i> Event Details </a>
                                   <a class="btn btn-xs btn-white" href="{!! route('registration.show',$reg->id ) !!}" ><i class="fa fa-users"></i> Registered Lists </a>
                                   @if(App\Registration::where('event_id' , $reg->id)->pluck('user_id') == Auth::user()->id)
                                       <a class="btn btn-xs btn-white" data-toggle="modal" href="#myModal21" style="color: #0d5613; background: #cece1d;"><i class="fa fa-check-circle"></i> Registered </a>
                                   @else
                                       <a class="btn btn-xs btn-white" data-toggle="modal" href="#myModal2"><i class="fa fa-check-circle"></i> Register </a>
                                   @endif
                               </center>
                            </div>
                        </div>
                    </div>










                                <!-- Modal For Already reg. notifi -->
                                <div class="modal inmodal" id="myModal21" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content animated flipInY">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title text-center">Registration Status</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-center" style="color: darkgoldenrod">You are alreay Registered on this event</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Modal -->









                                <!-- Modal For Registration -->
                                <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content animated flipInY">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title">Registration Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-center" style="color: darkgoldenrod">Are you sure to join this event !! </h3>
                                                {!! Form::open(array('route' => 'registration.register', 'method' => 'post')) !!}

                                                {!!  Form::hidden('user', Auth::user()->id) !!}
                                                {!!  Form::hidden('event', $reg->id) !!}

                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                                {!! Form::submit('Yes, I am sure.', array('class' => 'btn btn-success')) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Modal -->





                    @endforeach
                @else
                    No Event for Registration
                @endif

            </div>
        </div>
    </div>
    <!-- /Main Content -->




@stop


@section('style')
    <style>
        .contact-box.center-version > a img {
            width: 400px;
            height: 200px;
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
@stop

@section('script')
@stop

