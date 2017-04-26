@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                @if($regis->count() != 0)
                    @foreach($regis as $reg)

                        <div class="col-lg-6">
                            <div class="contact-box center-version">

                                <a href="{!! route('registration.show',$reg->id ) !!}">
                                    {!!  Html::image($reg->banner, 'alt', array( 'width' => 200, 'height' => 200 )) !!}
                                    <h3 class="m-b-xs"><strong>{!! $reg->headline !!}</strong></h3>
                                    <div class="font-bold">Venue - {!! $reg->venue !!}</div>
                                    <div class="font-bold">Start at - {!! $reg->start_time !!}</div>
                                    <div class="font-bold">End at - {!! $reg->end_time !!}</div>
                                </a>

                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        <a class="btn btn-xs btn-white" href="{!! route('event.details',$reg->event_meta_data ) !!}" ><i class="fa fa-envelope"></i> Event Details </a>
                                        <a class="btn btn-xs btn-white" href="{!! route('registration.show',$reg->id ) !!}" ><i class="fa fa-users"></i> Registered Lists </a>
                                        <a class="btn btn-xs btn-white" data-toggle="modal" href="#myModal2"><i class="fa fa-check-circle"></i> Register </a>
                                    </div>
                                </div>



                                <!-- Modal For reset -->
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




                            </div>
                        </div>
                    @endforeach
                @else
                    No Event for Registration
                @endif

            </div>
        </div>
    </div>



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

