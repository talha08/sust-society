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
                                <li><a href="#">Profile</a></li>

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
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <center>
                            <div>
                                <div class="ibox-content no-padding border-left-right">

                                    {{--{!!  Html::image(Auth::user()->profile->photo, 'alt', array( 'width' => 200, 'height' => 200, 'class'=>'img-responsive' )) !!}--}}


                                    <fieldset>
                                        <br/>
                                        <img class="preview" id="preview" alt=" " src="{!!asset($user->profile->photo)!!}">
                                        <br/>
                                        <br/>
                                    </fieldset>




                                </div>
                                <div class="ibox-content profile-content">
                                    <h4><strong>{!! $user->name  !!}</strong></h4>
                                    <p><i class="fa fa-clock-o"></i>  Joined at {!! $user->created_at->diffForHumans() !!}</p>
                                    <hr><h3>
                                        {!! $user->dept->name !!}

                                    </h3><hr>



                                    {{--<div class="user-button">--}}
                                    {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                    {{--<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                    {{--<button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </center>
                    </div>
                </div>





                <div class="col-md-6">
                        <div class="ibox-content">
                            <div>
                                <div class="feed-activity-list">
                                    @if(Auth::user()->id == $user->id)
                                        <div class="feed-element">
                                            <div class="media-body ">

                                                {!!Form::model($user->profile,['route' => ['profile.update',$user->id], 'method' => 'put' , 'files'=>true])!!}

                                                @if(Auth::user()->hasRole('student'))
                                                    <div class="form-group">
                                                        {!!Form::text('father_name', null ,array('class' => 'form-control','placeholder' =>  'Father Name....'))!!}
                                                    </div>


                                                    <div class="form-group">
                                                        {!!Form::text('mother_name',null,array('class' => 'form-control','placeholder' =>  'Mother Name.....'))!!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!!Form::text('district', null,array('class' => 'form-control','placeholder' =>  'District...'))!!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!!Form::text('high_school', null,array('class' => 'form-control','placeholder' =>  'High School....'))!!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!!Form::text('college', null,array('class' => 'form-control','placeholder' =>  'College...'))!!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!!Form::text('batch', null,array('class' => 'form-control','placeholder' =>  'Batch....'))!!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!!Form::text('reg', null,array('class' => 'form-control','placeholder' =>  'Registration...'))!!}
                                                    </div>
                                                @endif
                                                    <div class="form-group">
                                                        {!!Form::text('designation', null,array('class' => 'form-control','placeholder' =>  'Designation....'))!!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!!Form::textarea('about_me',null,array('class' => 'form-control','placeholder' =>  'About me...'))!!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('photo', 'Change Image :', array('class' => 'control-label')) !!}<br/>
                                                        <input type="file" name="photo" id="imgInp " onchange="loadFile(event);">
                                                    </div><br/>

                                                    <div class="form-group">
                                                        {!! Form::submit('Update Profile', array('class' => 'btn btn-block btn-success')) !!}
                                                    </div>



                                            </div>
                                        </div>

                                    @else
                                        @if($user->hasRole('student'))
                                            <br><hr>

                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>Father name:</b> {!! $user->profile->father_name or 'Not Updated Yet' !!}
                                                </div>
                                            </div><hr>
                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>Mother Name:</b> {!! $user->profile->mother_name  or 'Not Updated Yet'!!}
                                                </div>
                                            </div><hr>
                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>District:</b> {!! $user->profile->district or 'Not Updated Yet'!!}
                                                </div>
                                            </div><hr>
                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>High School:</b> {!! $user->profile->high_school or 'Not Updated Yet' !!}
                                                </div>
                                            </div><hr>
                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>College:</b> {!! $user->profile->college or 'Not Updated Yet' !!}
                                                </div>
                                            </div><hr>
                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>Registration:</b> {!! $user->profile->reg or 'Not Updated Yet' !!}
                                                </div>
                                            </div><hr>

                                            <div class="feed-element">
                                                <div class="media-body ">
                                                    <b>Batch:</b> {!! $user->profile->batch or 'Not Updated Yet' !!}
                                                </div>
                                            </div>
                                        @endif

                                         <br><hr>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                <b>Designation:</b> {!! $user->profile->designation or 'Not Updated Yet' !!}
                                            </div>
                                        </div><hr>

                                        <div class="feed-element">
                                            <div class="media-body ">
                                               <B> About User:</B> {!! $user->profile->about_me or 'Not Updated Yet' !!}
                                            </div>
                                        </div><hr>

                                    @endif



                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- /Main Content -->


@stop
@section('style')
    <style>
        fieldset {
            border:0;
            margin-bottom:20px;
        }

        input {
            display:block;
        }

        img.preview {
            width:200px;
            height:200px;
            clear:both;
            margin:10px 0;
        }
        .main-content p, .content p {
            text-align: center;
        }
    </style>
@stop

@section('script')
    <!--photo upload-->
    {!! Html::script('js/photo_upload.js') !!}
@stop
